<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aux = new stdClass;
        $aux->apellido = 'Figueroa';
        $aux->apellido_familiar = ['0'=>'Llorens','1'=>'Gomez'];
        $aux->dni_familiar = ['0'=>'1010101010','1'=>'9090909090'];

        //$array = json_decode(json_encode($aux), true);
        //dd($indices);
        return view('mostrar',compact('aux'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $fecha = date("m-d-y");
        return view('show',compact('fecha'));
    }
}
