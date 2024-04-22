<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LiveSerachController extends Controller
{
    public function liveSearch(Request $request)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');

        // Query to filter based on title parameter
        $query = Service::query();

        if (!empty($title)) {
            $query->where('title', 'like', '%' . $title . '%');
        }

        if ($category_id) {
            $query->where('category_id', '=', $category_id);
        }

        $results = $query->get();

        return response()->json($results);
    }
}
