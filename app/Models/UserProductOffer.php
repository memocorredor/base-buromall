<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserProductOffer extends Model
{
    protected $table = 'user_product_bids';

    protected $fillable = [
        'status',
        'date_created',
        'user_id',
        'product_id',
        'type',
        'price_offer'
    ];
}
