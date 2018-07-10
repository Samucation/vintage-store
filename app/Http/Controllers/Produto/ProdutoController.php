<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use App\Categoria;
use App\Produto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;

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

           $upload = $request->csv->storeAs('products\input', $nameFile);
           Log::info("Fez o upload $upload");

           if ( !$upload )
               return redirect()
                           ->back()
                           ->with('error', 'Falha ao fazer upload')
                           ->withInput();
           else
              $path = storage_path('app').'\\'.$upload;
              $this->importProducts($path);

       }
       return $this->index();
   }

   public function importProducts(string $file){
       Log::info("$file");

       $data = \Excel::load($file)->get();

       Log::info("$data");
       $csv_header_fields = [];
       foreach ($data as $value) {
         $nome_categoria = $value['categoria'];
         $categoria = Categoria::saveCategoria($nome_categoria, '');
         Log::info($categoria->id);
         $produto = new Produto();
         $produto->categoria_id = $categoria->id;
         $produto->nome = $value['nome'];
         $produto->descricao = $value['descricao'];
         $produto->modelo = $value['modelo'];
         $produto->preco = $value['preco'];
         $produto->qtde_estoque = $value['qtde_estoque'];
         Produto::novoProduto($produto);
       }
       return true;
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

  public function uploadPage(){
        return view('produto.upload');
  }

  //Apagar Produto
  public function delete($id){
     //dd($id);
     Produto::find($id)->delete();
  }
}
