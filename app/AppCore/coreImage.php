<?php

/*
  |--------------------------------------------------------------------------
  | CLASS CORE DATES
  |--------------------------------------------------------------------------
  | Esta Clase se encarga del manejo de fechas.
  |--------------------------------------------------------------------------
 */

namespace Buromall\AppCore;

use Buromall\Models\UserItemMedia;
use File;
class coreImage {

    // Imagen en News list
    public static function imageNews($id) {

        $data_item = UserItemMedia::where('news_id', $id)->first();
        $path = $data_item->url;
        $path_default ='imagens/news/default-news.png';

        if ($path != null) {
            if (File::exists($path)) {
                return $path;
            } else {
                return $path_default;
            }
        } else {
            return $path_default;
        }
    }


}
