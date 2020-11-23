<?php

namespace App\Http\Controllers;

use App\DataSite;
use Illuminate\Http\Request;

class SolicitarManutencaoController extends Controller
{

    public function update(Request $request)
    {
        $dataSite = DataSite::findOrFail($request->input('id'));

        $dataSite->update(['ocupation' => $request->input('status')]);

        return redirect()->route('index');
    }
}
