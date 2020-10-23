<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portafolio;

class photos6 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = portafolio::all();

        return view('admin.portafolio.portafolio',compact('photo'));
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
        $zapatilla = portafolio::find($id); 
        return view('admin.portafolio.edit',compact('zapatilla'));
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
            'name_zapatilla' => 'required'
        ]);

        $zapatilla = portafolio::find($id); 

        if($request->hasFile('photo')){
            
            $imagen_publica = public_path().'/img/portafolio/'.$zapatilla->photo;
            \File::delete($imagen_publica);

            $file = $request->file('photo');
            $nameFile = time()."-".$file->getClientOriginalName();
            $file->move(public_path().'/img/portafolio/', $nameFile);

            $zapatilla->photo = $nameFile;
        }
        
        
        $zapatilla->fill($request->all());
        $zapatilla->save();

        // return view('admin.portafolio.portafolio')->whith('status','Actualizado');
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
        //
    }
}
