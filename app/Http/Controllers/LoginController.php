<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(Request $request){
        $erro = $request->get('erro');
        return view('site.login',['erro'=> $erro]);
    }

    public function autenticar(Request $request){

        $regras = [
            'email' => 'email',
            'password' => 'required'
        ];

        $feedback = [

            'email.email' => 'O campo de email é obrigatório, meu consagrado !',
            'password.required' => 'sem senha não dá, né ?!'
        ];

        $request->validate($regras,$feedback);
        $email = $request->get('email');
        $senha = $request->get('password');
        
        //print_r($request->all());

        $user = new \App\Models\User();

        $usuario = $user->where('email',$email)->where('password',$senha)->get()->first();

        if(isset($usuario->name)){

            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email; 
            
            $logado = $usuario->name;

            return redirect()->route('admin.painel');
        }else{
            return redirect()->route('site.auth',['erro' => '1']);
        }

        //print_r($usuario);

        return 'login';
    }

    public function sair(){

        session_destroy();
        return redirect()->route('site.index');

    }

}
