<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class PayError extends Model
{
    protected $table = 'pay_errors';

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
