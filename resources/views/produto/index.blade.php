@extends('layout.admin-layout-site')

@section('titulo', 'Produtos')

@section('conteudo')
<br/><br/><br/><br/>
<div class="external-div-registers" >
  <br/>
  <h3 class="center">Lista de produtos</h3>
  <br/><br/>
  <div class="active-scrollbar-registers fade-txt-effect">
    <div class="row" style="width: 90%!important;margin-left:5%!important;">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Categoria</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Modelo</th>
            <th>Preco</th>
            <th>Qtde estoque</th>
          </tr>
        </thead>
        <tbody>
          @foreach($produtos as $prod)
            <tr>
              <td>{{$prod->id}}</td>
              <td>{{$prod->categoria->nome}}</td>
              <td>{{$prod->descricao}}</td>
              <td>{{$prod->modelo}}</td>
              <td>{{$prod->preco}}</td>
              <td>{{$prod->qtde_estoque}}</td>
              <td>
                <a class="btn deep-yellow" href=""><i class="material-icons left">edit</i>Editar</a>
                <a class="btn red" href="{{ route('produto.delete', $prod->id) }} "><i class="material-icons left">delete</i>Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<br/><br/><br/><br/>
<div align="center" >
  <h4>Incluir novo produto</h4>
</div>
<div class="fade-txt-effect width-div-external-register-pages" align="left" style="margin-left:27%!important;" >


      <div class="container" align="center">
        <div class="row" >
          <form class="" action="{{route('product.add.store')}}" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
            @include('produto/_form')
            <div class="row" align="left">
               <button class="btn deep-green"><i class="material-icons left">save</i>Salvar</button>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
<br/>




@endsection
