<?php 
    namespace estoque\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use Request;
    use estoque\Produto;
    use estoque\Http\Requests\ProdutosRequest;

class ProdutosController extends Controller {

public function index(){return view('index');}

public function add(){
   return view('produto.adicionar');
}

public function  remover($id){
    $produto = Produto::find($id);
    $produto->delete();
    return redirect()->action('ProdutosController@lista');
}

public function alterar($id){
    $produto = Produto::find($id);
    $produto->nome = Request::input('nomeProduto');
    $produto->valor = Request::input('valorProduto');
    $produto->descricao = Request::input('descricaoProduto');
    $produto->quantidade = Request::input('estoqueProduto');
    $produto->save();
    
    // var_dump($produto->toJson()); // <---- or toJson()
    return redirect()->action('ProdutosController@lista');

}

public function criar(){
    
     $produto = new Produto();
     $produto->nome = Request::input('nomeProduto');
     $produto->valor = Request::input('valorProduto');
     $produto->descricao = Request::input('descricaoProduto');
     $produto->quantidade = Request::input('estoqueProduto');
     $produto->save();
    
     return redirect()
           ->action('ProdutosController@lista')
           ->withInput(Request::only('nome'));
}

public function lista(){
       $produtos = Produto::all();
       return view('produto.listagem')->with('produtos', $produtos);
}

public function atualizar($id){
      $produto = Produto::find($id);
      return view('produto.atualizar')
                                    ->with('p',$produto);
//Depois de preencher os novos valores, devemos dar update no id que foi feito a alteração
//Redirecionar para a página de produtos, chamando a lista
}
public function mostra($id){
      $produto = Produto::find($id);
      if(empty($produto)){
          return "Este produto não existe";
      }
    return view('produto.detalhes')->with('p',$produto);
}

}