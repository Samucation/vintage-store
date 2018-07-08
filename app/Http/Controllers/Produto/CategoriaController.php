<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function index(){
      $categorias = Categoria::all();
      // categoria.index representa o arquivo resources\categoria\index.blade.php
      return view('categoria.index', compact('categorias'));
    }

    public function novaCategoria(Request $req){
        Categoria::saveCategoria($req->get('nome'), $req->get('descricao'));
        return $this->index();
    }
}
