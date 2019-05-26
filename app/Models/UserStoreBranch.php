<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserStoreBranch extends Model
{
    protected $table = 'user_store_branches';

    protected $fillable = [
        'enable',
        'user_id',
        'store_id',
        'name',
        'description_es',
        'keywords_es',
        'description_pt',
        'keywords_pt',
        'description_en',
        'keywords_en',
        'email',
        'zipcode',
        'country_id',
        'state_id',
        'city_id',
        'address',
        'areacode',
        'phone',
        'mobile',
        'latitude',
        'longitude',
        'lun_a',
        'lun_c',
        'mar_a',
        'mar_c',
        'mier_a',
        'mier_c',
        'jue_a',
        'jue_c',
        'vier_a',
        'vier_c',
        'sab_a',
        'sab_c',
        'dom_a',
        'dom_c'
    ];

    public function nameStore()
    {
        return $this->belongsTo(UserStore::class, 'store_id');
    }
}
