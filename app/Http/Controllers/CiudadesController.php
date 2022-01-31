<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ciudades;

class CiudadesController extends Controller
{
    public function index()
    {
        return ciudades::all();
    }
 
    public function show($id)
    {
        return ciudades::find($id);
    }

    public function mostrarCiudadPorProvincia($id){

        return ciudades::where('pro_id','=',$id)->get();

    }
}
