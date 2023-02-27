<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\tb_estados;
use App\Models\tb_municipios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('usuarios.index');
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
    
    // combos de dinamicos de estados
    public function registro(){
        $estados = tb_estados::all();
        return view("datos/registro")->with(['estados' => $estados]);
    }
    //javascript municipios 
    public function js_municipios(Request $request){
        $id_estado = $request ->get('id_estado');
        $municipios = tb_municipios::where('id_estado',$id_estado)->get();
        
        return view("datos/js_municipios")->with(['municipios' => $municipios]);

    }

    //-------------combos dinamicos-----------------//
    public function form01(){

        $estados = tb_estados::all();
        return view("datos/formulario01")->with(['estados'=> $estados]);

    } 

    public function js_estudio(){
        return view("datos/js_estudio");
    }


      
}



