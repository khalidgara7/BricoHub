<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::all();
        
        $total_users = User::count();
        return view('Admin.users.index',compact('users','total_users', 'user'));
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        if ($user) {
            return redirect()->route('user.index')->with('success', 'User deleted successfully.');
        } else {
            return back()->withInput()->with('Error', 'Failed to Delete the user !!');
        }
    }
}
