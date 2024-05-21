<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message_Log;

class MessageLogs extends Controller
{
    public function index()
    {
        $list = Message_Log::all();
        return view('logs',['list'=>$list]);
    }
}
