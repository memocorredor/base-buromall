<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserItemComment extends Model
{
    protected $table = 'user_item_comments';

    protected $fillable = [
        'enable',
        'user_id',
        'data_user',
        'store_id',
        'branch_id',
        'product_id',
        'cupon_id',
        'event_id',
        'classified_id',
        'news_id',
        'post_id',
        'movie_id',
        'carrier_id',
        'comment_id',
        'comment_user_id',
        'calification',
        'like',
        'share',
        'website',
        'name',
        'email',
        'comment',
        'link_web'
    ];
}
