<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserRelationship extends Model
{
    protected $table = 'user_relationships';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
