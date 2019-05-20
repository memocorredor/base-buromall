<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class AcNoBill extends Model
{
    protected $table = 'ac_no_bills';

    protected $fillable = [
        'status',
        'order_num',
        'no_item',
        'token'
    ];
}
