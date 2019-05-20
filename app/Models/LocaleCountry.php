<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class LocaleCountry extends Model
{
    protected $table = 'locale_countries';

    protected $fillable = [
        'code',
        'name',
        'phonecode'
    ];
}
