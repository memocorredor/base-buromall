<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class PayTax extends Model
{
    protected $table = 'pay_taxes';

    protected $fillable = [
        'enable',
        'default_f',
        'country_id',
        'departaments_id',
        'categories_id',
        'categories_sub_id',
        'name',
        'text_es',
        'text_en',
        'text_pt',
        'tax'
    ];

    public function nameCountry()
    {
        return $this->belongsTo(LocaleCountry::class, 'country_id');
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
