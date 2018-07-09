<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   //preenchiveis
   protected $fillable = ['nome','descricao'];
   //Nao preenchiveis
   protected $guarded = ['id', 'created_at', 'update_at'];
   protected $table = 'categorias';

   public static function saveCategoria(string $nome, string $descricao) {
     // campos que devem ser unicos na tabela
     $matchThese = array('nome'=>$nome);
     // se ja existir um registro com o mesmo nome de $nome, sera um update. Se nao existir, sera um insert
     return Categoria::updateOrCreate($matchThese,['descricao'=>$descricao]); 
  }
}
