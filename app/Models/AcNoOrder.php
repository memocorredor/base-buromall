<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class AcNoOrder extends Model
{
    protected $table = 'ac_no_orders';

    protected $fillable = [
        'status',
        'order_num',
        'no_item',
        'token'
    ];
}
