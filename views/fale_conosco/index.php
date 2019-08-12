<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <title> LegacyTech | Fale conosco </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../css/geral.css">
        <link rel="stylesheet" type="text/css" href="../../css/index.css">
        <link rel="stylesheet" type="text/css" href="../../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../../css/modal_login.css">
        <link rel="stylesheet" type="text/css" href="../../css/fale_conosco.css">
        
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
                <div id="passar_info">
                    Aqui você pode mandar uma mensagem para nós. Sobre criticas, dicas, opniões, satisfações, experiência com nossos produtos, etc. Só pedimos que utilize um linguajar adequado. Obs: os campos com * são obrigatórios.
                </div>
                <form name="fale_conosco" method="post" action="../../router.php?controller=fale_conosco&modo=salvar">
<!--                Nome e Sobrenome.    -->
                    <div class="divisorias_horizontais">
                        <div class="divisorias_verticais">
                            <input class="input_fale_conosco" type="text" name="txtNome" placeholder="Nome *" maxlength="20" required>
                        </div>

                        <div class="divisorias_verticais">
                            <input class="input_fale_conosco" type="text" name="txtSobrenome" placeholder="Sobrenome *" maxlength="60" required>
                        </div>
                    </div>
                
<!--                E-mail e Assunto.    -->
                    <div class="divisorias_horizontais">
                        <div class="divisorias_verticais">
                            <input class="input_fale_conosco" type="email" name="txtEmail" placeholder="E-mail *" maxlength="50" required>
                        </div>

                        <div class="divisorias_verticais">
                            <input class="input_fale_conosco" type="text" name="txtAssunto" placeholder="Assunto" maxlength="60">
                        </div>
                    </div>
                
<!--                Mensagem.    -->
                    <div class="divisorias_horizontais">
                        <textarea id="textarea_fale_conosco" class="input_fale_conosco" name="txtMensagem" placeholder="Mensagem *" maxlength="800" required></textarea>
                    </div>

                    <div id="div_botao">
                        <input class="input_fale_conosco btns" type="reset" name="btnLimpar" value="Limpar">
                        
                        <input class="input_fale_conosco btns" type="submit" name="btnLimpar" value="Enviar">
                    </div>
                </form>
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