<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class PayErrorCvv extends Model
{
    protected $table = 'pay_error_cvvs';

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
