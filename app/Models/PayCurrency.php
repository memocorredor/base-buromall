<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class PayCurrency extends Model
{
    protected $table = 'pay_currencies';

    protected $fillable = [
        'enable',
        'default_f',
        'country_id',
        'simbole',
        'iso',
        'name'
    ];

    public function nameCountry()
    {
        return $this->belongsTo(LocaleCountry::class, 'country_id');
    }
}
