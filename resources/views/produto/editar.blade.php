@extends('layout.admin-layout-site')

@section('titulo', 'Produtos')

@section('conteudo')

<br/><br/><br/><br/><br/>
<div align="center" >
  <h4>Editar produto</h4>
  <br/>
</div>
<div class="fade-txt-effect width-div-external-register-pages" align="left" style="margin-left:27%!important;" >
      <div class="container" align="center">
        <div class="row" >
          <form class="" action="{{route('produto.atualizar',$prod->id)}}" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('produto/_form')
            <div class="row" align="left">
               <button class="btn deep-green"><i class="material-icons left">edit</i>Atualizar</button>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
<br/><br/><br/><br/><br/><br/>




@endsection
