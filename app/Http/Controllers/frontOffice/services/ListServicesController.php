<?php

namespace App\Http\Controllers\frontOffice\services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ListServicesController extends Controller
{
    //
    public function listServices()
    {
        $services = Service::paginate(8);
        return view('front.listservices', compact('services'));
    }
}
