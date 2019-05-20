<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class AcRechargeCard extends Model
{
    protected $table = 'ac_recharge_cards';

    protected $fillable = [
        'enable',
        'user_create_id',
        'number',
        'date_recarge',
        'store_id',
        'branch_id',
        'user_id',
        'email_send',
        'value_card',
        'ac_order_id',
        'token'
    ];
}
