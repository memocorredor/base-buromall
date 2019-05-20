<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class ScCategorieFaq extends Model
{
    protected $table = 'sc_categorie_faqs';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
