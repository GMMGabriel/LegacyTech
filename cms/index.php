<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

if(isset($_SESSION['nomeFun'])){
    require_once("views/home/home.php");
}else{
    require_once("views/login/index.php");
}

?>