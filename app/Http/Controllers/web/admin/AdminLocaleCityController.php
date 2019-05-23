<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\LocaleCity;
use Illuminate\Http\Request;

class AdminLocaleCityController extends Controller
{
    // Carga del los combos
    public function getCity(Request $request, $id)
    {
        if($request->ajax())
        {
            $data_cambo = LocaleCity::where('state_id', $id)->get();
            return response()->json($data_cambo);
        }
    }
}
