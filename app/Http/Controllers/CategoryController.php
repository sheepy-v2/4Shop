<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($category)
    {
        $categories = Category::all();
        $products = Product::where('products.category_id', '=', $category)
                ->where('active', true)
                ->get();

        return view('products.index')
                ->with(compact('products', 'categories'));

    }
}
    