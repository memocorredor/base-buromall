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
    // Precio item con TRM
    public static function getItemPrice($Value)
    {
        //carga la informacion de usaurio y segun el pais la moneda a usar
        $order_user_sis = CoreUser::getUser();
        $currency_user = $order_user_sis['currency_user_sale'];
        //carga de la base de datos el ultimo TRM
        $data_currency = CurrencyDay::latest()->first();
        $data_currency_usd = $data_currency->usd_usd;
        $data_currency_cop = $data_currency->usd_cop;
        // envio de la variable
        if ($currency_user === 'COP') {
            $range_dg = 0;
            $data_cart_total = $Value * $data_currency_cop;
        } else {
            $range_dg = 2;
            $data_cart_total = $Value * $data_currency_usd;
        }

        $return_data = $currency_user . ' $' . number_format($data_cart_total, $range_dg, ",", ".");

        return $return_data;
    }

    // Precio item con TRM liquidado
    public static function getItemPriceTrm($Value)
    {
        //carga la informacion de usaurio y segun el pais la moneda a usar
        $order_user_sis = CoreUser::getUser();
        $currency_user = $order_user_sis['currency_user_sale'];
        //carga de la base de datos el ultimo TRM
        $data_currency = CurrencyDay::latest()->first();
        $data_currency_usd = $data_currency->usd_usd;
        $data_currency_cop = $data_currency->usd_cop;
        //operacion para ganancias sobre el cambio
        $currency_usd = $data_currency_usd - env('APP_MIN_USD', '0.05');
        $currency_cop = $data_currency_cop - env('APP_MIN_COP', '200');
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $range_dg = 0;
            $data_cart_total = $Value * $currency_cop;
        } else {
            $range_dg = 2;
            $data_cart_total = $Value * $currency_usd;
        }

        $return_data = $currency_user . ' $' . number_format($data_cart_total, $range_dg, ",", ".");

        return $return_data;
    }

    // SUB-TOTAL item con TRM
    public static function getSubTotalCart($format = null)
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
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $range_dg = 0;
            $data_cart_stotal = $cart_stotal * $data_currency_cop;
        } else {
            $range_dg = 2;
            $data_cart_stotal = $cart_stotal * $data_currency_usd;
        }

        if ($format === 'f') {
            $return_data = $currency_user . ' $' . number_format($data_cart_stotal, $range_dg, ",", ".");
        } else {
            $return_data = $data_cart_stotal;
        }

        return $return_data;
    }

    // SUB-TOTAL item con TRM liquidado
    public static function getSubTotalCartTrm($format = null)
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
            $range_dg = 0;
            $data_cart_stotal = $cart_stotal * $currency_cop;
        } else {
            $range_dg = 2;
            $data_cart_stotal = $cart_stotal * $currency_usd;
        }

        if ($format === 'f') {
            $return_data = $currency_user . ' $' . number_format($data_cart_stotal, $range_dg, ",", ".");
        } else {
            $return_data = $data_cart_stotal;
        }

        return $return_data;
    }

    // Total cobro procesador
    public static function getTotalProcesor()
    {
        //carga la informacion de usaurio y segun el pais la moneda a usar
        $order_user_sis = CoreUser::getUser();
        $currency_user = $order_user_sis['currency_user_sale'];
        $percentage = env('APP_PORCENT_PROC', '2.68');
        //carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        //carga de la base de datos el ultimo TRM
        $data_currency = CurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop;

        // envio de la variable y la operacion
        $op_ini_total = $cart_total * $data_currency_cop;
        $data_cart_total = (($percentage / 100) * $op_ini_total) - env('APP_CENT_PROC', '900');

        return number_format($data_cart_total, 2, ",", ".");
    }

    // Total cobro procesador
    public static function getTotalWeb()
    {
        //carga la informacion de usaurio y segun el pais la moneda a usar
        $order_user_sis = CoreUser::getUser();
        $currency_user = $order_user_sis['currency_user_sale'];
        $percentage = env('APP_PORCENT_PAY', '3.10');
        //carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        //carga de la base de datos el ultimo TRM
        $data_currency = CurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop;

        // envio de la variable y la operacion
        $op_ini_total = $cart_total * $data_currency_cop;
        $data_cart_total = (($percentage / 100) * $op_ini_total) - env('APP_CENT_PAY', '1000');

        return number_format($data_cart_total, 2, ",", ".");
    }

    // SUB-TOTAL item con TRM
    public static function getTotalCart($format = null)
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
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $range_dg = 0;
            $data_cart_total = $cart_total * $data_currency_cop;
        } else {
            $range_dg = 2;
            $data_cart_total = $cart_total * $data_currency_usd;
        }

        if ($format === 'f') {
            $return_data = $currency_user . ' $' . number_format($data_cart_total, $range_dg, ",", ".");
        } else {
            $return_data = $data_cart_total;
        }

        return $return_data;
    }

    // SUB-TOTAL item con TRM
    public static function getTotalCartTrm($format = null)
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
            $range_dg = 0;
            $data_cart_total = $cart_total * $currency_cop;
        } else {
            $range_dg = 2;
            $data_cart_total = $cart_total * $currency_usd;
        }

        if ($format === 'f') {
            $return_data = $currency_user . ' $' . number_format($data_cart_total, $range_dg, ",", ".");
        } else {
            $return_data = $data_cart_total;
        }

        return $return_data;
    }
}
