<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

$idProduto = $_POST['txtIdProduto'];
$descricao = $_POST['txtDescricao'];
$preco = $_POST['txtPreco'];
$imagem = $_POST['txtImagem'];
//echo $idProdutoClicado;

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title> Vizualizar produto </title>
        <link rel="stylesheet" type="text/css" href="../../css/geral.css">
        <link rel="stylesheet" type="text/css" href="../../css/index.css">
        <link rel="stylesheet" type="text/css" href="../../css/verProduto.css">
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
        
<!--    MODAL DE LOGIN    -->
        
        <div id="modalContainerComprar">
            <div id="modalComprar">
                
                <?php
                
                require_once("../../views/modo/modalComprar.php");
                
                ?>
                
            </div>
        </div>
        
<!--    CABEÇALHO    -->
        
        <?php require_once("../modo/menu.php"); ?>
        
<!--    PRINCIPAL    -->
        
        <div id="main">
            <div class="segura_conteudo_no_meio">
                
<!--            Divide em duas colunas.    -->
<!--            Coluna da esquerda.    -->
                <div class="colunas">
                    <div id="segura_imagem">
                        <img src="../../<?=$imagem;?>">
                    </div>
                </div>
<!--            Coluna da direita.    -->
                <div class="colunas">
                    <div id="segura_info">
<!--                    Mostra a descrição do produto.    -->
                        <div class="mostraInfo">
                            <?=$descricao;?>
                        </div>
                        
<!--                    Mostra o preço do produto.    -->
                        <div class="mostraInfo">
                            R$<?=$preco;?>
                        </div>
                        
<!--                    Botão de comprar.    -->
                        <div id="seguraBotao">
                            <?php
                            
                            if(isset($_SESSION['idCliente'])){
                                
                            ?>
                            <input onclick="comprar();" id="btnComprar" type="submit" name="btnComprar" value="Comprar">
                            <?php
                                
                            }else{
                                
                            ?>
                            <input onclick="naoLogado();" id="btnComprar" type="submit" name="btnComprar" value="Comprar">
                            <?php
                                
                            }
                            
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
<!--    RODAPÉ    -->
        
        <?php require_once("../modo/rodape.php"); ?>
        
        <script type="text/javascript" src="../../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery2.js"></script>
        <script type="text/javascript" src="../../js/modal_login.js"></script>
        <script type="text/javascript" src="../../js/botaoComprar.js"></script>
        
        <?php require_once('../../js/logica_login_cliente.php'); ?>
        
    </body>
</html>