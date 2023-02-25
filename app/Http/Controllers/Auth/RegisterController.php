<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){

        return view("auth.register");
    }

    public function processRegister(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|max:255|confirmed',
            'gender' => "required"
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);


        User::create($validatedData);

        return redirect('auth/login')->with('success', 'Registration successfull! Please login');
            
     }
}
