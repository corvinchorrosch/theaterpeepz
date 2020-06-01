<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Friend;

/*/class SearchController extends Controller
{
    public function index()
    {
        $query = request()->input('q');
        $products = Friend::where('name', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->paginate(8)
            ->appends(request()->query());

        return view('frontend/search', [
            'query' => $query,
            'products' => $products
        ]);
    }
}
