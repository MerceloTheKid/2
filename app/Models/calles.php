<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calles extends Model
{
    public $timestamps = false;
    protected $fillable = ['cal_nombre','ciu_id'];
    use HasFactory;
}
