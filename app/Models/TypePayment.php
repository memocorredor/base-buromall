<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class TypePayment extends Model
{
    protected $table = 'type_payments';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
