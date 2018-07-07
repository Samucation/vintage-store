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
}
