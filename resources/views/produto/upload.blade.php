@extends('layout.admin-layout-site')

@section('titulo', 'Produtos')

@section('conteudo')
<br/><br/><br/><br/>
<div align="center" >
  <div class="external-div-registers" >
    <br/>
    <div class="fade-txt-effect width-div-external-register-pages" >
      <h2>Enviar CSV cadastro de produtos</h2>
      <br/><br/><br/><br/><br/><br/><br/><br/>
      <form action="/produto/upload" method="post" enctype="multipart/form-data" accept=".csv">
          {{ csrf_field() }}
          <input class="" type="file" name="csv" style="background-color: black;
                                                        color:white;"
                 title="Especificar o arquivo CSV com lista de cadastros de produtos." />
          <button class="btn-style-cadastros"
                  title="Acionar o envio do arquivo CSV, após o carregamento o sistema ira abrir a pagina de lista de prodtos.">
                   Enviar
          </button>
      </form>
      <br/><br/><br/><br/>
    </div>
 </div>
</div>
<br/><br/>
@endsection
