<?php 
    namespace estoque\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use Request;
    use estoque\Produto;
    
class ProdutosController extends Controller {

public function index(){return view('index');}

public function add(){
   return view('produto.adicionar');
}

public function criar(){
   //Método irá: pegar os dados do form, salvar no DB.
   //Retornar em alguma view; 
   $nome = Request::input('nomeProduto');
   $descricao = Request::input('descricaoProduto');
   $valor = Request::input('valorProduto');
   $qtde = Request::input('estoqueProduto');
   
   
   DB::table('produtos')->insert([
       'nome'=>$nome,
       'valor'=>$valor,
       'descricao'=>$descricao,
       'quantidade' =>$qtde]);
       
    return redirect()
           ->action('ProdutosController@lista')
           ->withInput(Request::only('nome'));
    
}

public function lista(){
       $produtos = Produto::all();
       return view('produto.listagem')->with('produtos', $produtos);
}
    public function mostra(){
        $id = Request::route ('id');
        $resposta = DB::select('select * from produtos where id = ?', [$id]);
        if(empty($resposta)){
            return("Este produto não existe");
        }
    return view('produto.detalhes')->with('p',$resposta[0]);
}

}