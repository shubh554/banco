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
        $rules =[
            'name' => 'required|string',
            'message' => 'required|string|max:1000',
            'type' => 'required|string|in:chat,image,pdf',
            'file' => 'sometimes|file|max:15360'
        ];
        if ($request->type === 'pdf') {
            $rules['file'] .= '|mimes:pdf,doc,docx,txt';
        } elseif ($request->type === 'image') {
            $rules['file'] .= '|mimes:jpeg,png,jpg';
        }
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $filename = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
            $fileUrl = asset('storage/uploads/' . $filename);
        }
        else
        {
            $fileUrl = null;
        }


        //inserting the record
        $template = new Template();
        $template->name = $request->input('name');
        $template->message = $request->input('message');
        $template->type = $request->input('type');
        $template->file = $fileUrl;
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
