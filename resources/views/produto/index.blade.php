@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
    <br/><br/>
    <h2>Lista de produtos</h2>

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

    <form action="/produto" method="POST">
        {{ csrf_field() }}
        Categoria: <select name="categoria_id">
                    @foreach($categorias as $cat)
                        <option value="{{$cat->id}}">{{$cat->nome}}</option>
                    @endforeach
                    </select>
        <br/>

        Nome: <input name="nome" type="text" />
        <br/>
        Descricao: <input name="descricao" type="text" />
        <br/>
        Modelo: <input name="modelo" type="text" />
        <br/>
        Preco: <input name="preco" type="text" />
        <br/>
        Qtde estoque: <input name="qtde_estoque" type="text" />
        <br/>
        <button>Enviar</button>
    </form>



@endsection
