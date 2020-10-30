<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zapatilla;
use App\Models\marca;

class shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zapatillas = zapatilla::inRandomOrder()->paginate(20);
        $marcas = marca::all();
        $marcaSelect = 'Zapatillas';

        return view('mart.shop', compact('zapatillas','marcas','marcaSelect'));
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

    // NOTA: use este "STORE" controlador solo para mostrar filtros en la vista del cliente de 
    // los zapatos, esta funcion no graba o guarda datos como de costumbre, la uso ya 
    // que tenia creado este controlador reosurce el cual solo esta haciendo uso del 
    // la funcion INDEX

    public function store(Request $request)
    {

        // Sin filtro
        if($request->filtro == 0){

            $zapatillas = zapatilla::inRandomOrder()->paginate(21);
            $marcas = marca::all();

            $marcaSelect = 'Zapatillas';

            return view('mart.shop', compact('zapatillas','marcas','marcaSelect'));

        }

        else {
            // con filtro
            $zapatillas = zapatilla::inRandomOrder()
            ->where('id_marca','=',$request->filtro)
            ->paginate(21);

            // Nombre de la marca seleccionada a filtrar
            $marcaSelect = marca::find($request->filtro)->name_marca;

            $marcas = marca::all();

            return view('mart.shop', compact('zapatillas','marcas','marcaSelect'));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
