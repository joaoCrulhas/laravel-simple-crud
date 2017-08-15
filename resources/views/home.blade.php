@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Você está logado 
                    <strong> Acessua sua aplicação <a href = "{{ action('ProdutosController@index') }}"> Clicando Aqui </a> </strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
