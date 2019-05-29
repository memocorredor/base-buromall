<?php

/*
  |--------------------------------------------------------------------------
  | CLASS CORE PRICE
  |--------------------------------------------------------------------------
  | Esta Clase se encarga del manejo de precios en la plataforma
  |--------------------------------------------------------------------------
 */

namespace Buromall\AppCore;

use Buromall\Models\CurrencyDay;
use Buromall\AppCore\CoreUser;
use Darryldecode\Cart\Cart;

class corePrice
{

    // Numeros con finalizaciones en las cifras
    public static function getTotalCart()
    {
        //carga la informacion de usaurio y segun el pais la moneda a usar
        $order_user_sis = CoreUser::getUser();
        $currency_user = $order_user_sis['currency_user_sale'];
        //carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        //carga de la base de datos el ultimo TRM
        $data_currency = CurrencyDay::latest()->first();
        $data_currency_usd = $data_currency->usd_usd;
        $data_currency_cop = $data_currency->usd_cop;
        //operacion para ganancias sobre el cambio
        $currency_usd = $data_currency_usd - env('APP_MIN_USD', '0.05');
        $currency_cop = $data_currency_cop - env('APP_MIN_COP', '200');
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $data_cart_total = $cart_total * $currency_cop;
        } else {
            $data_cart_total = $cart_total * $currency_usd;
        }

        return $data_cart_total;
    }


    // Numeros con finalizaciones en las cifras
    public static function getSubTotalCart()
    {
        //carga la informacion de usaurio y segun el pais la moneda a usar
        $order_user_sis = CoreUser::getUser();
        $currency_user = $order_user_sis['currency_user_sale'];
        //carga de la variable del total del carrito
        $cart_stotal = \Cart::getSubTotal();
        //carga de la base de datos el ultimo TRM
        $data_currency = CurrencyDay::latest()->first();
        $data_currency_usd = $data_currency->usd_usd;
        $data_currency_cop = $data_currency->usd_cop;
        //operacion para ganancias sobre el cambio
        $currency_usd = $data_currency_usd - env('APP_MIN_USD', '0.05');
        $currency_cop = $data_currency_cop - env('APP_MIN_COP', '200');
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $data_cart_stotal = $cart_stotal * $currency_cop;
        } else {
            $data_cart_stotal = $cart_stotal * $currency_usd;
        }

        return $data_cart_stotal;
    }
}
