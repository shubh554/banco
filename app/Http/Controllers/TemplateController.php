<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();
        return view('template',['templates'=>$templates]);
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'message' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //inserting the record
        $template = new Template();
        $template->name = $request->input('name');
        $template->message = $request->input('message');
        $template->save();
        
        return redirect()->back()->with('success', 'Template created successfully');
    }

    public function delete($id)
    {
     $template = Template::find($id);
     $template->delete();
 
     return redirect()->back()->with('success', 'Template deleted successfully!');
    }
}
