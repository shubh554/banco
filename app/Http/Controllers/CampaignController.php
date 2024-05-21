<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Communication;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Models\Premium_Dealer_Contact;
use App\Models\Audience;
use Illuminate\Support\Str;
use App\Models\Message_Log;
use App\Models\Banco_Staff_Contact;


class CampaignController extends Controller
{
    public function index()
    {
        
        
        $audience = Audience::all();
        $templates = Template::all();
        $communications = Communication::with([
            'template',
            'audience'
        ])->withCount([
            'messageLogs',
            'messageLogs as message_logs_with_status_true_count' => function ($query) {
                $query->where('status', true);
            }
        ])->get();
        
        return view('campaign',['templates'=>$templates,'communications'=>$communications,'audience' =>$audience]);
    }

    public function AddCampaign(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'audience_id' => 'required',
            'template_id' => 'required',
        ]);
        
        if ($validator->fails()) {
            print_r($validator->errors());
        }
        $validatedData = $validator->validated();
        $communicationId = time();
        //inserting the communication
        $communication = Communication::create([
            'name'=> $validatedData['name'],
            'audience_id' => $validatedData['audience_id'],
            'template_id' => $validatedData['template_id'],
            'communication_id' => $communicationId  
         ]);
         $lastInsertedId = $communication->id;

        //creating the message log
        $audiences = Audience::find($validatedData['audience_id']);
       
        $audiences = $audiences->toArray();
        $contacts = collect([]);
        $staffContacts = collect([]);
        foreach($audiences['category'] as $item)
        {
                   
            if($item == 'Banco_Staff_Contact')
            {
                $sap_codes = explode(",", $audiences['SAP_Code']);

                foreach($sap_codes as $sap_code)
                {
                    $records = Banco_Staff_Contact::where('SAP_Code', 'like', '%' . $sap_code . '%')
                                ->where('verified',1)
                                ->get();
                    $staffContacts = $staffContacts->merge($records);
                    echo '<pre>';print_r($staffContacts->toArray());
                }
                    
            }
            else
            {
            $modelInstance = app()->make("App\\Models\\{$item}");
            $query = $modelInstance::query();
            
            if (!empty($audiences['state'])) {
                $query->whereIn('state', $audiences['state']);
            }
            
            if (!empty($audiences['city'])) {
                $query->whereIn('city', $audiences['city']);}
            
                $query->where('verified', 1);
                $modelResults = $query->get();
                $contacts = $contacts->merge($modelResults);
            
            }


        }
       
       
        $contacts  = $contacts->toArray();
        
        
        $filteredContacts = [];
        if($audiences['segment']  == null)
        $audiences['segment'] =[];
        foreach($contacts as $item2)
        {
          foreach($audiences['segment'] as $item3)
          {
            if( strtolower($item2[$item3]) == 'yes')
            {
                array_push($filteredContacts,$item2);
            }
            $item2[$item3];
          }          
        }
        if(!empty($filteredContacts))
        {
            $contacts = $filteredContacts;
        }

        $staffContacts = $staffContacts->toArray();
       

        foreach($contacts as $item4)
        {
            Message_Log::create([
                'mobile' => $item4['mobile'],
                'template_id'=>$validatedData['template_id'],
                'communication_id'=>$lastInsertedId,

            ]);
        }

        foreach($staffContacts as $item5)
        {
            Message_Log::create([
                'mobile' => $item5['Mobile'],
                'template_id'=>$validatedData['template_id'],
                'communication_id'=>$lastInsertedId,

            ]);
        }
        
         return redirect()->back()->with('success', 'Communication added successfully!');
   }
}
