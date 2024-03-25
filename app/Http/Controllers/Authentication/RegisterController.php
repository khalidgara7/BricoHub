<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\regesterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showregistre()
    {
        return view('auth.register');
    }

    public function register(RegesterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        $role = Role::where('name', $data['role'])->first();
        $user->roles()->attach($role->id);
        if ($user) {
            auth()->login($user);
            if ($user->isEmployee()) {
                return redirect()->route('Employeur.form', $user->id);
            } elseif ($user->isEmployeur()) {
                return redirect('/');
            }
        } else {
            return back()->with('error', 'Registration failed.');
        }
        return redirect('auth/register')->with('error', 'Registration failed.');
    }

}
