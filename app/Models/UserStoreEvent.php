<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;
use Buromall\AppCore\coreNumbers;

class UserStoreEvent extends Model
{
    protected $table = 'user_store_events';

    protected $fillable = [
        'enable',
        'user_id',
        'store_id',
        'status_product_id',
        'type_transaction_id',
        'type_event_id',
        'url_title_es',
        'title_es',
        'text_es',
        'description_es',
        'keywords_es',
        'url_title_en',
        'title_en',
        'text_en',
        'description_en',
        'keywords_en',
        'url_title_pt',
        'title_pt',
        'text_pt',
        'description_pt',
        'keywords_pt',
        'price',
        'quantity',
        'latitude',
        'longitude',
        'token'
    ];

    public function countLikes()
    {
        return $this->hasMany(UserItemComment::class, 'news_id', 'like');
    }

    public function countLikesNumber()
    {
        $data_count = $this->countLikes()->count();
        return coreNumbers::niceNumber($data_count);
    }

    public function countComments()
    {
        return $this->hasMany(UserItemComment::class, 'news_id', 'like');
    }

    public function countCommentsNumber()
    {
        $data_count = $this->countComments()->count();
        return coreNumbers::niceNumber($data_count);
    }

    public function countViews()
    {
        return $this->hasMany(UserItemView::class, 'news_id');
    }

    public function countViewsNumber()
    {
        $data_count = $this->countViews()->count();
        return coreNumbers::niceNumber($data_count);
    }

    public function nameUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function nameStore()
    {
        return $this->belongsTo(UserStore::class, 'store_id');
    }

    public function nameTypeEvent()
    {
        return $this->belongsTo(TypeEvent::class, 'type_event_id');
    }
}
