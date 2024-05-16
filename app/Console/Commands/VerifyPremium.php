<?php

namespace App\Console\Commands;
use App\Models\Premium_Dealer_Contact;
use Illuminate\Console\Command;
use GuzzleHttp\Client;

class VerifyPremium extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verify-premium';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify wether a premium dealer contact exists on whatsapp';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $firstTwoRecords = Premium_Dealer_Contact::where('verified', 2)->take(2)->get();
        $firstTwoRecords = $firstTwoRecords->toArray(); 

        foreach($firstTwoRecords as $item)
        {
            $mobile = $item['mobile'];
            $id = $item['id'];
            $verified = false;
            //checking valid number

            $params=array(
                'token' => 'o2uznzefj6qyd2oj',
                'chatId' => '9161760876',
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
                        Premium_Dealer_Contact::where('id', $id)->update(['verified' => 1]); 
                        $url = 'https://api.ultramsg.com/instance85736/messages/chat';
                        $params=array(
                            'token' => 'o2uznzefj6qyd2oj',
                            'to' => $mobile,
                            'body'=>'Welcome to our WhatsApp Channel! 🎉 We are thrilled to have you onboard.Get ready for all the latest updates delivered straight to your fingertips.Have any questions or need assistance? Feel free to reach out to us directly through this channel. Lets stay connected!'
                            );
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
                    else
                    {
                        Premium_Dealer_Contact::where('id', $id)->update(['verified' => 0]);  
                    }
                  
                  
                
        }
    }
}
