<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class StatusShipping extends Model
{
    protected $table = 'status_shippings';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
