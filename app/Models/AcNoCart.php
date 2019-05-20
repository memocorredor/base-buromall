<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class AcNoCart extends Model
{
    protected $table = 'ac_no_carts';

    protected $fillable = [
        'status',
        'order_num',
        'no_item',
        'token'
    ];
}
