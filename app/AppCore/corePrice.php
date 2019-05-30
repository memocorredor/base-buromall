<?php

/*
  |--------------------------------------------------------------------------
  | CLASS CORE PRICE
  |--------------------------------------------------------------------------
  | Esta Clase se encarga del manejo de precios en la plataforma
  |--------------------------------------------------------------------------
 */

namespace Buromall\AppCore;

use Buromall\Models\PayCurrencyDay;
use Buromall\AppCore\CoreUser;
use Darryldecode\Cart\Cart;

class corePrice
{
    // SUB-TOTAL, que tiene el carrito en el momento de la compra
    public static function getSisSubTotalCart()
    {
        // rango de formateo
        $range_dg = 2;
        // carga de la variable del total del carrito
        $cart_stotal = \Cart::getSubTotal();
        // retorno de la informacion
        return number_format($cart_stotal, $range_dg, ",", ".");
    }

    // TOTAL, que tiene el carrito en el momento de la compra
    public static function getSisTotalCart()
    {
        // rango de formateo
        $range_dg = 2;
        // carga de la variable del total del carrito
        $cart_stotal = \Cart::getTotal();
        // retorno de la informacion
        return number_format($cart_stotal, $range_dg, ",", ".");
    }

    // TOTAL cobro procesador que tiene el carrito en el momento de la compra
    public static function getSisCostoProce()
    {
        // rango de formateo
        $range_dg = 2;
        $percentage = env('APP_PORCENT_PROC', '2.68');
        $costo = env('APP_CENT_PROC', '900');
        // carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop;
        // envio de la variable y la operacion
        $op_ini = $costo / $data_currency_cop;
        $data_cart_total = (($percentage / 100) * $cart_total) - $op_ini;
        // retorno de la informacion
        return number_format($data_cart_total, $range_dg, ",", ".");
    }

    // SUB-TOTAL, no importa si son dolares o pesos
    public static function getSubTotalCart($format = null)
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $order_user_sis = CoreUser::getUser();
        $currency_user = $order_user_sis['currency_user_sale'];
        // carga de la variable del total del carrito
        $cart_stotal = \Cart::getSubTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop;
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $res_cart_stotal = $cart_stotal * $data_currency_cop;
        } else {
            $res_cart_stotal = $cart_stotal;
        }
        // formatea el numero
        $data_cart_stotal = number_format($res_cart_stotal, $range_dg, ",", ".");
        if ($format === 'f') {
            $return_data = $currency_user . ' $' . $data_cart_stotal;
        } else {
            $return_data = $data_cart_stotal;
        }
        // retorno de la informacion
        return $return_data;
    }

    // TOTAL que se envia al procesador, no importa si son dolares o pesos
    public static function getTotalCart($format = null)
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $currency_user_sis = CoreUser::getUser();
        $currency_user = $currency_user_sis['currency_user_sale'];
        // carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop;
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $res_cart_total = $cart_total * $data_currency_cop;
        } else {
            $res_cart_total = $cart_total;
        }
        // formatea el numero
        $data_cart_total = number_format($res_cart_total, $range_dg, ",", ".");
        if ($format === 'f') {
            $return_data = $currency_user . ' $' . $data_cart_total;
        } else {
            $return_data = $data_cart_total;
        }
        // retorno de la informacion
        return $return_data;
    }

    // TOTAL costo procesador en pesos
    public static function getTotalCostoProce()
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $currency_user_sis = CoreUser::getUser();
        $currency_user = $currency_user_sis['currency_user_sale'];
        // costos
        $percentage = env('APP_PORCENT_PROC', '2.68');
        $costo = env('APP_CENT_PROC', '900');
        // carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop;
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $op_ini_total = $cart_total * $data_currency_cop;
            $data_cart_total = (($percentage / 100) * $op_ini_total) - $costo;
        } else {
            $op_ini = $costo / $data_currency_cop;
            $data_cart_total = (($percentage / 100) * $cart_total) - $op_ini;
        }
        // formatea el numero
        $return_data = number_format($data_cart_total, $range_dg, ",", ".");
        // retorno de la informacion
        return $return_data;
    }

    // TOTAL costo procesador en pesos
    public static function getTotalResult()
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $currency_user_sis = CoreUser::getUser();
        $currency_user = $currency_user_sis['currency_user_sale'];
        // costos
        $percentage = env('APP_PORCENT_PROC', '2.68');
        $costo = env('APP_CENT_PROC', '900');
        // carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop;
        // envio de la variable y la operacion
        $op_ini_total = $cart_total * $data_currency_cop;
        $op_porcent = (($percentage / 100) * $op_ini_total) - $costo;
        $op_result = $op_ini_total - $op_porcent;
        // formatea el numero
        $return_data = number_format($op_result, $range_dg, ",", ".");
        // retorno de la informacion
        return $return_data;
    }

    // TOTAL costo procesador en pesos
    public static function getTotalResultTrm()
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $currency_user_sis = CoreUser::getUser();
        $currency_user = $currency_user_sis['currency_user_sale'];
        // costos
        $percentage = env('APP_PORCENT_PROC', '2.68');
        $costo = env('APP_CENT_PROC', '900');
        // carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        // cambia este valor por el de TRM de liquidacion
        $data_currency_cop = $data_currency->usd_cop_sis;
        // envio de la variable y la operacion
        $op_ini_total = $cart_total * $data_currency_cop;
        $op_porcent = (($percentage / 100) * $op_ini_total) - $costo;
        $op_result = $op_ini_total - $op_porcent;
        // formatea el numero
        $return_data = number_format($op_result, $range_dg, ",", ".");
        // retorno de la informacion
        return $return_data;
    }

    // SUB-TOTAL, no importa si son dolares o pesos
    public static function getUsrSubTotalCart()
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $order_user_sis = CoreUser::getUser();
        $currency_user = $order_user_sis['currency_user_sale'];
        // carga de la variable del total del carrito
        $cart_stotal = \Cart::getSubTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop_sis;
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $res_cart_stotal = $cart_stotal * $data_currency_cop;
        } else {
            $res_cart_stotal = $cart_stotal;
        }
        // formatea el numero
        $data_cart_stotal = number_format($res_cart_stotal, $range_dg, ",", ".");
        // retorno de la informacion
        return $data_cart_stotal;
    }

    // TOTAL que se envia al procesador, no importa si son dolares o pesos
    public static function getUsrTotalCart()
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $currency_user_sis = CoreUser::getUser();
        $currency_user = $currency_user_sis['currency_user_sale'];
        // carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop_sis;
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $res_cart_total = $cart_total * $data_currency_cop;
        } else {
            $res_cart_total = $cart_total;
        }
        // formatea el numero
        $data_cart_total = number_format($res_cart_total, $range_dg, ",", ".");
        // retorno de la informacion
        return $data_cart_total;
    }

    // TOTAL costo procesador en pesos
    public static function getUsrTotalProc()
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $currency_user_sis = CoreUser::getUser();
        $currency_user = $currency_user_sis['currency_user_sale'];
        // costos
        $percentage_procesor = env('APP_PORCENT_PROC', '2.68');
        $percentage_web = env('APP_PORCENT_PAY', '3.10');
        $trans_procesor = env('APP_CENT_PROC', '900');
        $trans_web = env('APP_CENT_PAY', '1000');
        // para sacar la porcion del porcentaje
        $percentage =  $percentage_web - $percentage_procesor;
        // para sacar la porcion del costo
        $costo = $trans_web - $trans_procesor;
        // carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop_sis;
        // envio de la variable y la operacion
        if ($currency_user === 'COP') {
            $op_ini_total = $cart_total * $data_currency_cop;
            $data_cart_total = (($percentage / 100) * $op_ini_total) - $costo;
        } else {
            $op_ini = $costo / $data_currency_cop;
            $data_cart_total = (($percentage / 100) * $cart_total) - $op_ini;
        }
        // formatea el numero
        $return_data = number_format($data_cart_total, $range_dg, ",", ".");
        // retorno de la informacion
        return $return_data;
    }

    // TOTAL costo procesador en pesos
    public static function getUsrTotalResult()
    {
        // rango de formateo
        $range_dg = 2;
        // carga la informacion de usaurio y segun el pais la moneda a usar
        $currency_user_sis = CoreUser::getUser();
        $currency_user = $currency_user_sis['currency_user_sale'];
        // costos
        $percentage = env('APP_PORCENT_PROC', '2.68');
        $costo = env('APP_CENT_PROC', '900');
        // carga de la variable del total del carrito
        $cart_total = \Cart::getTotal();
        // carga de la base de datos el ultimo TRM
        $data_currency = PayCurrencyDay::latest()->first();
        $data_currency_cop = $data_currency->usd_cop_sis;
        // envio de la variable y la operacion
        $op_ini_total = $cart_total * $data_currency_cop;
        $op_porcent = (($percentage / 100) * $op_ini_total) - $costo;
        $op_result = $op_ini_total - $op_porcent;
        // formatea el numero
        $return_data = number_format($op_result, $range_dg, ",", ".");
        // retorno de la informacion
        return $return_data;
    }













}
