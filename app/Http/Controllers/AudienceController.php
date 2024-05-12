<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audience;
use App\Models\City;

class AudienceController extends Controller
{
    public function index(Request $request)
    {
        $list = Audience::all();
        $state = City::distinct()->pluck('state');
        $city = City::distinct()->pluck('city');
        $data = [
                 'list'=>$list->toArray(),
                 'state_list'=> $state->toArray(),
                 'city_list'=> $city->toArray()
                ];
                
        return view('audience',$data);
    }

    public function add(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            'state' => 'sometimes|list|max:255',
            'category' => 'sometimes|list|max:100',
            'segment' => 'sometimes|list|max:100',
            'city' => 'sometimes|list|max:255',
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
