<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class TypeShipping extends Model
{
    protected $table = 'type_shippings';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
