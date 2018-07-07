<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  //preenchiveis
  protected $fillable = ['nome','descricao','modelo','preco','qtde_estoque','categoria_id'];
  //Nao preenchiveis
  protected $guarded = ['id', 'created_at', 'update_at'];
  protected $table = 'produtos';
}
