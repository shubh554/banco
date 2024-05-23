<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mechanic_Contact;
use App\Models\Premium_Dealer_Contact;
use App\Models\Banco_Staff_Contact;
use App\Models\Dealer_Contact;
use App\Models\Distributor_Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $data=[
        'mechanicContactsCount' => Mechanic_Contact::count(),
        'premiumDealerContactsCount' => Premium_Dealer_Contact::count(),
        'bancoStaffContactsCount' => Banco_Staff_Contact::count(),
        'dealerContactsCount' => Dealer_Contact::count(),
        'distributorContactsCount' => Distributor_Contact::count()
        ];
        return view('dashboard',['data'=>$data]);
    }
}
