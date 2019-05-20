<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    protected $table = 'user_contacts';

    protected $fillable = [
        'enable',
        'user_id',
        'store_id',
        'date_read',
        'statuses',
        'name',
        'lastname',
        'email',
        'areacode',
        'phone',
        'subject',
        'message',
        'token'
    ];
}
