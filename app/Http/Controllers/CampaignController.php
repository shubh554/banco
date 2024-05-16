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
            'audience' => 'sometimes|string',
            'template' => 'required|string',
        ]);
        
        if ($validator->fails()) {
            print_r($validator->errors());
        }
        $validatedData = $validator->validated();

        DB::table('communications')->insert([
              'name'=> $validatedData['name'],
              'audience' => 'Test',
              'template' => $validatedData['template']
        ]);

        $template = Template::where('name', $validatedData['template'])->first();
        $template = $template->toArray();

        if($template['type'] == 'chat')
        {
            $url = 'https://api.ultramsg.com/instance85736/messages/chat';
            $params=array(
                'token' => 'o2uznzefj6qyd2oj',
                'to' => $request->audience,
                'body'=>$template['message']
                );
        }
        if($template['type'] == 'image')
        {
           $url = 'https://api.ultramsg.com/instance85736/messages/image';
           $params=array(
            'token' => 'o2uznzefj6qyd2oj',
            'to' => $request->audience,
            'image' => $template['file'],
            'caption' => $template['message']
            );
        }
        if($template['type'] == 'pdf')
        {
            $url = 'https://api.ultramsg.com/instance85736/messages/document';
            $params=array(
                'token' => 'o2uznzefj6qyd2oj',
                'to' => $request->audience,
                'filename' => 'banco.pdf',
                'document' => $template['file'],
                'caption' => $template['message']
                );
        }

        $contacts = Premium_Dealer_Contact::all();
        $contacts = $contacts->toArray();
        
        foreach($contacts as $row)
        {
        $params['to'] = $row['mobile'];  
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded"
        ),
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        }

     return redirect()->back()->with('success', 'Communication added successfully!');
   }
}
