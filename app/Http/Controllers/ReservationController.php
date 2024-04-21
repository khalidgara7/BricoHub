<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function reserve(Service $service)
    {
        $user = Auth::user();

        $service->reservations()->create([
            'employeur_id' => $user->id,
            'status' => 'pending',
            'price' => $service->price,
            'date_reservation' => now(),
        ]);

        return redirect()->back()->with('success', 'Reservation has been made successfully');
    }
}
