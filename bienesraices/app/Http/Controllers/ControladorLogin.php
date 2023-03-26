<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLogin extends Controller
{
    public function login(){
        return view('login');
    }

    public function log(ValidadorLogin $request){

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){

                
             if((Auth::user()->TipoUsu)=='Administrador'){
               return redirect('JefeSoporte')->with('Entrar', 'Bienvenido');}

                          if((Auth::user()->TipoUsu)=='Empleado'){
                            return redirect('Auxiliar')->with('Entrar', 'Bienvenido');}

                                        

        }else{
            return redirect('/')->with('Error', 'Error de Usuario');
        }
    }
           

public function logout(){
    Auth::logout();
    return redirect('/');
}

}
