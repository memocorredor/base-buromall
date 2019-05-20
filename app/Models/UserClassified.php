<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;
use Buromall\AppCore\coreNumbers;

class UserClassified extends Model
{
    protected $table = 'user_classifieds';

    protected $fillable = [
        'enable',
        'user_id',
        'departaments_id',
        'categories_id',
        'categories_sub_id',
        'country_id',
        'status_product_id',
        'type_transaction_id',
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

    public function nameDepartament()
    {
        return $this->belongsTo(CgDepartament::class, 'departaments_id');
    }

    public function nameCategorie()
    {
        return $this->belongsTo(CgCategorie::class, 'categories_id');
    }

    public function nameSubCategorie()
    {
        return $this->belongsTo(CgSubCategorie::class, 'categories_sub_id');
    }

    public function nameCountry()
    {
        return $this->belongsTo(LocaleCountry::class, 'country_id');
    }
}
