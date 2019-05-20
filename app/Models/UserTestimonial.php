<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class UserTestimonial extends Model
{
    protected $table = 'user_testimonials';

    protected $fillable = [
        'enable',
        'text',
        'user_id'
    ];
}
