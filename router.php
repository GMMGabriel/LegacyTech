<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

$controller = $_GET['controller'];
$modo = $_GET{'modo'};

switch($controller){
    
    // PARA A PÁGINA DE FALE CONOSCO.
    case 'fale_conosco':
        
        require_once('controllers/fale_conosco_controller.php');
        require_once('models/fale_conosco_class.php');
        
        switch($modo){
            
            // SALVA UMA NOVA MENSAGEM.
            case 'salvar':
                
                $fale_conosco = new faleConoscoController();
                $fale_conosco::Salvar();
                
                break;
                
        }
        
        break;
    
    // PARA AS AÇÕES DO CLIENTE.
    case 'cliente':
        
        require_once('controllers/cliente_controller.php');
        require_once('models/cliente_class.php');
        
        switch($modo){
            
            // Cadastra um novo cliente.
            case 'cadastrar':
                
                $clienteController = new clienteController();
                $clienteController::Cadastrar();
                
                break;
            
            // Atualiza os dados do cliente.
            case 'atualizar':
                
                $clienteController = new clienteController();
                $clienteController::Atualizar();
                
                break;
            
            // Realiza o login.
            case 'login':
                
                $clienteController = new clienteController();
                $clienteController::Login();
                
                break;
                
            // Realiza o logout.
            case 'logout':
                
//                unset($_SESSION['idCliente']);
//                unset($_SESSION['nome']);
//                unset($_SESSION['sobrenome']);
//                unset($_SESSION['cpf']);
//                unset($_SESSION['dataNasc']);
//                unset($_SESSION['sexo']);
//                unset($_SESSION['email']);
//                unset($_SESSION['senha']);
//                unset($_SESSION['numero']);
//                unset($_SESSION['cep']);
//                unset($_SESSION['logadouro']);
//                unset($_SESSION['bairro']);
//                unset($_SESSION['cidade']);
//                unset($_SESSION['estado']);
//                unset($_SESSION['qtdCompras']);
                
                if(session_destroy()){
                    echo("<script>
                        alert('Logout realizado.');
                        window.location.href = 'views/../';
                    </script>");
                }else{
                    echo("<script>
                        alert('Falha ao tentar fazer o logout.');
                        window.location.href = 'views/../';
                    </script>");
                }
                
                break;
            
        }
        
        break;
        
}

?>