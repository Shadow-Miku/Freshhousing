<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $publicaciones = DB::table('publicaciones')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $publicacionesbolsa = DB::table('bolsadt')
            ->join('users', 'bolsadt.autorid', '=', 'users.id')
            ->select('bolsadt.*', 'users.username as autor_username')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('index', compact('publicaciones', 'publicacionesbolsa'));
    }
}
