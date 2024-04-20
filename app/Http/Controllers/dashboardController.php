<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function admin()
    {
        $users = User::paginate(5);
        $categories = Category::latest()->take(4)->get();
        $user = Auth::user();
        // dd($user);
        $UserStatique = User::count();
        $total_categories = Category::count();
        return view('Admin.index', compact('user', 'UserStatique', 'total_categories', 'users', 'categories'));
    }

    
}
