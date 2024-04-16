<?php

namespace App\Http\Controllers\frontOffice\categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ListCategoriesController extends Controller
{
    public function listCategories()
    {
        $categories = Category::paginate(9);
        return view('front.listcategories', compact('categories'));
    }
}
