<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    protected $table='navbar';
    protected $guarded = ['id'];
    public $timestamps = false;
}
