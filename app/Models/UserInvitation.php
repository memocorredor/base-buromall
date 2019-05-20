<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserInvitation extends Model
{
    protected $table = 'user_invitations';

    protected $fillable = [
        'status',
        'date_acept',
        'user_invite_id',
        'name',
        'lastname',
        'email',
        'token'
    ];
}
