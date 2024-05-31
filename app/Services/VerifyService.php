<?php
namespace App\Services;
use App\Models\Dealer_Contact;
use Illuminate\Support\Facades\DB;

class VerifyService{
    public function verify($firstTwoRecords,$table)
    {
        foreach($firstTwoRecords as $item)
        {
            $mobile = $item['mobile'];
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
               
                $status = $response->status ?? null;
                if($status == 'valid')
                    {
                        DB::table($table)->where('id', $id)->update(['verified' => 1]);
                    }
                    else
                    {
                        DB::table($table)->where('id', $id)->update(['verified' => 0]);
                    }
         }
    }
}



?>