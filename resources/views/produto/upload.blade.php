@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
    <h2>Upload de arquivos</h2>

    <form action="/produto/upload" method="post" enctype="multipart/form-data" accept=".csv">
        {{ csrf_field() }}
        <input type="file" name="csv" />
        <button>Enviar</button>
    </form>

@endsection
