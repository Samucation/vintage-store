@extends('layout.site')

@section('titulo', 'Categorias')

@section('conteudo')
    <br/>
    <br/>
    <h2>Lista de categorias</h2>

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

    <form action="/categoria" method="POST">
        {{ csrf_field() }}
        Nome: <input name="nome" type="text" />
        Descricao: <input name="descricao" type="text" />
        <button>Enviar</button>
    </form>

@endsection
