@extends('layout.principal')

@section('content')

    
    @if(empty($produtos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
    @else
    
    <h1> Listagem de Produtos </h1>
    <table class = "ls-table ls-table-striped">
        @foreach ($produtos as $p)
        <tr >
            <td>{{$p->nome}} </td>
            <td>{{$p->valor}} </td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td><a href = "/produtos/mostra/{{$p->id}}"> Visualizar </a></td>
        </tr>
        @endforeach
    @endif
    </table>
     <a href="{{action('ProdutosController@index')}}"> Voltar ao início </a>


@stop