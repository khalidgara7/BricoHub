<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;

class EmployeeProfileController extends Controller
{

    public function index($userid)
    {
        $user = User::find($userid);

        if(Auth::check() && Auth::user()->isEmployee())
        {
            $services = Service::where('user_id', auth()->user()->employee->user_id)->paginate(1);
        }else{

            $services = Service::where('user_id', $userid)->get();
        }

        return view('front.profile.layouts.employee',compact('services','user'));
    }


}
