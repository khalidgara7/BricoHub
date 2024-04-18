<?php

namespace App\Http\Controllers\employeur;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeurProfileController extends Controller
{
    public function index()
    {
        // if (Auth::user()->role == 'employee') {
        //     $services = Offer::where('user_id', auth()->user()->employee->user_id)->get();
        // }elseif (Auth::user()->role == 'employeur') {
        // }
            $offers = Offer::where('employeur_id', auth()->user()->employeur)->get();
            // $services = Service::where('user_id', auth()->user()->employee->user_id)->get();


        return view('front.profile.layouts.employeur',compact('offers'));
    }
}
