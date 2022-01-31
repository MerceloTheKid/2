<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudades extends Model
{
    public $timestamps = false;
    protected $fillable = ['ciu_nombre','pro_id'];
    use HasFactory;
}
