<?php

/*

Class produtos.

*/

class produtosController{
    
    // Para listar apênas 5 produtos na home.
    public function ListarHome(){
        
        $produtosClass = new Produto();
        return $produtosClass::SelectHome();
        
    }
    
    // Para listar na página de produtos.
    public function Listar(){
        
        $produtoClass = new Produto();
        return $produtoClass::Select();
        
    }
    
}

?>