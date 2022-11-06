<?php

namespace App\Http\Controllers;

use App\Models\CategoriaTienda;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoriaTiendaRequest;


class CategoriaTiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['categoriasTiendas']=CategoriaTienda::all();
        return view('categoriaTiendas/index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoriaTiendas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        CategoriaTienda::insert($datos);
        return redirect('categorias/')->with('mensaje', 'Grado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaTienda  $categoriaTienda
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaTienda $categoriaTienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriaTienda  $categoriaTienda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = CategoriaTienda::findOrFail($id);
        return view('categoriaTiendas/edit', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
          * @param Illuminate\Http\Request $request
     * @param  \App\Models\CategoriaTienda  $categoriaTienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $datos = request()->except(['_token', '_method']);

        CategoriaTienda::where('id', '=', $id)->update($datos);

        $datos = CategoriaTienda::findOrFail($id);
        return view('categoriaTiendas.edit', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaTienda  $categoriaTienda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoriaTienda:: destroy($id);
        return redirect('categorias/')->with('mensaje', 'Categoria Tienda eliminada con exito');
    }
}
