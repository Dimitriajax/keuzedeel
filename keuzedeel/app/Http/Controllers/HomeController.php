<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $columns = Schema::getColumnListing('datasets');


        return view('home', ['colomns' => $columns]);
    }
}