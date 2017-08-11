<?php
    namespace estoque\Http\Controllers;


    class HomeController extends Controller {
    public function __construct(){
        $this->middleware('auth');
        
    }
    
public function index(){
    return view('<h1> Teste </h1>');
    
}
}
