<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regiones extends Model
{
    public $timestamps = false;
    protected $fillable = ['reg_nombre'];
    use HasFactory;
}
