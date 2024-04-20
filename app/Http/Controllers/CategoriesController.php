<?php

namespace App\Http\Controllers;


use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::paginate(5);
        $total_categories = Category::count();
        return view('Admin.categories.index',compact('user', 'categories','total_categories'));
    }

    public function create()
    {
        return view("Admin.categories.create");
    }

    public function store(StoreCategoryRequest $request)
    {

        $data = $request->validated();
        $fileName = time() . $request->name . '.' . $request->image->extension();
        $request->image->storeAs('public/images/category', $fileName);
        $data['image'] = $fileName;

        $category = Category::create($data);
        if ($category) {
            return redirect()->route('category.index')->with('success', 'Category created successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to create the category.');
        }
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if ($category) {
            return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to update the category.');
        }
    }

    public function edit(Category $category)
    {
        return view('Admin.categories.Edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validated();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

                Storage::delete('public/images/category' . $category->image);

            $fileName = time() . '_' . $request->name . '.' . $request->image->extension();
            $request->image->storeAs('public/images/category', $fileName);
            $data['image'] = $fileName;
        }
        $updated = $category->update($data);

        if ($updated) {
            return redirect()->route('category.index')->with('success', 'Category updated successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to update the category.');
        }
    }

}
