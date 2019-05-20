<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserItemMedia extends Model
{
    protected $table = 'user_item_media';

    protected $fillable = [
        'enable',
        'user_id',
        'product_id',
        'cupon_id',
        'event_id',
        'classified_id',
        'news_id',
        'post_id',
        'order',
        'iframe',
        'url',
        'alt_img',
        'description'
    ];
}
