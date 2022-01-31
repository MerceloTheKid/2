<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincias extends Model
{
    public $timestamps = false;
    protected $fillable = ['pro_nombre','reg_id'];
    use HasFactory;
}
