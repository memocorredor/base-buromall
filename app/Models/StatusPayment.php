<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPayment extends Model
{
    protected $table = 'status_payments';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
