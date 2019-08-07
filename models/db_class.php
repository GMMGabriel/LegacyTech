<?php

class Mysql_db{
    
    private $server;
    private $user;
    private $password;
    private $dataBaseName;
    
     // Metodo mágico ou construtor.
    public function __construct(){
//        $this->server = "mysql08-farm70.uni5.net";
//        $this->user = "ncasting";
//        $this->password = "cadastro2018";
//        $this->dataBaseName = "ncasting";
        
        $this->server = "localhost";
        $this->user = "root";
        $this->password = "bcd127";
        $this->dataBaseName = "db_legacytech";
    
    }
    
       // Conectar no banco.
    public function Conectar(){
        
        try{
            
            // Modo de conexão PDO: $conexao = new PDO(string, user, password).
            // "string": 'mysql:host=server;dbname=db'.
            // Vantagem: dentro de uma concepção de Orientação a Objeto e segurança contra o SQL inject.
            $conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->dataBaseName, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
            
            //
            return $conexao;
            
        }catch(PDOException $Error){
            
            echo("Erro ao conectar no banco de dados.<br>
                linha do erro: ".$Error->getLine()."<br>
                Mensagem do erro: ".$Error->getMessage()
                );
            
        }
        
    }
    
    // Desconectar do banco.
    public function Desconectar(){
        
        // Elimina a conexão com o BD.
        $conexao = null;
        
    }
    
}

?>