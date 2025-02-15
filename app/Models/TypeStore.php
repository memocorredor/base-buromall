<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class TypeStore extends Model
{
    protected $table = 'type_stores';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
