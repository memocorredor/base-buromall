<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserAdsGeolocation extends Model
{
    protected $table = 'user_ads_geolocations';

    protected $fillable = [
        'enable',
        'user_id',
        'departaments_id',
        'categories_id',
        'categories_sub_id',
        'date_campain_end',
        'name',
        'text_es',
        'text_en',
        'text_pt',
        'url_destine',
        'latitude',
        'longitude'
    ];

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
}
