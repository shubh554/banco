<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SplFileObject;
use App\Models\Mechanic_Contact;
use App\Models\Premium_Dealer_Contact;
use App\Models\City;
use App\Models\Banco_Staff_Contact;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function mechanic()
    {
        $mechanicContacts = Mechanic_Contact::all();
       
        return view('mechanic_contact',['list'=>$mechanicContacts]);
    }

    public function add_mechanic(Request $request)
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
           
            if (count($data) != 15) {
                continue;
            }
            
            $mobile = $data[4];
            if($count)
            {
               if(is_string($mobile) && preg_match('/^\d{10}$/', $mobile))
               {
                
                $contactExists = Mechanic_Contact::where('mobile', $mobile)->exists();
                
                if(!$contactExists)
                DB::table('mechanic_contacts')->insert([
                    'product_type' => $data[0],
                    'category' => $data[1],
                    'garage_name' => $data[2],
                    'customer_name' => $data[3],
                    'mobile' => $data[4],
                    'state' => $data[5],
                    'city' => $data[6],
                    'area' => $data[7],
                    '2-Wheeler' => $data[8],
                    'Car/MUV' => $data[9],
                    'LCV/HCV' => $data[10],
                    'Industrial' => $data[11],
                    'Genset' => $data[12],
                    'Agriculture' => $data[13],
                    'Tractor' => $data[14],
                    'created_at' => now(),
                    'updated_at' => now(),
                    'verified'=>2
                ]);
               }
               else
               {
                 continue;
               }
            }
            $count++;
        }  
        return redirect()->back()->with('success', 'Mechanic added successfully!');
      }
    
      public function PremiumDealer(Request $request)
      {
        $contacts = Premium_Dealer_Contact::all();
       
        return view('premium_dealer_contact',['list'=>$contacts]);
      }

      public function AddPremiumDealer(Request $request)
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
           
            if (count($data) != 15) {
                continue;
            }
            $mobile = $data[4];
            
            if($count)
            {
             
                if(is_string($mobile) && preg_match('/^\d{10}$/', $mobile))
               {
                
                $contactExists = Premium_Dealer_Contact::where('mobile', $mobile)->exists();
                
                if(!$contactExists)
                DB::table('premium_dealer_contact')->insert([
                    'product_type' => $data[0],
                    'category' => $data[1],
                    'dealer_name' => $data[2],
                    'customer_name' => $data[3],
                    'mobile' => $data[4],
                    'state' => $data[5],
                    'city' => $data[6],
                    'area' => $data[7],
                    '2-Wheeler' => $data[8],
                    'Car/MUV' => $data[9],
                    'LCV/HCV' => $data[10],
                    'Industrial' => $data[11],
                    'Genset' => $data[12],
                    'Agriculture' => $data[13],
                    'Tractor' => $data[14],
                    'created_at' => now(),
                    'updated_at' => now(),
                    'verified'=>2
                ]);
               }
               else
               {
                 continue;
               }
            }
            $count++;
        }  
        return redirect()->back()->with('success', 'Premium Dealers added successfully!');
      }

      public function BancoStaff(Request $request)
      {
        $contacts = Banco_Staff_Contact::all();
       
        return view('staff',['list'=>$contacts]);
      }

      public function AddBancoStaff(Request $request)
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
           
            if (count($data) != 6) {
                continue;
            }
            $mobile = $data[5];
            
            if($count)
            {
             
                if(is_string($mobile) && preg_match('/^\d{10}$/', $mobile))
               {
                
                $contactExists = Banco_Staff_Contact::where('mobile', $mobile)->exists();
                
                if(!$contactExists)
                DB::table('banco_staff_contacts')->insert([
                    'Zone' => $data[0],
                    'State' => $data[1],
                    'city' => $data[2],
                    'name' => $data[3],
                    'SAP_Code' => $data[4],
                    'mobile' => $data[5],
                     'created_at' => now(),
                    'updated_at' => now(),
                    'verified'=>2
                ]);
               }
               else
               {
                 continue;
               }
            }
            $count++;
        }  
        return redirect()->back()->with('success', 'Banco Staff added successfully!');
      }
}
