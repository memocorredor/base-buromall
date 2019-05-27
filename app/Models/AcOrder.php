<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class AcOrder extends Model
{
    protected $table = 'ac_orders';

    protected $fillable = [
        'user_id',
        'status_order_id',
        'type_payment_id',
        'no_order_id',
        'no_bill_id',
        'no_request_id',
        'status_payment_id',
        'status_refund_id',
        'status_shipping_id',
        'name',
        'lastname',
        'identification_id',
        'identification',
        'exped_identification',
        'email',
        'areacode',
        'phone',
        'mobile',
        'country_id',
        'state_id',
        'city_id',
        'address',
        'zipcode',
        'latitude',
        'longitude',
        'name_credit',
        'number_credit',
        'cvv_credit',
        'exp_credit',
        'nu_autorization',
        'error_vpos_id',
        'error_avs_vpos_id',
        'error_cvv_vpos_id',
        'currency',
        'trm',
        'wallet_saldo_debit',
        'wallet_saldo_credit',
        'wallet_total',
        'cart_stotal',
        'cart_tax',
        'cart_shipping',
        'cart_total',
        'info_user',
        'tx_payment',
        'token'
    ];
}
