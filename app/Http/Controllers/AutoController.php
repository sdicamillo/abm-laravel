<?php

namespace App\Http\Controllers;
use App\Models\Titular;
use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    
    public function index()
    {
        $autos = Auto::all();
        $autos = Auto::with('titular')->get();

        return view('auto.index', compact('autos'));
    }

    public function create()
    {
        $titulares = Titular::all();
        $auto = new Auto;
        $tipos = $auto->getTipos();
        return view('auto.create', compact('titulares', 'tipos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'patente' => 'required|unique:autos,patente',
            'tipo' => 'required',
            'titular_id' => 'required',
        ]);
        
        $auto = new Auto();
        $auto->marca = $validatedData['marca'];
        $auto->modelo = $validatedData['modelo'];
        $auto->patente = $validatedData['patente'];
        $auto->tipo = $validatedData['tipo'];
        $auto->titular_id = $validatedData['titular_id'];
        $auto->save();

        return redirect()->route('auto.index');
    }

}
