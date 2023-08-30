<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Formulaire de connexion
    public function loginForm(){
        return view('login');
    }

    //connexion
    public function login(Request $request){
        // dd($request);
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $coordonnees = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($coordonnees)){
            return redirect()->route('dashboard');
        }else{
            session()->flash('type-alerte','alert-danger');
            session()->flash('message','Informations non valide');
            return back();
        }
    }
}
