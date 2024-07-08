<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index',['equipos' => $equipos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'año' => 'required|unique:equipos|date',
            'aforo' => 'required|',
            'estadio' => 'required|',
            'codigo' => 'required|',
            'ciudad' => 'required|',
            'nombre' => 'required|',
        ]);

        $equipo = new Equipo();
        $equipo->año = $request->input('año');
        $equipo->aforo = $request->input('aforo');
        $equipo->estadio = $request->input('estadio');
        $equipo->codigo = $request->input('codigo');
        $equipo->ciudad = $request->input('ciudad');
        $equipo->nombre = $request->input('nombre');
        $equipo->save();

        return view('equipos.message', ['msg' => 'Registro Guardado']);
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
        $equipo = Equipo::find($id);
        return view('equipos.edit', ['equipo' => $equipo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'año' => 'required|date|unique:equipos,año,' .$id,
            'aforo' => 'required|',
            'estadio' => 'required|',
            'codigo' => 'required|',
            'ciudad' => 'required|',
            'nombre' => 'required|',
        ]);

        $equipo = Equipo::find($id);
        $equipo->año = $request->input('año');
        $equipo->aforo = $request->input('aforo');
        $equipo->estadio = $request->input('estadio');
        $equipo->codigo = $request->input('codigo');
        $equipo->ciudad = $request->input('ciudad');
        $equipo->nombre = $request->input('nombre');
        $equipo->save();

        return view('equipos.message', ['msg' => 'Registro Modificdo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id);
        $equipo->delete();

        return redirect("equipos");
    }
}
