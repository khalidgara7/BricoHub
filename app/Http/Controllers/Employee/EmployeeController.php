<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreEmployeeInfosRequest;
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
        // $user = Auth::user();
        $data = $request->validated();
        $userId = Auth::id();
        $data['user_id'] = $userId;
        $imageName = '';
        if ($image = $request->file('image')) {
            $imageName = time() . '-' . $data['phone_number'] . '.' . $image->getClientOriginalExtension();
            $data['image'] = $imageName;
            // $image->move('images/uploads', $imageName);
            $image->storeAs('public/images/employee', $imageName);

        }

        Employee::create($data);

        return redirect('/')->with('success', 'Employee have created successfully.');
    }
}
