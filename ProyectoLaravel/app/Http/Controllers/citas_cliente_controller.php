<?php

namespace App\Http\Controllers;

//use DB;
use Illuminate\Http\Request;
use IlluminateSupportFacadesDB;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;


class citas_cliente_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$usuario->session()->get('id'); 
        $usuario = '2'; //test en lo que se averigua como sacar el usuario de session storage
        //->paginate(20); //resolver lo de la paginacion
        $citas = DB::select('CALL `fungdb`.`mostrar_cita`('.$usuario.');');
        return view('citasCliente', [ "citas" => $citas ]);
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
        DB::select('call `fungdb`.`eliminar_cita`('.$id.');');
        return redirect()->route('Citas.index');
    }
}