<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Validadorcontacto;

class contactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtrar = $request->get('filtrar');

        $consultaMsg = DB::table('tb_contacto')
        ->where('nombre', 'like', '%'.$filtrar.'%')
        ->orWhere('mensaje', 'like', '%'.$filtrar.'%')
        ->orWhere('telefono', 'like', '%'.$filtrar.'%')
        ->orWhere('email', 'like', '%'.$filtrar.'%')
        ->get();

        $Consulta= DB::table('tb_contacto')->get();

        return view('empleado.mensajes',compact('consultaMsg','Consulta','filtrar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorcontacto $request)
    {
        DB::table('tb_contacto')->insert([
            "nombre"=> $request->input('nombre'),
            "email"=> $request->input('email'),
            "telefono"=> $request->input('telefono'),
            "mensaje"=> $request->input('mensaje')
        ]);
        return redirect('/');
    }

}
