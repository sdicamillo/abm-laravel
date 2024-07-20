<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Titular;
use Illuminate\Http\Request;

class TitularController extends Controller
{
    public function index()
    {
        $titulares = Titular::all();
        return view('titular.index', compact('titulares'));
    }

    public function create()
    {
        return view('titular.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'dni' => 'required|numeric|unique:titulares,dni',
            'domicilio' => 'required|max:255',
        ]);
    
        $titular = new Titular();
        $titular->nombre = $validatedData['nombre'];
        $titular->apellido = $validatedData['apellido'];
        $titular->dni = $validatedData['dni'];
        $titular->domicilio = $validatedData['domicilio'];
        $titular->save();
    
        return redirect()->route('titular.index');
    }

    public function show(int $id)
    {
        $titular = Titular::Find($id);
        return view('titular.show', compact('titular'));
    }

    public function edit(int $id)
    {
        $titular = Titular::Find($id);
        return view('titular.edit', compact('titular'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'dni' => ['required', 'numeric', Rule::unique('titulares', 'dni')->ignore($id)],
            'domicilio' => 'required|max:255',
        ]);
    
        $titular = Titular::find($id);
        $titular->nombre = $request['nombre'];
        $titular->apellido = $request['apellido'];
        $titular->dni = $request['dni'];
        $titular->domicilio = $request['domicilio'];
        $titular->update();
    
        return redirect()->route('titular.index');
    }

    public function destroy(int $id)
    {
        $titular = Titular::find($id);
        $titular->delete();
        
        return redirect()->route('titular.index');
    }

}
