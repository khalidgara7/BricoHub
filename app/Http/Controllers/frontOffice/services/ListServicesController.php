<?php

namespace App\Http\Controllers\frontOffice\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListServicesController extends Controller
{
    //
    public function listServices()
    {
        return view('front.listservices');
    }
}
