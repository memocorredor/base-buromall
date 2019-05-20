<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class ScFaq extends Model
{
    protected $table = 'sc_faqs';

    protected $fillable = [
        'enable',
        'icon',
        'categories_faq_id',
        'title_es',
        'text_es',
        'title_en',
        'text_en',
        'title_pt',
        'text_pt'
    ];

    public function nameCategorieFaq()
    {
        return $this->belongsTo(ScCategorieFaq::class, 'categories_faq_id');
    }
}
