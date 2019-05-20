<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    protected $table = 'status_orders';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
