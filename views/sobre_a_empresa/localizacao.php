<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <title> LegacyTech | Sobre a empresa - Localização </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../css/geral.css">
        <link rel="stylesheet" type="text/css" href="../../css/index.css">
        <link rel="stylesheet" type="text/css" href="../../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../../css/modal_login.css">
        
        <?php require_once("../modo/icone_logo.php"); ?>
        
    </head>
    <body>
        
<!--    MODAL DE LOGIN    -->
        
        <div id="modalcontainer">
            <div id="modal">
                <?php
                
                $actionFormLogin = "../../router.php";
                
                require_once("../../views/modo/login2.php");
                
                ?>
            </div>
        </div>
        
<!--    CABEÇALHO    -->
        
        <?php require_once("../modo/menu.php"); ?>
        
<!--    PRINCIPAL    -->
        
        <div id="main">
            <div class="segura_conteudo_no_meio">
                <p style="text-align:center; font-weight:bold;">
                    Rua João Longo, nº 192, Jardim Rosa Emilia, Sagrado Coração, Jandira / SP - 06608-420
                </p>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0390493740406!2d-46.92114218455593!3d-23.531097884697875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf041e28da1393%3A0x1ffc7eda270580b0!2sR.+Jo%C3%A3o+Longo%2C+192+-+Jardim+Rosa+Emilia%2C+Jandira+-+SP%2C+06608-420!5e0!3m2!1spt-BR!2sbr!4v1544820336759" width="1170" height="680" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        
<!--    RODAPÉ    -->
        
        <?php require_once("../modo/rodape.php"); ?>
        
        <script type="text/javascript" src="../../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery2.js"></script>
        <script type="text/javascript" src="../../js/modal_login.js"></script>
        
        <?php require_once('../../js/logica_login_cliente.php'); ?>
        
    </body>
</html>