<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    //login
    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        $user = Utilisateur::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            $request->session()->regenerate();
            $request->session()->put("user", $user);

            return redirect()->route('dashboard');

        } else {
            // Authentication failed
            return redirect()->back()->withInput($request->only('email'));
        }
    }

    //logout

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->forget('user_id');
        $request->session()->invalidate();
        return redirect('/login');
    }

}
