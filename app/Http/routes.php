<?php

Route::get('/','ProdutosController@index');


Route::get('/produtos', 'ProdutosController@lista');

Route::get('/produtos/mostra/{id}', 
          'ProdutosController@mostra')
          ->where('id','[0-9]+');

Route::get('produtos/adicionar','ProdutosController@add');
Route::post('produtos/criar','ProdutosController@criar');


Route::get('/produtos/remover/{id}', 
          'ProdutosController@remover')
          ->where('id','[0-9]+');

Route::get('/produtos/atualizar/{id}', 
          'ProdutosController@atualizar')
          ->where('id','[0-9]+');

Route::get('produtos/atualizar/atz/{id}',
           'ProdutosController@alterar')
          ->where('id','[0-9]+');

Route::get('/home', 'HomeController@index');

Route::controllers([
'auth' => 'Auth\AuthController',
'password' => 'Auth\PasswordController',
]);