<?php

namespace App\Http\Controllers;

use App\DataSite;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{

    public function index()
    {
        $dataSite = DataSite::all();
        return view('restaurante', compact('dataSite'));
    }

    public function update(Request $request)
    {
        //
    }
}
