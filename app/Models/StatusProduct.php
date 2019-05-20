<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class StatusProduct extends Model
{
    protected $table = 'status_products';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
