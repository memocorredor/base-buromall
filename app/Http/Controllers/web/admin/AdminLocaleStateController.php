<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\LocaleState;
use Illuminate\Http\Request;

class AdminLocaleStateController extends Controller
{

    // Carga del los combos
    public function getStates(Request $request, $id)
    {
        if($request->ajax())
        {
            $data_cambo = LocaleState::where('country_id', $id)->get();
            return response()->json($data_cambo);
        }
    }
}
