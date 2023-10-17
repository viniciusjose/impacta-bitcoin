<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
