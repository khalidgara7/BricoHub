<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\ServiceStoreRequest;
use App\Http\Requests\Services\ServiceUpdateRequest;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('front.services.create', compact('categories'));
    }

    public function store(ServiceStoreRequest  $request)
    {

        $data = $request->validated();
        $data['user_id'] = auth()->user()->employee->user_id;

        if ($image = $request->file('image')) {
            $imageName = time() . '-' . $data['title'] . '.' .  $image->getClientOriginalExtension();
            $data['image'] = $imageName;
            $image->storeAs('public/images/services', $imageName);
        }

        $service = Service::create($data);
        return redirect()->route('profile.index', Auth::id());
    }

    public function edit(Service $service)
    {
        $categories = Category::all();
        return view('front.services.update', compact('service', 'categories'));
    }

    public function update(ServiceUpdateRequest $request, Service $service)
    {
        $data = $request->validated();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            Storage::delete('public/images/services/' . $service->image);

            $fileName = time() . '_' . $data['title'] . '.' . $request->image->extension();
            $request->image->storeAs('public/images/services', $fileName);
            $data['image'] = $fileName;
        }

        $service->update($data);
        return redirect()->route('profile.index', Auth::id());
    }

    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        if ($service) {
            return redirect()->route('profile.index')->with('success', 'Service deleted successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to delete the service.');
        }
    }
}
