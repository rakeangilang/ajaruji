<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function section() {
        return $this->belongsTo('App\Models\Section');
    }

    public function images() {
        return $this->hasMany('App\Models\Image');
    }
}
