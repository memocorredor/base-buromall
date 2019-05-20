<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class TypeEvent extends Model
{
    protected $table = 'type_events';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
