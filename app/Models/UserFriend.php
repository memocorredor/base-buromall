<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserFriend extends Model
{
    protected $table = 'user_friends';

    protected $fillable = [
        'status',
        'friend_one',
        'friend_two'
    ];
}
