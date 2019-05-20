<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAuction extends Model
{
    protected $table = 'type_auctions';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
