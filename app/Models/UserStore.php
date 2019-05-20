<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;
use Buromall\AppCore\coreNumbers;

class UserStore extends Model
{
    protected $table = 'user_stores';

    protected $fillable = [
        'enable',
        'time_zone',
        'url_name',
        'user_id',
        'type_store_id',
        'image',
        'profile_background',
        'profile_background_position',
        'name',
        'description_es',
        'keywords_es',
        'description_en',
        'keywords_en',
        'description_pt',
        'keywords_pt',
        'email',
        'country_id',
        'state_id',
        'city_id',
        'zipcode',
        'address',
        'areacode',
        'phone',
        'mobile',
        'porcent_pay',
        'cent_pay',
        'no_company',
        'merchant',
        'name_bank',
        'name_acount',
        'no_acount',
        'iban',
        'swift',
        'facebook',
        'facebook_enable',
        'twitter',
        'twitter_enable',
        'instagram',
        'instagram_enable',
        'pinterest',
        'pinterest_enable',
        'youtube',
        'youtube_enable',
        'linkedin',
        'linkedin_enable',
        'skype',
        'skype_enable'
    ];

    public function countLikes()
    {
        return $this->hasMany(UserItemComment::class, 'store_id', 'like');
    }

    public function countLikesNumber()
    {
        $data_count = $this->countLikes()->count();
        return coreNumbers::niceNumber($data_count);
    }

    public function countViews()
    {
        return $this->hasMany(UserItemView::class, 'store_id');
    }

    public function countViewsNumber()
    {
        $data_count = $this->countViews()->count();
        return coreNumbers::niceNumber($data_count);
    }

    public function countBranch()
    {
        return $this->hasMany(UserStoreBranch::class, 'store_id');
    }

    public function countBranchNumber()
    {
        $data_count = $this->countBranch()->count();
        return coreNumbers::niceNumber($data_count);
    }

    public function countProducts()
    {
        return $this->hasMany(UserStoreProduct::class, 'store_id');
    }

    public function countProductsNumber()
    {
        $data_count = $this->countProducts()->count();
        return coreNumbers::niceNumber($data_count);
    }

    public function nameUsername()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function nameCountry()
    {
        return $this->belongsTo(LocaleCountry::class, 'country_id');
    }
}
