<?php

namespace App\Http\Controllers;


use App\Http\Requests\Category\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
        $total_categories = Category::count();
        return view('Admin.categories.index',compact('categories','total_categories'));
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

    public function show_edit_category()
    {
        return view('Admin.categories.Edit');
    }


}
