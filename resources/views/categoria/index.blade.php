@extends('layout.admin-layout-site')

@section('titulo', 'Categorias')

@section('conteudo')
<br/><br/><br/><br/>
<div align="center" >
  <div class="external-div-registers" >
    <div class="width-div-external-register-pages" >
    <br/>
    <h4>Lista de categorias</h4>
    <div class="active-scrollbar-registers">
      <table>
          <thead>
             <th>Id</th>
             <th>Nome</th>
             <th>Descricao</th>
          </thead>
          <tbody>
              @foreach($categorias as $cat)
                  <tr>
                  <td>{{$cat->id}}</td>
                  <td>{{$cat->nome}}</td>
                  <td>{{$cat->descricao}}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
   </div>
   </div>
   <br/>
   <div align="left" class="width-div-external-register-pages" >
       <div align="center" >
         <h4>Incluir novo categoria</h4>
       </div>
       <form action="/categoria" method="POST">
           {{ csrf_field() }}
           <span class="font-bold">Nome:</span><input class="refactory-height-input-space" name="nome" type="text" />
           <span class="font-bold">Descricao:</span><input class="refactory-height-input-space" name="descricao" type="text" />
           <br/><br/>
           <button class="btn-style-cadastros" >Enviar</button>
           <br/><br/>
       </form>
   </div>
</div>
<br/>

@endsection
