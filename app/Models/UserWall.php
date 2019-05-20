<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserWall extends Model
{
    protected $table = 'user_walls';

    protected $fillable = [
        'text_post',
        'user_id',
        'type_post',
        'token'
    ];
}
