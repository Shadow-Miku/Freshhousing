<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Models\User;
use App\Http\Requests\Publicaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class InmueblesController extends Controller
{
    public function index(Request $request)
    {
        $filtrar = $request->get('filtrar');

        $consultaPub = DB::table('publicaciones')
            ->join('users', 'publicaciones.autorid', '=', 'users.id')
            ->where('publicaciones.titulo', 'like', '%' . $filtrar . '%')
            ->orWhere('publicaciones.descripcion', 'like', '%' . $filtrar . '%')
            ->orWhere('users.name', 'like', '%' . $filtrar . '%')
            ->orWhere('publicaciones.created_at', 'like', '%' . $filtrar . '%')
            ->select('publicaciones.*', 'users.name as autor_name')
            ->get();

        return view('empleado.menu', compact('consultaPub', 'filtrar'));
    }

    public function indexanuncios(Request $request)
    {
        $publicaciones = DB::table('publicaciones')
        ->get();

        return view('anuncios', compact('publicaciones'));
    }

    public function create()
    {
        return view('empleado.crear');
    }

    public function store(Publicaciones $request)
    {
        $imagen=$request->file('file')->store('public/img');
        $url=Storage::url($imagen);

        DB::table('publicaciones')->insert([
            "autorid"=>$request->input('autorid'),
            "titulo"=>$request->input('titulo'),
            "precio"=>$request->input('precio'),
            "url"=>$url,
            "descripcion"=>$request->input('descripcion'),
            "habitaciones"=>$request->input('habitaciones'),
            "baños"=>$request->input('baños'),
            "estacionamiento"=>$request->input('estacionamiento'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('empleado.menu')->with('confirmacion','abc');
    }

    public function edit($id)
    {
        $autor = User::all();
        $consultaId = DB::table('publicaciones')->where('idPub',$id)->first();
        return view('empleado.actualizar',compact('consultaId','autor'));
    }

    public function update(Request $request, $id)
    {

        $imagen=$request->file('file')->store('public/img');
        $url=Storage::url($imagen);

        DB::table('publicaciones')->where('idPub',$id)->update([
            "autorid"=>$request->input('autorid'),
            "titulo"=>$request->input('titulo'),
            "precio"=>$request->input('precio'),
            "url"=>$url,
            "descripcion"=>$request->input('descripcion'),
            "habitaciones"=>$request->input('habitaciones'),
            "baños"=>$request->input('baños'),
            "estacionamiento"=>$request->input('estacionamiento'),
            "updated_at"=> Carbon::now()

        ]);

        return redirect('empleado.menu')->with('actualizar','abc');
    }


    public function show($id)
    {
        $consultaId= DB::table('publicaciones')->where('idPub',$id)->first();
        return view('empleado.borrar', compact('consultaId'));
    }

    public function destroy($id)
    {
        DB::table('publicaciones')->where('idPub',$id)->delete();

        return redirect('empleado.menu')->with('elimina','abc');
    }



    public function consultaPublicacion(Request $request)
    {
        $filtrar = $request->get('filtrar');

        $consultaPub = DB::table('publicaciones')
            ->where('publicaciones.titulo', 'like', '%' . $filtrar . '%')
            ->orWhere('publicaciones.descripcion', 'like', '%' . $filtrar . '%')
            ->orWhere('publicaciones.created_at', 'like', '%' . $filtrar . '%')
            ->get();

        return view('empleado.menu', compact('consultaPub', 'filtrar'));
    }

    public function paginaPublicacion($id)
    {
        $consultaId= DB::table('publicaciones')->where('idPub',$id)->first();
        return view('anuncio', compact('consultaId'));
    }

    public function indexsex(Request $request)
    {
        $publicaciones = DB::table('publicaciones')
        ->get();

        return view('/', compact('publicaciones'));
    }
}
