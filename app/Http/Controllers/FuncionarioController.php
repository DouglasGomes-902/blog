<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Funcionario;

//cuidado com as letras maiusculas, acabei de sair 
//de um problema que era o A de app estava minusculo

//where para localizar id especificos e % para limitar a ordem alfabetica -- ''orderBy'' também.
 
class FuncionarioController extends Controller
{
    //
    public function index(){
        $funcionarios = Funcionario::all();
        dd($funcionarios);
        dd("funfou funfou 2 -  metedo index");
    }




}
