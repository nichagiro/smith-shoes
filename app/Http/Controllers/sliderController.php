<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zapatillas = slider::all();

        return view ('admin.slider.slider',compact('zapatillas'));
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
        $zapatilla = slider::find($id); 
        return view('admin.slider.edit-slider',compact('zapatilla'));
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

        $zapatilla = slider::find($id); 

        if($request->hasFile('photo')){
            
            $imagen_publica = public_path().'/img/slider/'.$zapatilla->photo;
            \File::delete($imagen_publica);

            $file = $request->file('photo');
            $nameFile = time()."-".$file->getClientOriginalName();
            $file->move(public_path().'/img/slider/', $nameFile);

            $zapatilla->photo = $nameFile;
        }
        
        
        $zapatilla->fill($request->all());
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
        //
    }
}
