<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ValidadorLogin;

class ControladorLogin extends Controller
{
    public function login(){
        return view('login');
    }

    public function log(ValidadorLogin $request){

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){

                
             if((Auth::user()->Rol)=='Administrador'){
               return redirect('menu');}

                          if((Auth::user()->Rol)=='Empleado'){
                            return redirect('entrada');}

                                        

        }else{
            return 'Maaaaal';
        }
    }
           

public function logout(){
    Auth::logout();
    return 'Adiooooss';
}

}
