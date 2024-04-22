<?php

namespace App\Http\Controllers\frontOffice\services;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ListServicesController extends Controller
{
    //
    public function listServices()
    {
        $services = Service::paginate(8);
        $categories = Category::all();
        return view('front.listservices', compact('services', 'categories'));
    }
}
