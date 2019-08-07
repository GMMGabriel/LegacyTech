<?php

class faleConoscoClass{
    
    public $idFaleConosco;
    public $nome;
    public $sobrenome;
    public $email;
    public $assunto;
    public $mensagem;
    
    public function __construct(){
        require_once("db_class.php");
    }
    
    public function Insert($faleConosco){
        
        $sql = "INSERT INTO tbl_fale_conosco(nome, sobrenome, email, assunto, mensagem) 
        VALUES(
        '".$faleConosco->nome."',
        '".$faleConosco->sobrenome."',
        '".$faleConosco->email."',
        '".$faleConosco->assunto."',
        '".$faleConosco->mensagem."'
        );";
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        if($PDO_conex->query($sql)){
            
            echo("<script>
                alert('Mensagem enviada.');
                window.location.href = 'views/fale_conosco/';
            </script>");
            
        }else{
            
            echo("<script>
                alert('Erro ao enviar a mensagem.');
                history.go(-1);
            </script>");
            
        }
        
        $conex->Desconectar();
        
    }
    
}

?>