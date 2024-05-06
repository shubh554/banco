<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $roles = $roles->toArray();
        $users = User::with('roles')->get();
        
        return view('users',['roles'=>$roles,'users'=>$users->toArray()]);
    }
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'designation' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/',
            'role' => 'required'
        ]);
        if ($validator->fails()) {
            print_r($validator->errors());
        }
        $validatedData = $validator->validated();
        $user = new User();
        $user->name = $validatedData['name'];
        $user->designation = $validatedData['designation'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']); // Hash the password for security
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
