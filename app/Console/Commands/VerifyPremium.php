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

              $client = new Client();
                $url = 'https://phone.watverifyapi.live/is-whatsapp-no/get?api_key=API-X-581526571984653594294354442-P-API&phone=91'.$mobile;

                try {
                    // Make GET request to the API
                    $response = $client->get($url);
        
                    // Get response body as string
                    $res = $response->getBody()->getContents();
                    $resultObject = json_decode($res);
                    if($resultObject->result)
                    {
                        Premium_Dealer_Contact::where('id', $id)->update(['verified' => 1]); 
                        try {
                            // Make POST request with JSON payload
                            $client1 = new Client();
                            $response1 = $client1->post('https://phone.watverifyapi.live/send-wa-message/post', [
                                'json' => [
                                    'api_key' => 'API-X-581526571984653594294354442-P-API',
                                    'phone' => '91'.$mobile,
                                    'message' => 'Welcome to our WhatsApp Channel! 🎉 We are thrilled to have you onboard.Get ready for all the latest updates delivered straight to your fingertips.Have any questions or need assistance? Feel free to reach out to us directly through this channel. Lets stay connected!'
                                ]
                            ]);
                        } catch (\Exception $e) {
                               
                        }
                        
                    }
                    else
                    {
                        Premium_Dealer_Contact::where('id', $id)->update(['verified' => 0]);  
                    }
                  
                  
                } catch (\Exception $e) {
                    // Handle any exceptions or errors
                    print_r($e);
                }
        }
    }
}
