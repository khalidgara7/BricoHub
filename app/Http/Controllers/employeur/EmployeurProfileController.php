<?php

namespace App\Http\Controllers\employeur;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeurProfileController extends Controller
{
    public function index()
    {
            $reservations = Reservation::where('employeur_id', auth()->user()->id)->get();

        return view('front.profile.layouts.employeur',compact('reservations'));
    }
}
