<?php

class Cliente{
    
    public $idCliente;
    public $nome;
    public $sobrenome;
    public $cpf;
    public $dataNasc;
    public $sexo;
    public $email;
    public $senha;
    public $numero;
    public $cep;
    public $logadouro;
    public $bairro;
    public $cidade;
    public $estado;
    public $qtdCompras;
    
    public function __construct(){
        require_once('db_class.php');
    }
    
    // Para cadastrar um novo cliente.
    public function Insert($clienteClass){
        
        $sql1 = "SELECT cpf FROM tbl_cliente WHERE cpf = '".$clienteClass->cpf."' LIMIT 1;";
        
        $conex = new Mysql_db;
        
        $PDO_conex = $conex->Conectar();
        
        $select1 = $PDO_conex->query($sql1);
            
        $rs1 = $select1->fetch(PDO::FETCH_ASSOC);
        
        $verificaCpf = $rs1['cpf'];
        
        if($verificaCpf == null){
            
            $sql2 = "SELECT email FROM tbl_cliente WHERE email = '".$clienteClass->email."' LIMIT 1;";
            
            $select2 = $PDO_conex->query($sql2);
            
            $rs2 = $select2->fetch(PDO::FETCH_ASSOC);
            
            $verificaEmail = $rs2['email'];
            
            if($verificaEmail == null){
                
                $sql = "INSERT INTO tbl_cliente(nome, sobrenome, cpf, dataNasc, sexo, email, senha, numero, cep, logadouro, bairro, cidade, estado, qtdCompras)
                VALUES(
                '".$clienteClass->nome."',
                '".$clienteClass->sobrenome."',
                '".$clienteClass->cpf."',
                '".$clienteClass->dataNasc."',
                '".$clienteClass->sexo."',
                '".$clienteClass->email."',
                '".$clienteClass->senha."',
                '".$clienteClass->numero."',
                '".$clienteClass->cep."',
                '".$clienteClass->logadouro."',
                '".$clienteClass->bairro."',
                '".$clienteClass->cidade."',
                '".$clienteClass->estado."',
                0);";

                if($PDO_conex->query($sql)){
                    
                    if($clienteClass->sexo == "M"){
                        echo("<script>
                            alert('Cadastro realizado, bem vindo ao time ".$clienteClass->nome.".');
                            window.location.href = 'views/../';
                        </script>");
                    }else{
                        echo("<script>
                            alert('Cadastro realizado, bem vinda ao time ".$clienteClass->nome.".');
                            window.location.href = 'views/../';
                        </script>");
                    }

                }else{

                    echo("<script>
                        alert('Erro ao tentar se cadastrar.');
                        history.go(-1);
                    </script>");

                }
                
            }else{
                echo("<script>
                    alert('Este e-mail já existe.');
                    history.go(-1);
                </script>");
            }
            
        }else{
            echo("<script>
                alert('Este CPF já existe.');
                history.go(-1);
            </script>");
        }
        
        $conex->Desconectar();
        
    }
    
    // Para atualizar os dados do cliente.
    public function Update($clienteClass){
        
        $sql = "UPDATE tbl_cliente SET 
        nome = '".$clienteClass->nome."',
        sobrenome = '".$clienteClass->sobrenome."',
        cpf = '".$clienteClass->cpf."',
        dataNasc = '".$clienteClass->dataNasc."',
        sexo = '".$clienteClass->sexo."',
        email = '".$clienteClass->email."',
        senha = '".$clienteClass->senha."',
        numero = '".$clienteClass->numero."',
        cep = '".$clienteClass->cep."',
        logadouro = '".$clienteClass->logadouro."',
        bairro = '".$clienteClass->bairro."',
        cidade = '".$clienteClass->cidade."',
        estado = '".$clienteClass->estado."'
        WHERE idCliente = ".$clienteClass->idCliente.";
        ";
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        if($PDO_conex->query($sql)){
            
            $_SESSION['nome'] = $clienteClass->nome;
            $_SESSION['sobrenome'] = $clienteClass->sobrenome;
            $_SESSION['cpf'] = $clienteClass->cpf;
            $_SESSION['dataNasc'] = $clienteClass->dataNasc;
            $_SESSION['sexo'] = $clienteClass->sexo;
            $_SESSION['email'] = $clienteClass->email;
            $_SESSION['senha'] = $clienteClass->senha;
            $_SESSION['numero'] = $clienteClass->numero;
            $_SESSION['cep'] = $clienteClass->cep;
            $_SESSION['logadouro'] = $clienteClass->logadouro;
            $_SESSION['bairro'] = $clienteClass->bairro;
            $_SESSION['cidade'] = $clienteClass->cidade;
            $_SESSION['estado'] = $clienteClass->estado;
            
            echo("<script>
                alert('Atualização de dados feita com sucesso.');
                window.location.href = 'views/../';
            </script>");
            
        }else{
            
            echo("<script>
                alert('Erro ao tentar atualizar os dados.');
                window.location.href = 'views/../';
            </script>");
            
        }
        
    }
    
    // Para realizar o login do cliente.
    public function SelectLogin($clienteClass){
        
        $sql = "SELECT * FROM tbl_cliente WHERE email = '".$clienteClass->email."' AND senha = '".$clienteClass->senha."' LIMIT 1;";
        
        $conex = new Mysql_db;
        
        $PDO_conex = $conex->Conectar();
        
        $select = $PDO_conex->query($sql);
            
        $cont = 0;

        while($rs = $select->fetch(PDO::FETCH_ASSOC)){

            $listCliente[] = new Cliente();
            
            $listCliente[$cont]->idCliente = $rs['idCliente'];
            $listCliente[$cont]->nome = $rs['nome'];
            $listCliente[$cont]->sobrenome = $rs['sobrenome'];
            $listCliente[$cont]->cpf = $rs['cpf'];
            $listCliente[$cont]->dataNasc = $rs['dataNasc'];
            $listCliente[$cont]->sexo = $rs['sexo'];
            $listCliente[$cont]->email = $rs['email'];
            $listCliente[$cont]->senha = $rs['senha'];
            $listCliente[$cont]->numero = $rs['numero'];
            $listCliente[$cont]->cep = $rs['cep'];
            $listCliente[$cont]->logadouro = $rs['logadouro'];
            $listCliente[$cont]->bairro = $rs['bairro'];
            $listCliente[$cont]->cidade = $rs['cidade'];
            $listCliente[$cont]->estado = $rs['estado'];
            $listCliente[$cont]->qtdCompras = $rs['qtdCompras'];

            $cont+=1;

        }
        
        $conex->Desconectar();
        
        if(isset($listCliente)){
            $_SESSION['idCliente'] = $listCliente[0]->idCliente;
            $_SESSION['nome'] = $listCliente[0]->nome;
            $_SESSION['sobrenome'] = $listCliente[0]->sobrenome;
            $_SESSION['cpf'] = $listCliente[0]->cpf;
            $_SESSION['dataNasc'] = $listCliente[0]->dataNasc;
            $_SESSION['sexo'] = $listCliente[0]->sexo;
            $_SESSION['email'] = $listCliente[0]->email;
            $_SESSION['senha'] = $listCliente[0]->senha;
            $_SESSION['numero'] = $listCliente[0]->numero;
            $_SESSION['cep'] = $listCliente[0]->cep;
            $_SESSION['logadouro'] = $listCliente[0]->logadouro;
            $_SESSION['bairro'] = $listCliente[0]->bairro;
            $_SESSION['cidade'] = $listCliente[0]->cidade;
            $_SESSION['estado'] = $listCliente[0]->estado;
            $_SESSION['qtdCompras'] = $listCliente[0]->qtdCompras;

            if($_SESSION['sexo'] == 'M'){

                echo("<script>
                    alert('Bem vindo senhor ".$listCliente[0]->nome.".');
                    // window.location.href = 'views/../';
                    history.go(-1);
                </script>");

            }else{

                echo("<script>
                    alert('Bem vinda senhorita ".$listCliente[0]->nome.".');
                    // window.location.href = 'views/../';
                    history.go(-1);
                </script>");

            }
            
        }else{
            
            echo("<script>
                alert('E-mail ou senha incorreta.');
                history.go(-1);
            </script>");
            
        }
        
    }
    
}

?>