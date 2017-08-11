@extends('layout.principal')

@section('content')

@foreach($errors->all() as $error)
{{ $error }}
@endforeach

<h1> Adicionar produtos </h1>    
<form action="{{ action('ProdutosController@criar') }}" method="POST" class="ls-form row">
    <input type="hidden" name="_token" value ="{{{ csrf_token() }}}"/>

  <fieldset>
    <label class="ls-label col-md-3">
      <b class="ls-label-text">Nome</b>
      <p class="ls-label-info">Nome do Produto</p>
      <input type="text" name="nomeProduto" 
      placeholder="Nome do Produto" required >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Descrição</b>
      <p class="ls-label-info">Descreva o produto</p>
      <input type="text" name="descricaoProduto"
      placeholder="Descrição Produto" required >
      
    </label>
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Valor</b>
      <input type="text" name="valorProduto" 
      placeholder="Valor do produto" required >
    </label>
    
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Quantidade</b>
      <input type="number" name="estoqueProduto" 
      placeholder="Quantidade em estoque" required >
    </label>
  </fieldset>
  <input type="submit" class="ls-btn"/>
</form>
<a href="{{action('ProdutosController@index')}}"> Voltar ao início </a>
@stop

    
