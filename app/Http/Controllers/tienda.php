<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zapatilla;
use App\Models\marca;

class tienda extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $zapatilla = zapatilla::orderBy('id','desc')->paginate(21);
        
        return view ('admin.mart.mart',compact('zapatilla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = marca::all();

        return view ('admin.mart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *  
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zapatillas = zapatilla::join('marcas', 'marcas.id','=','zapatillas.id_marca')
        ->where('zapatillas.id','=', $id)
        ->get();
    
        $marca = marca::all();

        return view('admin.mart.show',compact('zapatillas','marca'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
