<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audience;
use App\Models\City;
use Illuminate\Support\Facades\Validator;
use App\Models\Banco_Staff_Contact;
use Illuminate\Support\Facades\Response;

class AudienceController extends Controller
{
    public function index(Request $request)
    {
        $list = Audience::all();
        $state = City::distinct()->pluck('state');
        $city = City::distinct()->pluck('city');
        $data = [
                 'list'=>$list->toArray(),
                 'state_list'=> $state->toArray(),
                 'city_list'=> $city->toArray()
                ];
                
        return view('audience',$data);
    }

    public function add(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            'state' => 'sometimes|list|max:255',
            'category' => 'required|list|max:100',
            'segment' => 'sometimes|list|max:100',
            'city' => 'sometimes|list|max:255',
            'product_type' => 'sometimes|list',
            'SAP_Code' => 'sometimes'
        ]);
        
       
        
        $model = new Audience();
        $model->name = $request->name;
        $model->state = $request->state;
        $model->category = $request->category;
        $model->segment = $request->segment;
        $model->city = $request->city;
        $model->SAP_Code = $request->SAP_Code;
        $model->product_type = $request->product_type;
        $model->save();

        return redirect()->back()->with('success', 'Audience added successfully!');
    }

    public function getCount(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes',
            'state' => 'sometimes|array|max:255',
            'category' => 'required|array|max:100',
            'segment' => 'sometimes|array|max:100',
            'city' => 'sometimes|array|max:255',
            'product_type' => 'sometimes|array',
            'SAP_Code' => 'sometimes'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        $contacts = collect([]);
        $staffContacts = collect([]);
    
        foreach ($request->input('category') as $item) {
            if ($item == 'Banco_Staff_Contact') {
                if (empty($request->input('SAP_Code'))) {
                    return response()->json(['errors' => 'Banco Staff Must Have SAP Codes'], 421);
                } else {
                    $sap_codes = explode(",", $request->input('SAP_Code'));
                    foreach ($sap_codes as $sap_code) {
                        $records = Banco_Staff_Contact::where('SAP_Code', 'like', '%' . $sap_code . '%')
                                    ->where('verified', 1)
                                    ->get();
                        $staffContacts = $staffContacts->merge($records);
                    }
                }
            } else {
                $modelInstance = app()->make("App\\Models\\{$item}");
                $query = $modelInstance::query();
                
                if (!empty($request->input('state'))) {
                    $query->whereIn('state', $request->input('state'));
                }
                
                if (!empty($request->input('city'))) {
                    $query->whereIn('city', $request->input('city'));
                }
                
                if (!empty($request->input('product_type'))) {
                    $query->whereIn('product_type', $request->input('product_type'));
                }
                
                $query->where('verified', 1);
                $modelResults = $query->get();
                $contacts = $contacts->merge($modelResults);
            }
        }
    
        $contacts = $contacts->toArray();
        $staffContacts = $staffContacts->toArray();
    
        $filteredContacts = [];
      
        if (empty($request->segment)) {
            $request->segment = [];
          
        }
        foreach ($contacts as $contact) {
            foreach ($request->segment as $segment) {
                if (strtolower($contact[$segment]) == 'yes') {
                    array_push($filteredContacts,$contact);
                }
            }
        }
    
        if (!empty($filteredContacts)) {
            $contacts = $filteredContacts;
            $uniqueData = [];
            $mobileNumbers = [];

            foreach ($contacts as $item) {
                if (!in_array($item['mobile'], $mobileNumbers)) {
                    $uniqueData[] = $item;
                    $mobileNumbers[] = $item['mobile'];
                }
            }
            
           $contacts = $uniqueData;
        }


    
        // Output the count
        return count($staffContacts)+count($contacts);
    }
    

    public function delete(Request $request,$id)
    {
        $audience = Audience::find($id);
        $audience->delete();
 
        return redirect()->back()->with('success', 'Audience deleted successfully!');
    }
}
