<?php

/*
  |--------------------------------------------------------------------------
  | Clase CoreMeta
  |--------------------------------------------------------------------------
  | Esta Clase se encarga de la carga de los metatags de la web.
  |--------------------------------------------------------------------------
 */

namespace Buromall\AppCore;

use Buromall\Models\User;
use Buromall\Models\UserStore;
use Buromall\Models\UserStoreProduct;
use Buromall\AppCore\coreNumbers;

class CoreMeta
{
    public static function MetaTags($var_meta_data, $var_meta_lang, $var_meta_title, $var_meta_description, $var_meta_keywords, $var_meta_robot)
    {
        //Carga el modelo de la base de datos
        $data_meta = $var_meta_data;

        //Carga el idioma del usuario
        $lang_metatags = $var_meta_lang;

        //Variables apra uso del tipo de lenjuaje
        $local_web_title = 'title_' . $lang_metatags;
        $local_web_description = 'description_' . $lang_metatags;
        $local_web_keywords = 'keywords_' . $lang_metatags;
        $local_alt_logo = 'alt_logo_' . $lang_metatags;
        $local_description_logo = 'description_logo_' . $lang_metatags;

        //Carga el titulo
        if ($var_meta_title == '') {
            $for_title = $data_meta->$local_web_title;
        } else {
            $for_title = $var_meta_title;
        }
        //Carga la descripcion
        if ($var_meta_description == '') {
            $for_description = $data_meta->$local_web_description;
        } else {
            $for_description = $var_meta_description;
        }
        //Carga los Keywords
        if ($var_meta_keywords == '') {
            $for_keywords = $data_meta->$local_web_keywords;
        } else {
            $for_keywords = $var_meta_keywords;
        }
        //cuenta el numero de usuarios para menu categorias
        $data_c_users = User::all()->count();
        $count_users = coreNumbers::niceNumber($data_c_users);
        //cuenta el numero de tiendas para menu categorias
        $data_c_stores = UserStore::all()->count();
        $count_stores = coreNumbers::niceNumber($data_c_stores);
        //cuenta el numero de productos para menu categorias
        $data_c_products = UserStoreProduct::all()->count();
        $count_products = coreNumbers::niceNumber($data_c_products);

        //Crea el arreglo
        $meta = array(
            'title' => $for_title . ' | ' . $data_meta->name_page,
            'description' => $for_description,
            'keywords' => $for_keywords,
            'image' => $data_meta->image,
            'alt_logo' => $local_alt_logo,
            'description_logo' => $local_description_logo,
            'id_country' => $data_meta->id_country,
            'id_region' => $data_meta->id_region,
            'id_city' => $data_meta->id_city,
            'id_townships' => $data_meta->id_townships,
            'id_neighborhood' => $data_meta->id_neighborhood,
            'address' => $data_meta->address,
            'areacode' => $data_meta->areacode,
            'phone' => $data_meta->phone,
            'mobile' => $data_meta->mobile,
            'email' => $data_meta->email,
            'facebook' => $data_meta->facebook,
            'facebook_enable' => $data_meta->facebook_enable,
            'twitter' => $data_meta->twitter,
            'twitter_enable' => $data_meta->twitter_enable,
            'instagram' => $data_meta->instagram,
            'instagram_enable' => $data_meta->instagram_enable,
            'pinterest' => $data_meta->pinterest,
            'pinterest_enable' => $data_meta->pinterest_enable,
            'youtube' => $data_meta->youtube,
            'youtube_enable' => $data_meta->youtube_enable,
            'linkedin' => $data_meta->linkedin,
            'linkedin_enable' => $data_meta->linkedin_enable,
            'skype' => $data_meta->skype,
            'skype_enable' => $data_meta->skype_enable,
            'android' => $data_meta->android,
            'android_enable' => $data_meta->android_enable,
            'itunes' => $data_meta->itunes,
            'itunes_enable' => $data_meta->itunes_enable,
            'windows' => $data_meta->windows,
            'windows_enable' => $data_meta->windows_enable,
            'author' => $data_meta->author,
            'analytics' => $data_meta->google_analitic,
            'copyright' => $data_meta->copyright,
            'name_page' => $data_meta->name_page,
            'url_web' => $data_meta->url_web,
            'no_ruc' => $data_meta->no_ruc,
            'robots' => $var_meta_robot,
            'lang' => $lang_metatags,
            'count_users' => $count_users,
            'count_stores' => $count_stores,
            'count_products' => $count_products
        );

        return $meta;
    }
}
