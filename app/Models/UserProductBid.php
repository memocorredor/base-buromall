<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserProductBid extends Model
{
    protected $table = 'user_product_bids';

    protected $fillable = [
        'date_created',
        'user_id',
        'product_id',
        'price_base',
        'price_now',
        'bids'
    ];
}
