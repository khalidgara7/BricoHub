<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Composer;

class EmployeeProfileController extends Controller
{

    public function index()
    {
        $services = Service::where('user_id', auth()->user()->employee->user_id)->get();
        return view('front.profile.profile',compact('services'));
    }


}
