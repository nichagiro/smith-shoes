<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marca;

class marcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = marca::all();
        
        return view('admin.marcas.marcas',compact('marcas'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'marca' => 'required'
        ]);

        $marca = new marca();
        $marca->name_marca = $request->marca;

        $marca->save();

        return back()->with('status','Marca Creada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = marca::find($id);
        return view('admin.marcas.show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $marca = marca::find($id);
        
        $marca->name_marca = $request->nombre;
        $marca->save();

        return back()->with('status','Marca Actualizada');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $marcas = marca::find($id);

        $marcas->delete();

        return redirect('/marcas')->with('status','Marca Eliminada');

    }

}
