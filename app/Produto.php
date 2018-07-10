<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class Produto extends Model
{
  //preenchiveis
  protected $fillable = ['nome','descricao','modelo','preco',
                         'qtde_estoque','imagem','categoria_id'];
  //Nao preenchiveis
  protected $guarded = ['id', 'created_at', 'update_at'];
  protected $table = 'produtos';

  public function categoria(){
      // para recuperar a categoria quando os produtos forem recuperados
      return $this->belongsTo('App\Categoria');
  }

  public static function novoProduto(Produto $produto){

      //dd($produto);
      // se a categoria for valida, salva ou atualiza o produto
      if (Categoria::find($produto->categoria_id)->exists()){
          $matchThese = array('categoria_id'=>$produto->categoria_id,
                              'nome'=>$produto->nome, 'modelo'=>$produto->modelo);
          Produto::updateOrCreate($matchThese,['descricao'=>$produto->descricao,
                                 'preco'=>$produto->preco,'qtde_estoque'=>$produto->qtde_estoque]);
      }
  }
}
