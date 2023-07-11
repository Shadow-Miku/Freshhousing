<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Requests\Publicacionesbt;
use App\Models\categorias_bolsadt;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


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

    public function storereg(Request $request){

    $imagen=$request->file('file')->store('public/img');
        $url=Storage::url($imagen);

        DB::table('bolsadt')->insert([
            "autorid"=>$request->input('autorid'),
            "titulo"=>$request->input('titulo'),
            "categoriaid"=>$request->input('categoriaid'),
            "url"=>$url,
            "descripcion"=>$request->input('descripcion'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
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
        $consultaId= DB::table('bolsadt')->where('idtrab',$id)->first();
        return view('admin.borrarpubbt', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bolsadt = DB::table('bolsadt')->where('idtrab', $id)->first();
        $Categorias = categorias_bolsadt::all();


        return view('admin.actpubbt', compact('Categorias', 'bolsadt'));
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
        $data = [
            "autorid" => $request->input('autorid'),
            "titulo" => $request->input('titulo'),
            "categoriaid" => $request->input('categoriaid'),
            "descripcion" => $request->input('descripcion'),
            "updated_at" => Carbon::now()
        ];
    
        
    // Verificar si se ha subido un archivo de imagen
    if ($request->hasFile('file')) {
        $imagen = $request->file('file')->store('public/img');
        $url = Storage::url($imagen);
        $data["url"] = $url;
    }

        DB::table('bolsadt')->where('idtrab', $id)->update($data);

        
    
        return redirect('admin.adminbolsadet')->with('confirmacion5', 'abc');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bolsadt')->where('idtrab',$id)->delete();

        return redirect('admin.adminbolsadet')->with('elimina','abc');
    }
}
