<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserGender extends Model
{
    protected $table = 'user_genders';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
