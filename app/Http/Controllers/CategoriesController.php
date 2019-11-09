<?php

namespace App\Http\Controllers;

use App\Category;
use App\Detail;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($category_name)
    {

        $categories = Category::where('category_name', $category_name)->first();
        $category_id = $categories->id;
        $categories = Detail::where('category_id', $category_id)->get();
        return view('category', ['categories' => $categories, 'category_name' => $category_name]);
    }
}
