<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        $total_users = User::count();
        return view('Admin.users.index',compact('users','total_users'));
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
