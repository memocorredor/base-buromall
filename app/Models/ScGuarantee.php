<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class ScGuarantee extends Model
{
    protected $table = 'sc_guarantees';

    protected $fillable = [
        'enable',
        'web_id',
        'country_id',
        'name_color',
        'title_es',
        'text_es',
        'description_es',
        'keywords_es',
        'title_en',
        'text_en',
        'description_en',
        'keywords_en',
        'title_pt',
        'text_pt',
        'description_pt',
        'keywords_pt',
        'url_img'
    ];

    public function nameWebSite()
    {
        return $this->belongsTo(WebSite::class, 'web_id');
    }

    public function nameCountry()
    {
        return $this->belongsTo(LocaleCountry::class, 'country_id');
    }
}
