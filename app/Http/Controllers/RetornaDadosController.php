<?php

namespace App\Http\Controllers;

use App\DataSite;
use Illuminate\Http\Request;

class RetornaDadosController extends Controller
{
    public function index()
    {
        $dataSite = DataSite::all();
        return view('welcome', compact('dataSite'));
    }


}
