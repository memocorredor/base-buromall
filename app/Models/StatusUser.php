<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class StatusUser extends Model
{
    protected $table = 'status_users';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
