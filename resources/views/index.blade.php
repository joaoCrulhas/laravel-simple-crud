@extends('layout.principal')

@section('content')

<h1> Estoque Larável</h1>
<br />

<a href="{{action('ProdutosController@lista')}}"> Acessar os produtos cadastrados</a><br/>
<a href="{{action('ProdutosController@add')}}"> Adicionar Produtos </a>

@stop
