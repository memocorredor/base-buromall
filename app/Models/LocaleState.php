<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class LocaleState extends Model
{
    protected $table = 'locale_states';

    protected $fillable = [
        'name',
        'country_id'
    ];
}
