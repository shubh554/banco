<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Communication;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

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
        
        try {
            // Make POST request with JSON payload
            $client1 = new Client();
            $response1 = $client1->post('https://phone.watverifyapi.live/send-wa-message/post', [
                'json' => [
                    'api_key' => 'API-X-581526571984653594294354442-P-API',
                    'phone' => '91'.$validatedData['audience'],
                    'message' =>$template['message']
                ]
            ]);
        } catch (\Exception $e) {
           print_r($e);die();      
        }

        return redirect()->back()->with('success', 'Communication added successfully!');



    }
}
