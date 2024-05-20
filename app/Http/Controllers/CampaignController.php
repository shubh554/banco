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


class CampaignController extends Controller
{
    public function index()
    {
        
        $communications = Communication::with(['template', 'audience'])->get();
        $audience = Audience::all();
        $templates = Template::all();
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
        foreach($audiences['category'] as $item)
        {
                   
            $modelInstance = app()->make("App\\Models\\{$item}");
            $modelResults = $modelInstance::whereIn('state', $audiences['state'])
            ->whereIn('city', $audiences['city'])
            ->where('verified',1)
            ->get();
            $contacts = $contacts->merge($modelResults);

        }
        $contacts  = $contacts->toArray();
        
        
        $filteredContacts = [];
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

        foreach($contacts as $item4)
        {
            Message_Log::create([
                'mobile' => $item4['mobile'],
                'template_id'=>$validatedData['template_id'],
                'communication_id'=>$lastInsertedId,

            ]);
        }
        
         return redirect()->back()->with('success', 'Communication added successfully!');
   }
}
