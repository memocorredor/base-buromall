<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class CgSubCategorie extends Model
{
    protected $table = 'cg_sub_categories';

    protected $fillable = [
        'enable',
        'icon',
        'departaments_id',
        'categories_id',
        'url_name_es',
        'name_es',
        'title_es',
        'description_es',
        'keywords_es',
        'url_name_en',
        'name_en',
        'title_en',
        'description_en',
        'keywords_en',
        'url_name_pt',
        'name_pt',
        'title_pt',
        'description_pt',
        'keywords_pt',
        'url_img',
        'color'
    ];
}
