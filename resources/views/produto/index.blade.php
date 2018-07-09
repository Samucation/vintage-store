@extends('layout.admin-layout-site')

@section('titulo', 'Produtos')

@section('conteudo')
<br/><br/><br/><br/>
<div align="center" >
  <div class="external-div-registers" >
    <br/>
    <div class="fade-txt-effect width-div-external-register-pages" >
      <h4>Lista de produtos</h4>
      <div class="active-scrollbar-registers">
        <table>
            <thead>
               <th>Id</th>
               <th>Categoria</th>
               <th>Nome</th>
               <th>Descricao</th>
               <th>Modelo</th>
               <th>Preco</th>
               <th>Qtde estoque</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <br/>
    </div>
    <br/>
    <div  class="fade-txt-effect width-div-external-register-pages" align="left" >
        <div align="center" >
          <h4>Incluir novo produto</h4>
        </div>

        <form action="/produto" method="POST">
            {{ csrf_field() }}
            <span class="font-bold">Categoria:</span><select name="categoria_id">
                        @foreach($categorias as $cat)
                            <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        @endforeach
                        </select>
            <br/>
            <span class="font-bold">Nome:</span><input class="refactory-height-input-space" name="nome" type="text" />
            <br/>
            <span class="font-bold">Descricao:</span><input class="refactory-height-input-space" name="descricao" type="text" />
            <br/>
            <span class="font-bold">Modelo:</span><input class="refactory-height-input-space" name="modelo" type="text" />
            <br/>
            <span class="font-bold">Preco:</span><input class="refactory-height-input-space" name="preco" type="text" />
            <br/>
            <span class="font-bold">Qtde estoque:</span><input class="refactory-height-input-space" name="qtde_estoque" type="text" />
            <br/><br/>
            <button class="btn-style-cadastros">Enviar</button>
        </form>
    </div>
    <br/>
  </div>
</div>
<br/>




@endsection
