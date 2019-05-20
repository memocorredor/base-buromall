<?php

namespace Buromall\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enable',
        'status_user_id',
        'plan_id',
        'user_invite_id',
        'gender_id',
        'relationship_id',
        'con_newsletter',
        'image',
        'profile_background',
        'profile_background_position',
        'name',
        'lastname',
        'birthdate',
        'description_es',
        'description_en',
        'description_pt',
        'country_id',
        'state_id',
        'city_id',
        'zipcode',
        'address',
        'email',
        'email_verified_at',
        'areacode',
        'phone',
        'mobile',
        'facebook',
        'facebook_enable',
        'facebook_id_user',
        'facebook_link',
        'facebook_is_verified',
        'facebook_picture',
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
        'username',
        'password',
        'token',
        'req_token',
        'salt',
        'ip_joined'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function nameCountry()
    {
        return $this->belongsTo(LocaleCountry::class, 'country_id');
    }

    public function namePlan()
    {
        return $this->belongsTo(UserPlan::class, 'plan_id');
    }
}
