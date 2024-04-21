<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function reserve(Request $request, Service $service)
    {
        $request->validate([
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Check if there are any reservations for this service within the given date range
        $existingReservation = $this->reservationExists($service, $request);

        if ($existingReservation) {
            $start_date = $request->start_date;
            $end_date = $request->end_date;
            $message = "Sorry, this service is not available for reservation from $start_date to $end_date. Please choose different dates.";

            return redirect()->back()->with('error', $message);        }

        $user = Auth::user();

        $service->reservations()->create([
            'employeur_id' => $user->id,
            'status' => 'pending',
            'price' => $service->price,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'date_reservation' => now(),
        ]);

        return redirect()->back()->with('success', 'Reservation has been made successfully');
    }

    public function reservationExists(Service $service, Request $request): bool
    {
        return $service->reservations()
            ->where('status', 'accepted')
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                    ->orWhereBetween('end_date', [$request->start_date, $request->end_date]);
            })
            ->exists();
    }

    public function updateStatus(Request $request, Reservation $reservation)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        $reservation->update([
            'status' => $request->status,
        ]);

        return response()->json(['success', 'Reservation status has been updated successfully']);
    }
}
