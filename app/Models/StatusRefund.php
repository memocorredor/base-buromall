<?php

namespace Buromall\Models;

use Illuminate\Database\Eloquent\Model;

class StatusRefund extends Model
{
    protected $table = 'status_refunds';

    protected $fillable = [
        'enable',
        'icon',
        'name_es',
        'name_en',
        'name_pt',
        'color'
    ];
}
