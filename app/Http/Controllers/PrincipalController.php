<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PrincipalController extends Controller
{
    public function principal(){

        $produto = \App\Models\Produto::all();

        return view("site.principal", compact('produto'));
    }

}
