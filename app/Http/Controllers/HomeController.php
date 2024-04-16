<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        $categories = Category::latest()->take(4)->get();
        $services = Service::all();
        $Employee = Employee::all();
        return view('front.index', compact('categories', 'services', 'Employee'));
    }
}
