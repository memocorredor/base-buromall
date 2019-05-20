<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class LocaleCity extends Model
{
    protected $table = 'locale_cities';

    protected $fillable = [
        'name',
        'state_id'
    ];
}
