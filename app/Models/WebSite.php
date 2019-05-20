<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class WebSite extends Model
{
    protected $table = 'web_sites';

    protected $fillable = [
        'image',
        'title_es',
        'description_es',
        'keywords_es',
        'title_en',
        'description_en',
        'keywords_en',
        'title_pt',
        'description_pt',
        'keywords_pt',
        'email',
        'zipcode',
        'country_id',
        'state_id',
        'city_id',
        'township_id',
        'neighborhood_id',
        'address',
        'areacode',
        'phone',
        'mobile',
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
        'skype_enable',
        'android',
        'android_enable',
        'itunes',
        'itunes_enable',
        'windows',
        'windows_enable',
        'author',
        'copyright',
        'time_zone',
        'google_analitic',
        'name_page',
        'url_web',
        'no_ruc'
    ];
}
