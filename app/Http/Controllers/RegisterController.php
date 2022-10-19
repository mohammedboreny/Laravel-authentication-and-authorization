<?php

namespace App\Http\Controllers;

use App\models\User;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {

        return view('register.create');
    }


    public function store()
    {



        // validate the registration form inputs
        $attribute = request()->validate([
            'name' => 'required|max:255|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:2|max:255',
        ]);

        //user password encryption
        $attribute['password'] = bcrypt($attribute['password']);
        
        //user creating
        $user = User::create($attribute);

        //user signing in after sign up successfully
        auth()->login($user);

        //return user to home page and show message
        return redirect('index')->with('success', 'User created successfully');
    }
}
