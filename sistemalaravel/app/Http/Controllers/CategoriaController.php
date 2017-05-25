<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use laravel-noob\Categoria;
use Illuminate\Support\Facedes\Redirect;
use laravel-noob\Http\Requests\CategoriaFormRequest;
use DB;

class CategoriaController extends Controller
{
    public function __construct(){
      //
    }

    // Vai buscar qualquer palavra com a letra difgitada quando a condição receber 1
    public function index(Request $request){
        if($request){
           $query = trim($request->get('search-Text')); //Vai capturar uma busca  .. o trim() ignora os espaços
           $categorias = DB::table('categoria')->where('nome' ,'LIKE' , '%'.$query.'%')->where('condicao' , '=' , '1'); // o % indica que vai fazer busca pelas primeira letra e ultimas
        }
    }

    public function create(){

    }
    public function store(){

    }

    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }



}
