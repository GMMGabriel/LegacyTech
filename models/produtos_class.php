<?php

/*

Controller produtos.

*/

class Produto{
    
    // Atributos.
    public $idProduto;
    public $imagem;
    public $descricao;
    public $preco;
    public $qtdVendidos;
    
    public function __construct(){
        require_once("db_class.php");
    }
    
    // Faz o SELECT de apênas 5 produtos para ostrar na home.
    public function SelectHome(){
        
        $sql = "SELECT * FROM tbl_produtos ORDER BY RAND() LIMIT 5;";
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        $select = $PDO_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listProdutos[] = new Produto();
            
            $listProdutos[$cont]->idProduto = $rs['idProduto'];
            $listProdutos[$cont]->imagem = $rs['imagem'];
            $listProdutos[$cont]->descricao = $rs['descricao'];
            $listProdutos[$cont]->preco = $rs['preco'];
            $listProdutos[$cont]->qtdVendidos = $rs['qtdVendidos'];
            
            $cont++;
            
        }
        
        if(isset($listProdutos)){
            return $listProdutos;
        }else{
            return null;
        }
        
    }
    
    // Faz o SELECT de todos os produtos aleatoriamente para a página de produtos.
    public function Select(){
        
        $sql = "SELECT * FROM tbl_produtos ORDER BY RAND();";
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        $select = $PDO_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listProdutos[] = new Produto();
            
            $listProdutos[$cont]->idProduto = $rs['idProduto'];
            $listProdutos[$cont]->imagem = $rs['imagem'];
            $listProdutos[$cont]->descricao = $rs['descricao'];
            $listProdutos[$cont]->preco = $rs['preco'];
            $listProdutos[$cont]->qtdVendidos = $rs['qtdVendidos'];
            
            $cont++;
            
        }
        
        if(isset($listProdutos)){
            return $listProdutos;
        }else{
            return null;
        }
        
    }
    
}

?>