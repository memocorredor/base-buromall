<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class PayErrorAvs extends Model
{
    protected $table = 'pay_error_avs';

    protected $fillable = [
        'enable',
        'icon',
        'error',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
