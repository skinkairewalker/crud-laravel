<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

       $produto = \App\Models\Produto::all();

       return view("site.painel", compact('produto'));

    }
}
