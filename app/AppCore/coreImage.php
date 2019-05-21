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
        $path = storage_path('public/' . $data_item);
        $path_default = storage_path('public/imagens/news/default-news.png');

        if ($data_item != null) {
            if (File::exists($path)) {
                return $data_item->url;
            } else {
                return $path_default;
            }
        } else {
            return $path_default;
        }
    }


}
