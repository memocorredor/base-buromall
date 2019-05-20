<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class AcNoRequest extends Model
{
    protected $table = 'ac_no_requests';

    protected $fillable = [
        'status',
        'order_num',
        'no_item',
        'token'
    ];
}
