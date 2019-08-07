<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

$controller = $_GET['controller'];
$modo = $_GET['modo'];

switch($controller){
        
    case 'funcionario':
        
        
        
        break;
        
}

?>