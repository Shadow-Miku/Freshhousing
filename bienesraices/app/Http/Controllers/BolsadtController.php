<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Requests\Publicacionesbt;
use App\Models\categorias_bolsadt;


class BolsadtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtrar = $request->get('filtrar');

        $consultaPubbt = DB::table('bolsadt')
            ->join('users', 'bolsadt.autorid', '=', 'users.id')
            ->join('categorias_bolsadt', 'bolsadt.categoriaid', '=', 'categorias_bolsadt.idcategoria')
            ->where('bolsadt.autorid', '=', auth()->user()->id)
            ->where(function($query) use ($filtrar) {
                $query->where('bolsadt.titulo', 'like', '%' . $filtrar . '%')
                    ->orWhere('bolsadt.descripcion', 'like', '%' . $filtrar . '%')
                    ->orWhere('bolsadt.created_at', 'like', '%' . $filtrar . '%');
            })
            ->select('bolsadt.*', 'users.name as autor_name', 'categorias_bolsadt.nombre_categoria as categoria_nombre')
            ->get();
        
        return view('admin.adminbolsadet', compact('consultaPubbt', 'filtrar'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createreg()
    {
        $Categorias = categorias_bolsadt::all();
        
        return view('admin.regPubbt', compact('Categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storereg(Publicacionbt $request)
    
    {

        $imagen = $request->file('file')->store('public/img');
        $url = Storage::url($imagen);

        $user = User::find(auth()->user()->id);

        if (!$user) {
            return redirect()->back()->with('error', 'Usuario no encontrado');
        }

        $categoria = CategoriaBolsadt::find($request->input('categoriaid'));

        if (!$categoria) {
            return redirect()->back()->with('error', 'Categoría no encontrada');
        }

        $bolsadt = new Bolsadt();
        $bolsadt->titulo = $request->input('titulo');
        $bolsadt->categoriaid = $request->input('categoriaid');
        $bolsadt->categoria_nombre = $categoria->nombre_categoria;
        $bolsadt->url = $url;
        $bolsadt->descripcion = $request->input('descripcion');

        $user->bolsadt()->save($bolsadt);

        return redirect('admin.adminbolsadet')->with('confirmacion3', 'abc');
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
