<?php

namespace App\Http\Controllers;
use SplFileObject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banco_Staff_Contact;
use App\Models\Field_Staff_Communication;
use Carbon\Carbon;

class FieldStaffController extends Controller
{
    public function index()
    {
        $list = Field_Staff_Communication::all();
        return view('field_staff',['list'=>$list]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('excel_file');

         // Open the CSV file
         $csv = new SplFileObject($file->getPathname());

         $count = 0;
         // Loop through each row
         while (!$csv->eof()) {
         
             $data = $csv->fgetcsv();
             if (!array_filter($data)) {
                 continue; 
             }
            
             if (count($data) != 2) {
                 continue;
             }
             
             $sap = $data[0];
             if($count)
             {
                if($sap)
                {
                    $records = Banco_Staff_Contact::where('SAP_Code', 'like', '%'.$sap.'%')
                    ->where('verified', 1)
                    ->get(); 
                    
                    foreach($records as $row){
                
                        $curl = curl_init();
                     curl_setopt_array($curl, array(
                     CURLOPT_URL => 'https://api.ultramsg.com/instance85736/messages/chat',
                     CURLOPT_RETURNTRANSFER => true,
                     CURLOPT_ENCODING => "",
                     CURLOPT_MAXREDIRS => 10,
                     CURLOPT_TIMEOUT => 30,
                     CURLOPT_SSL_VERIFYHOST => 0,
                     CURLOPT_SSL_VERIFYPEER => 0,
                     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                     CURLOPT_CUSTOMREQUEST => "POST",
                     CURLOPT_POSTFIELDS => http_build_query([
                        'token' => 'o2uznzefj6qyd2oj',
                        'to' => $row['Mobile'],
                       'body'=>$data[1]
                     ]),
                     CURLOPT_HTTPHEADER => array(
                         "content-type: application/x-www-form-urlencoded"
                     ),
                     ));
                 
                     $response = curl_exec($curl);
                     $err = curl_error($curl);
                     
                     curl_close($curl);
                     Field_Staff_Communication::create([
                        'sap_code' => $sap,
                        'name' => $row['Name'],
                        'message' => $data[1],
                        'date' =>  Carbon::now()->format('Y/m/d'),
                    ]);
                    }
                }
                else
                {
                  continue;
                }
             }
             $count++;
         }  
         return redirect()->back()->with('success', 'Communication added successfully!');
 
    }
}
