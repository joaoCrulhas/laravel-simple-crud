
<?php
Route::get('/','ProdutosController@index');


Route::get('/produtos', 'ProdutosController@lista');

Route::get('/produtos/mostra/{id}', 
          'ProdutosController@mostra')
          ->where('id','[0-9]+');

Route::get('produtos/adicionar','ProdutosController@add');
Route::post('produtos/criar','ProdutosController@criar');
