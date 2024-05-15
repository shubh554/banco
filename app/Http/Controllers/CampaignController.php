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

class CampaignController extends Controller
{
    public function index()
    {
        
        $templates = Template::all();
        $communications = Communication::all();
        return view('campaign',['templates'=>$templates,'communications'=>$communications]);
    }

    public function AddCampaign(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'audience' => 'required|string',
            'template' => 'required|string',
        ]);
        
        if ($validator->fails()) {
            print_r($validator->errors());
        }
        $validatedData = $validator->validated();

        DB::table('communications')->insert([
              'name'=> $validatedData['name'],
              'audience' => $validatedData['audience'],
              'template' => $validatedData['template']
        ]);

        $template = Template::where('name', $validatedData['template'])->first();
        $template = $template->toArray();
        
       
            $params=array(
                'token' => 'o2uznzefj6qyd2oj',
                'to' => '+919161760876',
                'body' => 'WhatsApp API on UltraMsg.com works good'
            );
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded'
            ];
            $options = ['form_params' =>$params ];
            $client1 = new Client();
            $response1 = $client1->post('https://api.ultramsg.com/instance85736/messages/chat', [
                'form_params' => [
                    'token' => 'o2uznzefj6qyd2oj',
                    'to' => '+919161760876',
                    'body' => 'WhatsApp API on UltraMsg.com works good'
                
                ],
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                   
                ]
            ]);
        

        return redirect()->back()->with('success', 'Communication added successfully!');



    }
}
