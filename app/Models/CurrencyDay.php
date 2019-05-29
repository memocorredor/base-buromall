<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyDay extends Model
{
    protected $table = 'currency_days';

    protected $fillable = [
        'usd_eur',
        'usd_usd',
        'usd_cop',
        'usd_brl',
        'timestamp'
    ];
}
