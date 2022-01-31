<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regiones;

class RegionesController extends Controller
{
    public function index()
    {
        return regiones::all();
    }
 
    public function show($id)
    {
        return regiones::find($id);
    }

}
