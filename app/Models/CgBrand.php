<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class CgBrand extends Model
{
    protected $table = 'cg_brands';

    protected $fillable = [
        'enable',
        'image',
        'name'
    ];
}
