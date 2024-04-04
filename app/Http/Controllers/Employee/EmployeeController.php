<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeInfosRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function showEmployeeForm()
    {
        return view('auth.employee_info');
    }

    public function storeEmployeeInfo(StoreEmployeeInfosRequest $request)
    {

        $data = $request->validated();
        $userId = Auth::id();
        $user = Auth::user();
        $data['user_id'] = $userId;
        $imageName = '';
        if ($image = $request->file('image')) {
            $imageName = time() . '-' . $data['phone_number'] . '.' . $image->getClientOriginalExtension();
            $data['image'] = $imageName;
            $employee = Employee::create($data);
            if ($employee) {
                $image->move('images/uploads', $imageName);
                $user->roles()->attach(2);
            }
        }

        return redirect('/')->with('success', '');
    }
}
