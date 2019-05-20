<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserActionHistory extends Model
{
    protected $table = 'user_action_histories';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'description_es',
        'name_en',
        'description_en',
        'name_pt',
        'description_pt',
        'color'
    ];
}
