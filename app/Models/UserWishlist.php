<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserWishlist extends Model
{
    protected $table = 'user_wishlists';

    protected $fillable = [
        'status',
        'date_created',
        'user_id',
        'type',
        'product_id',
        'cupon_id',
        'event_id',
        'classified_id',
        'news_id'
    ];
}
