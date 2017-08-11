@extends('layout.principal')

@section('content')
    <h1> Detalhes dos produtos </h1>  
        <ul>
            <li><b>ID Produto:</b>{{$p->id}}</li>
            <li><b>Nome:</b>{{$p->nome}}</li>
            <li><b>Valor:</b> R$ {{$p->valor}}</li>
            <li><b>Descrição:</b>{{$p->descricao}}</li>
            <li><b>Quantidade em estoque:</b> {{$p->quantidade}}</li>
        </ul>

        <br /> 
        <form action="{{action('ProdutosController@alterar',$p->id)}}" class="ls-form row">
  <fieldset>
    <label class="ls-label col-md-3">
      <b class="ls-label-text">Nome do Produto</b>
      <p class="ls-label-info">Atualize o nome do Produto</p>
      <input type="text" value="{{$p->nome}}"name="nomeProduto" required >
    </label>
    <label class="ls-label col-md-3">
      <b class="ls-label-text">Novo Valor</b>
      <p class="ls-label-info">Atualize o valor do produto</p>
      <input type="text" value="{{$p->valor}}"name="valorProduto" required >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Descrição</b>
      <p class="ls-label-info">Descreva seu produto</p>
      <input type="text" value = "{{$p->descricao}}" name="descricaoProduto" placeholder="Escreva seu email" required >
    </label>
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Quantidade em estoque</b>
      <input type="number" value="{{$p->quantidade}}"name="quantidadeEstoque" required >
    </label>
  </fieldset>
  <input type="submit" value="Atualizar" class="ls-btn-primary"/>
 </form>
    
@stop

    
