<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use App\Categoria;
use App\Produto;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
  public function index(){
      // listar os produtos
      $produtos = Produto::all();

      $categorias = Categoria::all();
      return view('produto.index', compact('produtos', 'categorias'));
  }

  // Para cadastrar um novo produto a partir de uma tela
  public function store(Request $req){
      $produto = new Produto();
      $produto->categoria_id = $req->get('categoria_id');
      $produto->nome = $req->get('nome');
      $produto->descricao = $req->get('descricao');
      $produto->modelo = $req->get('modelo');
      $produto->preco = $req->get('preco');
      $produto->qtde_estoque = $req->get('qtde_estoque');
      Produto::novoProduto($produto);
      return $this->index();
  }

  public function upload(Request $request){
      Log::info('Chamou o upload');
      $nameFile = null;

      if ($request->hasFile('csv') && $request->file('csv')->isValid()) {
          Log::info('Arquivo é valido');

          $name = uniqid(date('HisYmd'));

          $extension = $request->csv->extension();

          $nameFile = "{$name}.{$extension}";

          $upload = $request->csv->storeAs('products', $nameFile);
          Log::info("Fez o upload $upload");
          $this->importProducts();

          if ( !$upload )
              return redirect()
                          ->back()
                          ->with('error', 'Falha ao fazer upload')
                          ->withInput();
      }
  }

  public function importProducts(){
      Log::info('Chamou o Produtocontroller');
      //$files = $this->prepararArquivos();
  }

  private function prepararArquivos(){
      $directory = storage_path('app\products');
      dd(\File::allFiles($directory));
      $files = Storage::allFiles($directory);
      if (!empty($files)){
          Log::info("dentro do preparar arquivos ");
      }

      foreach($files as $f){
          //dd($d);
          $inf = implode("|",$f);
         Log::info("dentro do preparar arquivos $inf");
      }
      //Log::info("dentro do preparar arquivos $dir");

  }
}
