<?php

namespace App\Http\Controllers;

use App\Models\CrearTiendaParteII;
use App\Http\Requests\StoreCrearTiendaParteIIRequest;
use App\Http\Requests\UpdateCrearTiendaParteIIRequest;

class CrearTiendaParteIIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crearTiendaParteII.index');
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
     * @param  \App\Http\Requests\StoreCrearTiendaParteIIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCrearTiendaParteIIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrearTiendaParteII  $crearTiendaParteII
     * @return \Illuminate\Http\Response
     */
    public function show(CrearTiendaParteII $crearTiendaParteII)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrearTiendaParteII  $crearTiendaParteII
     * @return \Illuminate\Http\Response
     */
    public function edit(CrearTiendaParteII $crearTiendaParteII)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCrearTiendaParteIIRequest  $request
     * @param  \App\Models\CrearTiendaParteII  $crearTiendaParteII
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCrearTiendaParteIIRequest $request, CrearTiendaParteII $crearTiendaParteII)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrearTiendaParteII  $crearTiendaParteII
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrearTiendaParteII $crearTiendaParteII)
    {
        //
    }
}
