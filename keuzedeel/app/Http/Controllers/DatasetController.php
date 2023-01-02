<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;


class DatasetController extends Controller
{
    //

    public function index()
    {
        $dataList = Dataset::select()
            ->get();

        return $dataList;
    }

    public function show(Request $request)
    {
        $filter = $request->route('filter');

        $dataList = Dataset::select($filter)
            ->get();

        return response()->json([$filter => $dataList]);
    }
}