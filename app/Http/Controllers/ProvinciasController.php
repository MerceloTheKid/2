<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provincias;

class ProvinciasController extends Controller
{
    public function index()
    {
        return provincias::all();
    }
 
    public function show($id)
    {
        return provincias::find($id);
    }

    public function mostrarProvinciaPorRegion($id){

        return provincias::where('reg_id','=',$id)->get();

    }
}
