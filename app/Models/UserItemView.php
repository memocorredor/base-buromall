<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserItemView extends Model
{
    protected $table = 'user_item_views';

    protected $fillable = [
        'user_view_id',
        'user_id',
        'store_id',
        'branch_id',
        'product_id',
        'cupon_id',
        'event_id',
        'classified_id',
        'news_id',
        'movie_id',
        'carrier_id'
    ];
}
