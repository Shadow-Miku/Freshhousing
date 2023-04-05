<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session(['user_id' => $user->id]);

            if ($user->roll === 'Admin') {
                return view('admin.base');
            }
            elseif ($user->roll === 'Empleado') {
                return view('empleado.base');
            }
        }
        return redirect()->back()->withErrors(['email' => 'Las credenciales proporcionadas son incorrectas.']);
    }
}
