<?php

namespace App\Console\Commands;
use App\Models\Banco_Staff_Contact;
use Illuminate\Console\Command;

class VerifyStaff extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verify-staff';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify wether a banco staff contact exists on whatsapp';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $firstTwoRecords = Banco_Staff_Contact::where('verified', 2)->take(2)->get();
        $firstTwoRecords = $firstTwoRecords->toArray(); 

        foreach($firstTwoRecords as $item)
        {
            $mobile = $item['Mobile'];
            $id = $item['id'];
            $verified = false;
            //checking valid number

            $params=array(
                'token' => 'o2uznzefj6qyd2oj',
                'chatId' => $mobile,
                'nocache' => 'true'
                );
                $curl = curl_init();
                
                curl_setopt_array($curl, array(
                  CURLOPT_URL => "https://api.ultramsg.com/instance85736/contacts/check?" .http_build_query($params),
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "GET",
                  CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded"
                  ),
                ));
                
                $response = curl_exec($curl);
                $response = json_decode($response);
               
                if($response->status == 'valid')
                    {
                        Banco_Staff_Contact::where('id', $id)->update(['verified' => 1]); 
                    }
                    else
                    {
                        Banco_Staff_Contact::where('id', $id)->update(['verified' => 0]);  
                    }
                  
                  
                
        }
    }
}
