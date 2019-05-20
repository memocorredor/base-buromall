<?php

/*
  |--------------------------------------------------------------------------
  | CLASS CORE DATES
  |--------------------------------------------------------------------------
  | Esta Clase se encarga del manejo de fechas.
  |--------------------------------------------------------------------------
 */

namespace Buromall\AppCore;

class coreNumbers {

    // Numeros con finalizaciones en las cifras
    public static function niceNumber($n) {
        // first strip any formatting;
        $n = (0 + str_replace(",", "", $n));

        // is this a number?
        if (!is_numeric($n))
            return false;

        // now filter it;
        if ($n > 1000000000000)
            return round(($n / 1000000000000), 1) . ' T';
        else if ($n > 1000000000)
            return round(($n / 1000000000), 1) . ' B';
        else if ($n > 1000000)
            return round(($n / 1000000), 1) . ' M';
        else if ($n > 1000)
            return round(($n / 1000), 1) . ' K';

        return number_format($n);
    }

}
