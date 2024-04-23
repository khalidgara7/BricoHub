<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Service;
use App\Models\User;
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
        $services = Service::with('Employee')->latest()->take(6)->get();
        // dd($services);

        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'employee');
        })->latest()->take(4)->get();
        $employes = Employee::get();


        // foreach ($services as $service) {
        //     dd($service->category->name);
        // }
        // foreach ($services as $service) {
        //     dd($service->employee->user->name);
        // }
        // dd($employes);
        return view('front.index', compact('categories', 'services', 'users'));
    }
}
