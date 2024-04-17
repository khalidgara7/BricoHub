<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    //login
    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {

        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            $request->session()->regenerate();
            $request->session()->put("user", $user);
            if ($user->isAdmin()) {
                return redirect('dashboard');
            }
            if ($user->isEmployee()) {
                return redirect('/profile');
            }
            if($user->isEmployeur()){
                return redirect('/');
            }

        } else {
            // Authentication failed
            return redirect()->back()->withInput($request->only('email'))
                ->withErrors(array('password' => 'Invalid email or password.'));
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
