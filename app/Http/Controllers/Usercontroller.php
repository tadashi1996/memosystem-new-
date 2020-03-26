<?php

namespace App\Http\Controllers;

use  App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function index(Request $request)
    {   

        $items = User::all();
        return view('user.index', ['items' => $items]);
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'name'     => 'required|string|max:255',
            'gender'   => 'required',
            'age'      => 'required|integer',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data){
               return User::create([
            'name'     => $data['name'],
            'gender'   => $data['gender'],
            'age'      => $data['age'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
    }
    
}
