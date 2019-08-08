<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

$controller = $_GET['controller'];
$modo = $_GET['modo'];

switch($controller){
        
    case 'funcionario':
        
        switch($modo){
                
            case 'login':
                
//                echo $_POST['txtCpf'].' - '.$_POST['txtSenha'];
                
                $_SESSION['nomeFun'] = "Gabriel";
                header('location:../cms/');
                
                break;
                
        }
        
        break;
        
}

?>