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
use Buromall\Models\UserFriend;
use Buromall\Models\UserStore;
use Buromall\Models\UserStoreProduct;
use Buromall\Models\PayCurrencyDay;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Countries\Package\Countries;
use Tracker;

class CoreUser
{
    public static function friendly_Url($str = '')
    {
        $friendlyURL = htmlentities($str, ENT_COMPAT, "UTF-8", false);
        $friendlyURL = preg_replace('/&([a-z]{1,2})(?:acute|circ|lig|grave|ring|tilde|uml|cedil|caron);/i', '\1', $friendlyURL);
        $friendlyURL = html_entity_decode($friendlyURL, ENT_COMPAT, "UTF-8");
        $friendlyURL = preg_replace('/[^a-z0-9-]+/i', '-', $friendlyURL);
        $friendlyURL = preg_replace('/-+/', '-', $friendlyURL);
        $friendlyURL = trim($friendlyURL, '-');
        $friendlyURL = strtolower($friendlyURL);
        return $friendlyURL;
    }

    public static function getUser()
    {

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $name = Auth::user()->name;
            $lastname = Auth::user()->lastname;
            $username = Auth::user()->username;
            //cuenta el numero de amigos para menu usuario
            $data_c_friends = 0; //UserFriend::where('friend_one', '=', $user_id)->orWhere('friend_two', '=', $user_id)->count();
            $count_friends = coreNumbers::niceNumber($data_c_friends);
            //cuenta el numero de tiendas para menu usuario
            $data_c_stores = UserStore::where('user_id', '=', $user_id)->count();
            $count_stores = coreNumbers::niceNumber($data_c_stores);
            //cuenta el numero de productos para menu usuario
            $data_c_products = UserStoreProduct::where('user_id', '=', $user_id)->count();
            $count_products = coreNumbers::niceNumber($data_c_products);

            $userpictutre = '';
        } else {
            $user_id = 0;
            $name = '';
            $lastname = '';
            $username = '';
            $count_friends = 0;
            $count_stores = 0;
            $count_products = 0;
            $userpictutre = '';
        }

        $session_data = Tracker::currentSession();
        if ($session_data) {
            $countries = new Countries();

            $session_name = '';
            $session_cuser = ''; //current user
            $session_end = '';
            $type_user = '';

            if (!empty($session_data->geoIp->continent_code)) {
                $continent_user =  $session_data->geoIp->continent_code;
            } else {
                $continent_user = '-';
            }

            if (!empty($session_data->geoIp->country_code)) {
                $countrie_user =  $session_data->geoIp->country_name;
            } else {
                $countrie_user = 'Colombia';
            }
            if (!empty($session_data->geoIp->country_code)) {
                $countrie_code_user =  $session_data->geoIp->country_code;
            } else {
                $countrie_code_user = '-';
            }

            $result_timezone_user = $countries->where('name.common', $countrie_user)
            ->first()
            ->hydrateTimezones()
            ->timezones->first()->zone_name;
            if (!empty($result_timezone_user)) {
                $timezone_user =  $result_timezone_user;
            } else {
                $timezone_user = '-';
            }

            if (!empty($session_data->geoIp->region)) {
                $state_user =  $session_data->geoIp->region;
            } else {
                $state_user = '-';
            }
            //
            if (!empty($session_data->geoIp->city)) {
                $city_user =  $session_data->geoIp->city;
            } else {
                $city_user = '-';
            }
            //
            if (!empty($session_data->geoIp->latitude)) {
                $latitude_user =  $session_data->geoIp->latitude;
            } else {
                $latitude_user = '-';
            }
            //
            if (!empty($session_data->geoIp->longitude)) {
                $longitude_user =  $session_data->geoIp->longitude;
            } else {
                $longitude_user = '-';
            }
            //
            if (!empty($session_data->geoIp->area_code)) {
                $area_code_user =  $session_data->geoIp->area_code;
            } else {
                $result_area_code_user = $countries->where('name.common', $countrie_user)
                    ->first()
                    ->dialling->calling_code->first();
                if(!empty($result_area_code_user)) {
                    $area_code_user = $result_area_code_user;
                } else {
                    $area_code_user = '-';
                }
            }
            //
            if (!empty($session_data->geoIp->postal_code)) {
                $zip_code_user =  $session_data->geoIp->postal_code;
            } else {
                $zip_code_user = '-';
            }
            //
            $result_currency_user = $countries->where('name.common', $countrie_user)->first()->hydrate('timezones')->currencies->first();
            if (!empty($result_currency_user)) {
                $code_currency_user =  $result_currency_user;
            } else {
                $code_currency_user = '';
            }
            //
            if($code_currency_user === 'COP'){
                $currency_user_sale = 'COP';
            } else {
                $currency_user_sale = 'USD';
            }

            $isp_user = '';

            $browser_locale = $session_data->language->preference;
            $browser_user = $session_data->agent->browser;
            $browser_user_fa = strtolower($browser_user);
            $browser_version_user = $session_data->agent->browser_version;
            $user_sistem = $session_data->device->model;
            $version_sis_user = $session_data->device->platform_version;
            $is64_user = '';

            $data_robot = $session_data->is_robot;
            $data_ismobil = $session_data->device->is_mobile;

            $result_country = $countries->where('name.common', $countrie_user)->first()->hydrate('timezones');
            $fill_country = $result_country->toJson();//zone_name
            $data_country = $fill_country;

        } else { }

        if ($data_robot === 0) {
            $isrobot_user = 'No';
        } else {
            $isrobot_user = 'Si';
        }


        if ($data_ismobil === 0) {
            $ismobil_user = 'No';
        } else {
            $ismobil_user = 'Si';
        }

        //Crea el arreglo
        $userSistem = array(
            'user_id' => $user_id,
            'name' => $name,
            'lastname' => $lastname,
            'username' => $username,
            'count_friends' => $count_friends,
            'count_stores' => $count_stores,
            'count_products' => $count_products,
            'userpictutre' => $userpictutre,
            'session_data' => $session_data,
            'data_country' => $data_country,
            'session_id' => $session_data->uuid,
            'session_name' => $session_name,
            'session_cuser' => $session_cuser,
            'session_created' => $session_data->created_at,
            'session_end' => $session_end,
            'timezone' => config('app.timezone'),
            'type_user' => $type_user,
            'session_ip' => $session_data->client_ip,
            'timezone_user' => $timezone_user,
            'continent_user' => $continent_user,
            'countrie_user' => $countrie_user,
            'countrie_code_user' => $countrie_code_user,
            'state_user' => $state_user,
            'city_user' => $city_user,
            'latitude_user' => $latitude_user,
            'longitude_user' => $longitude_user,
            'area_code_user' => $area_code_user,
            'zip_code_user' => $zip_code_user,
            'code_currency_user' => $code_currency_user,
            'currency_user_sale' => $currency_user_sale,
            'isp_user' => $isp_user,
            'browser_locale' => $browser_locale,
            'browser_user_fa' => $browser_user_fa,
            'browser_user' => $browser_user,
            'browser_version_user' => $browser_version_user,
            'user_sistem' => $user_sistem,
            'version_sis_user' => $version_sis_user,
            'is64_user' => $is64_user,
            'isrobot_user' => $isrobot_user,
            'ismobil_user' => $ismobil_user
        );

        return $userSistem;
    }
}
