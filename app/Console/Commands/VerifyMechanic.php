<?php

namespace App\Console\Commands;
use App\Models\Mechanic_Contact;
use Illuminate\Console\Command;
use GuzzleHttp\Client;

class VerifyMechanic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verify-mechanic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify wether a mechanic contact exists on whatsapp';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $firstTwoRecords = Mechanic_Contact::where('verified', 2)->take(2)->get();
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
                        Mechanic_Contact::where('id', $id)->update(['verified' => 1]); 
                    }
                    else
                    {
                        Mechanic_Contact::where('id', $id)->update(['verified' => 0]);  
                    }
                  
                  
                } catch (\Exception $e) {
                    // Handle any exceptions or errors
                    print_r($e);
                }
        }
    }
}
