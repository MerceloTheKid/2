<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calles;
use App\Models\ciudades;
use App\Models\provincias;
use App\Models\regiones;

class CallesController extends Controller
{
    public function index()
    {
        return calles::all();
    }
 
    public function show($id)
    {
        return calles::find($id);
    }

    public function store(Request $request)
    {
        return calles::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $calles = calles::findOrFail($id);
        $calles->update($request->all());

        return $calles;
    }

    public function delete(Request $request, $id)
    {
        $calles = calles::findOrFail($id);
        $calles->delete();

        return 204;
    }

    public function mostrarCalleAsiEnGeneral($id){

        $calle = calles::findOrFail($id);
        $ciudad = ciudades::where('id','=',$calle['ciu_id'])->first();
        $provincia = provincias::where('id','=',$ciudad['pro_id'])->first();
        $region = regiones::where('id','=',$provincia['reg_id'])->first();

        return array_merge($calle->toArray(), $ciudad->toArray(), $provincia->toArray(), $region->toArray());
    }

    public function mostrarUnaPuraCalle(){

        $calles = calles::all();
        $return = [];

        foreach($calles as $calle){
            $ciudad = ciudades::where('id','=',$calle['ciu_id'])->first()->toArray();
            $provincia = provincias::where('id','=',$ciudad['pro_id'])->first()->toArray();
            $region = regiones::where('id','=',$provincia['reg_id'])->first()->toArray();  
            array_push($return, array_merge($ciudad, $provincia, $region,$calle->toArray()));
        }
        
        return $return;
    }
}
