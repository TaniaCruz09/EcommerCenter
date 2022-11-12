<?php

namespace App\Http\Controllers;

use App\Models\CrearTienda;
use App\Http\Requests\StoreCrearTiendaRequest;
use App\Http\Requests\UpdateCrearTiendaRequest;

class CrearTiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crearTienda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCrearTiendaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCrearTiendaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrearTienda  $crearTienda
     * @return \Illuminate\Http\Response
     */
    public function show(CrearTienda $crearTienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrearTienda  $crearTienda
     * @return \Illuminate\Http\Response
     */
    public function edit(CrearTienda $crearTienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCrearTiendaRequest  $request
     * @param  \App\Models\CrearTienda  $crearTienda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCrearTiendaRequest $request, CrearTienda $crearTienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrearTienda  $crearTienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrearTienda $crearTienda)
    {
        //
    }
}
