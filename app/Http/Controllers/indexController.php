<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\portafolio;

class indexController extends Controller
{
    public function index(){

        $portafolio = portafolio::all();
        $slider = slider::all();

        return view ('index', compact('portafolio','slider'));

    }
}
