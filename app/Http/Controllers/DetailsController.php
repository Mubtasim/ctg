<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index($name, $details)
    {
        return view('details', ['name' => $name, 'details' => $details]);
    }

    public function show()
    {
        $catgeories = Category::all();
        $locations = Location::all();
        return view('add', ['categories' => $catgeories, 'locations' => $locations]);
    }

    public function post(Request $request)
    {
        //
    }
}
