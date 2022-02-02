<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function index(Request $request){

        $produtos = new \App\Models\Produto();
        $produtos->nome = $request->input('produto-nome');
        $produtos->descricao = $request->input('produto-desc');
        $produtos->preco = $request->input('produto-preco');
        $produtos->foto = $request->input('produto-foto');
        $produtos->save();
        return "produtos";

    }

    public function novo(Request $request){
        /*
        $regras = [
            'np-nome' => 'required|min:3|max:50',
            'np-descricao' => 'required|min:3|max:200',
            'np-preco' => 'required|double',
            'np-foto' => 'required|min:3|max:50',
        ];

        $feedback =[
            'required' => 'Todos os campos devem ser preenchidos meu patrão !',
            'min' => 'Pelo menos 3 caracteres devem existir nos campos',
            'max' => 'vish, poupe seus dedos, ta digintando muitos caracteres nos campos'
        ];

        $request->validate($regras,$feedback);
        */

        $produtos = new \App\Models\Produto();
        $produtos->nome = $request->input('np-nome');
        $produtos->descricao = $request->input('np-descricao');
        $produtos->preco = (double)$request->input('np-preco');
        $produtos->foto = $request->input('np-foto');
        $produtos->save();

        return redirect()->route('admin.painel');

    }

    public function atualiza(Request $request ){
        
        $produtos = \App\Models\Produto::find($request->input('up-pid'));

       //$produtos->id = $request->input('up-pid');
        $produtos->nome = $request->input('up-nome');
        $produtos->descricao = $request->input('up-descricao');
        $produtos->preco = (double)$request->input('up-preco');
        $produtos->foto = $request->input('up-foto');
        $produtos->save();

        return redirect()->route('admin.painel');

    }


    public function deletar(Request $request ){

        $produtos = \App\Models\Produto::find($request->input('dp-pid'));
        $produtos->delete();

        return redirect()->route('admin.painel');

    }

}
