<?php

namespace App\Http\Controllers;


use App\Http\Requests\Category\StoreCategoryRequest;
use App\Models\Categorie;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function Show_Categories()
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

       $request->validated();
        $destinationPath = 'public/images/categories';
        $extension = $request->file("image")->getClientOriginalExtension();
        $newFilename = date('YmdHism') . "." . $extension;
        $request->file("image")->storeAs($destinationPath, $newFilename);

        Category::create($request->all());
        return redirect("/category")->with("success", "Category Add successfully");
    }

    public function delete(Category $categories)
    {
        $categories->delete();
        return redirect("/category")->with("success", "categories deleted");
    }

    public function show_edit_category()
    {
        return view('Admin.categories.Edit');
    }


}
