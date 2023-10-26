<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index(){
        $nome = 'fifa';
        $id = 5;
        return view('jogos.index',['nome'=>$nome, 'id'=>$id]);
    }
}
