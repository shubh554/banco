<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $roles = $roles->toArray();
        $users = User::with('roles')->get();
        
        return view('users',['roles'=>$roles,'users'=>$users->toArray()]);
    }
    public function add(CreateUserRequest $request)
    {
        $validatedData = $request->validated();
        $user = new User();
        $user->name = $validatedData['name'];
        $user->designation = $validatedData['designation'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']); 
        $user->save();

        $user->assignRole($validatedData['role']);
        return redirect()->back()->with('success', 'User added successfully!');
   }

   public function delete($id)
   {
    $user = User::find($id);
    $user->delete();

    return redirect()->back()->with('success', 'User deleted successfully!');
   }
}
