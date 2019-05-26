<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\CurrencyDay;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;
use Darryldecode\Cart\CartCondition;

class CurrencyController extends Controller
{
    public function store(Request $request)
    {
        // Crea la instancia
        $data_field = new CurrencyDay();
        $data_field->usd_eur = $request->input('usd_eur');
        $data_field->usd_usd = $request->input('usd_usd');
        $data_field->usd_cop = $request->input('usd_cop');
        $data_field->usd_brl = $request->input('usd_brl');
        //Accion de guardar la info
        $data_field->save();
    }


}
