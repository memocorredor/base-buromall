<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $table = 'user_wallets';

    protected $fillable = [
        'user_id',
        'date_created',
        'description',
        'ac_order_id',
        'card_id',
        'recarge',
        'transfer',
        'buy',
        'sold',
        'debit',
        'saldo_debit',
        'saldo_credit',
        'total',
        'token'
    ];
}
