<?php
namespace App\Http\Controllers;
use App\Http\Requests\ValidadorUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use app\Models\User;
use Svg\Tag\Rect;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $filtrar = $request->get('filtrar');

        $consultaUsu = DB::table('users')
        ->where('name', 'like', '%'.$filtrar.'%')
        ->orWhere('username', 'like', '%'.$filtrar.'%')
        ->orWhere('roll', 'like', '%'.$filtrar.'%')
        ->orWhere('email', 'like', '%'.$filtrar.'%')
        ->get();

        $Consulta= DB::table('users')->get();

        return view('admin.adminUsu',compact('consultaUsu','Consulta','filtrar'));
    }

    public function create()
    {
        return view('admin.regUsu');
    }

    public function store(ValidadorUser $request)
    {
        $imagen=$request->file('file')->store('public/img');
        $url=Storage::url($imagen);

        DB::table('users')->insert([
            "name"=> $request->input('name'),
            "email"=> $request->input('email'),
            "username"=> $request->input('username'),
            "password"=> Hash::make($request->input('password')),
            "roll"=> $request->input('roll'),
            "url"=>$url,
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('admin.adminUsu')->with('confirmacion','abc');
    }

    public function show($id)
    {
        $consultaId= DB::table('users')->where('id',$id)->first();
        return view('admin.eliUsu', compact('consultaId'));
    }

    public function edit($id)
    {
        $consultaId= DB::table('users')->where('id',$id)->first();
        return view('admin.actUsu', compact('consultaId'));
    }

    public function update(Request $request, $id)
    {
    $data = [
        "name" => $request->input('name'),
        "email" => $request->input('email'),
        "username" => $request->input('username'),
        "password" => Hash::make($request->input('password')),
        "roll" => $request->input('roll'),
        "updated_at" => Carbon::now()
    ];

    // Verificar si se ha enviado un archivo
    if ($request->hasFile('file')) {
        $imagen = $request->file('file')->store('public/img');
        $url = Storage::url($imagen);
        $data["url"] = $url;
    }

    DB::table('users')->where('id', $id)->update($data);

    return redirect('admin.adminUsu')->with('actualizar', 'abc');
    }


    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();

        return redirect('admin.adminUsu')->with('elimina','abc');
    }
}
