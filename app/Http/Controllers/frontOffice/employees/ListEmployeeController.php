<?php

namespace App\Http\Controllers\frontOffice\employees;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ListEmployeeController extends Controller
{
    public function listEmployee()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'employee');
        })->get();
        return view('front.listemployee',compact('users'));
    }
}
