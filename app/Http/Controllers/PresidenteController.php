<?php

namespace App\Http\Controllers;

use App\Models\Presidente;
use Illuminate\Http\Request;

class PresidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidentes = Presidente::all();
        return view('presidentes.index',['presidentes' => $presidentes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presidentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:presidentes|',
            'apellidos' => 'required|',
            'fecha_nacimiento' => 'required|date',
            'año' => 'required|date',
        ]);

        $presidente = new Presidente();
        $presidente->nombre = $request->input('nombre');
        $presidente->apellidos = $request->input('apellidos');
        $presidente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $presidente->año = $request->input('año');
        $presidente->save();

        return view('presidentes.message', ['msg' => 'Registro Guardado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $presidente = Presidente::find($id);
        return view('presidentes.edit', ['presidente' => $presidente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|date|unique:presidentes,año,' .$id,
            'apellidos' => 'required|',
            'fecha_nacimiento' => 'required|date',
            'año' => 'required|date',
        ]);

        $presidente = Presidente::find($id);
        $presidente->nombre = $request->input('nombre');
        $presidente->apellidos = $request->input('apellidos');
        $presidente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $presidente->año = $request->input('año');
        $presidente->save();

        return view('presidentes.message', ['msg' => 'Registro Modificdo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $presidente = Presidente::find($id);
        $presidente->delete();

        return redirect("presidentes");
    }
}
