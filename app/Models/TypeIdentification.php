<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class TypeIdentification extends Model
{
    protected $table = 'type_identifications';

    protected $fillable = [
        'enable',
        'icon',
        'iso',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
