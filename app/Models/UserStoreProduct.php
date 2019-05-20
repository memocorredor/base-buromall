<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;
use Buromall\AppCore\coreNumbers;

class UserStoreProduct extends Model
{
    protected $table = 'user_store_products';

    protected $fillable = [
        'enable',
        'user_id',
        'country_id',
        'store_id',
        'branch_id',
        'status_product_id',
        'departaments_id',
        'categories_id',
        'categories_sub_id',
        'brand_id',
        'no_ref',
        'no_ean',
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
        'type_auction_id',
        'type_transaction_id',
        'tax_id',
        'p_size',
        'p_color',
        'price_incrise',
        'price',
        'descount',
        'quantity',
        'price_ini',
        'price_reserve',
        'increase_bid',
        'min_biders',
        'private_auction',
        'buyitnow',
        'enable_deals',
        'automatic_re_enter',
        'type_shipping_id',
        'prod_weight',
        'prod_long',
        'prod_width',
        'prod_high',
        'insurance',
        'shipping_price',
        'shipping_description_es',
        'shipping_description_en',
        'shipping_description_pt',
        'url_web_show',
        'accept_returns',
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
}
