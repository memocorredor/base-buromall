<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    protected $table = 'user_histories';

    protected $fillable = [
        'type',
        'session_id',
        'user_id',
        'session_name',
        'session_name_ptocesor',
        'user_ip',
        'action_id',
        'status_id',
        'status'
    ];
}
