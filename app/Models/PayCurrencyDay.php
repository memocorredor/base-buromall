<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class PayCurrencyDay extends Model
{
    protected $table = 'pay_currency_days';

    protected $fillable = [
        'usd_eur',
        'usd_usd',
        'usd_cop',
        'usd_cop_sis',
        'usd_brl',
        'timestamp'
    ];
}
