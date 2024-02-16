<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Peliculas = PeliculasController::get();
        return view('peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = new PeliculasController();
        $pelicula->titulo = $request->get('titulo');
        $pelicula->director = $request->get('director');
        $pelicula->anyo = $request->get('anyo');
        $pelicula->poster = $request->get('poster');
        $pelicula->save();
        return redirect()->route('peliculas.index'); //Redireccionar al listado.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('peliculas.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
