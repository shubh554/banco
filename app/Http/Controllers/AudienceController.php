<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audience;

class AudienceController extends Controller
{
    public function index(Request $request)
    {
        $list = Audience::all();
        return view('audience',['list'=>$list->toArray()]);
    }

    public function add(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            'state' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'segment' => 'required|string|max:100',
            'city' => 'required|string|max:255',
        ]);
        
        $model = new Audience();
        $model->name = $request->name;
        $model->state = $request->state;
        $model->category = $request->category;
        $model->segment = $request->segment;
        $model->city = $request->city;
        $model->save();

        return redirect()->back()->with('success', 'Audience added successfully!');
    }

    public function delete(Request $request,$id)
    {
        $audience = Audience::find($id);
        $audience->delete();
 
        return redirect()->back()->with('success', 'Audience deleted successfully!');
    }
}
