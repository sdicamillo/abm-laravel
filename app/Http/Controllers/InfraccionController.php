<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Infraccion;
use Illuminate\Http\Request;

class InfraccionController extends Controller
{
    
    public function index()
    {
        $infracciones = Infraccion::all();
        $infracciones = Infraccion::with('auto')->get();

        return view('infraccion.index', ['infracciones' => $infracciones]);
    }

    public function create()
    {
        $autos = Auto::all();
        $infraccion = new Infraccion;
        $tipos = $infraccion->getTipos();

        return view('infraccion.create', compact('autos', 'tipos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha' => 'required',
            'tipo' => 'required',
            'patente' => 'required',
            'descripcion' => 'required',
        ]);
        
        $infraccion = new Infraccion();
        $infraccion->fecha = $validatedData['fecha'];
        $infraccion->tipo = $validatedData['tipo'];
        $infraccion->auto_id = $validatedData['patente'];
        $infraccion->descripcion = $validatedData['descripcion'];
        $infraccion->save();

        return redirect()->route('infraccion.index');
    }
}
