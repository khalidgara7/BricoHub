<?php

namespace App\Http\Controllers\frontOffice\services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show(Service $service)
    {
        $service = Service::with('employee')->find($service->id);
        $totalOffers = $service->reservations->where('status', 'accepted')->count();
        return view('front.services.show', compact('service', 'totalOffers'));
    }

}
