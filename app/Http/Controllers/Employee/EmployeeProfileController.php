<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;

class EmployeeProfileController extends Controller
{
    public function index()
    {
        return view('front.profile.profile');
    }
}
