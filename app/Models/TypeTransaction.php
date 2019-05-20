<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class TypeTransaction extends Model
{
    protected $table = 'type_transactions';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
