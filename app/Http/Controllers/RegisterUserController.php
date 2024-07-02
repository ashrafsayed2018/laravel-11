<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    //

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate the request
        
        $validatedAttributes =  $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'password' => ['required', Password::min(8),'confirmed'],
            ]);

        // create the user

       $user = User::create($validatedAttributes);

        // create empolyer 

       Employer::create([
           'user_id' => $user->id,
           'name' => $user->first_name . ' ' . $user->last_name
       ]);


        // redirect to login page

        return redirect('/login');
    }
}
