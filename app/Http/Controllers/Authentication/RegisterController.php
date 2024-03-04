<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showregistre(){
        return view('auth.register');
    }

    public function register(Request $request)
    {


        $data = $request->validate([
            'name_user' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8',
        ]);
        $data['password'] = Hash::make($data['password']);
//        $data['role_id'] = 1;

        Utilisateur::create($data);

        return redirect('auth/login');
    }

}
