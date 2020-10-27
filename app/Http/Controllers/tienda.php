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

        return view ('admin.mart.create',compact('marcas'));
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
            'nombre' => 'required',
            'marca' => 'required',
            'foto' => 'required|image'
        ]);

        $zapatilla = new zapatilla(); 

        if($request->hasFile('foto')){

            $file = $request->file('foto');
            $nameFile = time()."-".$file->getClientOriginalName();
            $file->move(public_path().'/img/zapatillas/', $nameFile);

            $zapatilla->photo = $nameFile;
        }
            
        $zapatilla->name_zapatilla = $request->nombre;
        $zapatilla->id_marca = $request->marca;

        $zapatilla->save();

        return back()->with('status' , 'Zapatilla Creada');
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
        ->select('zapatillas.id','zapatillas.name_zapatilla','zapatillas.photo','zapatillas.id_marca','marcas.name_marca')
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
        
        $request->validate([
            'nombre' => 'required',
            'marca' => 'required',
            'imagen' => 'image'
        ]);

        $zapatilla = zapatilla::find($id); 

        if($request->hasFile('imagen')){
            
            $imagen_publica = public_path().'/img/zapatillas/'.$zapatilla->photo;
            \File::delete($imagen_publica);

            $file = $request->file('imagen');
            $nameFile = time()."-".$file->getClientOriginalName();
            $file->move(public_path().'/img/zapatillas/', $nameFile);

            $zapatilla->photo = $nameFile;
        }

        $zapatilla->name_zapatilla = $request->nombre;
        $zapatilla->id_marca = $request->marca;
        $zapatilla->save();

        return back()->with('status' , 'Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $zapatilla = zapatilla::find($id);

        $imagen_publica = public_path().'/img/zapatillas/'.$zapatilla->photo;
        \File::delete($imagen_publica);

        $zapatilla->delete();

        return redirect('/tienda')->with('status' , 'Zapatilla eliminada');

    }
}
