<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use DB;


    /** 
     * 
     * @param
     * @return
     * 
     * public function index(){

      *  $clientesAdminV = DB::table('usuarios')->get();

       * return view('clientesAdmin', $clientesAdminV);
        

    *}

     * 
     * return view('clientesAdmin', $clientesAdminV);
     * 
     * **/


class clientesAdminController extends Controller{


    public function index()
    {
 
        $clientes = DB::select('CALL `fungdb`.`mostrar_clientes`();');
        return view('clientesAdmin', [ "clientesAdmin" => $clientes ]);
    }
    

}