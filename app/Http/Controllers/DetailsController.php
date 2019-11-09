<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index($name, $details)
    {
        return view('details', ['name' => $name, 'details' => $details]);
    }
}
