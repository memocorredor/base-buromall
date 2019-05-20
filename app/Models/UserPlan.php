<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    protected $table = 'user_plans';

    protected $fillable = [
        'enable',
        'highlight',
        'name_es',
        'description_es',
        'name_en',
        'description_en',
        'name_pt',
        'description_pt',
        'enable_profile',
        'price',
        'nu_stores',
        'nu_branch',
        'nu_employes',
        'nu_products',
        'nu_smedia',
        'nu_geolocation',
        'nu_banners',
        'nu_auction',
        'nu_days_recu'
    ];
}
