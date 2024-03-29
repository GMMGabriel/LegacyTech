<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <title> LegacyTech | Produtos </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../css/geral.css">
        <link rel="stylesheet" type="text/css" href="../../css/index.css">
        <link rel="stylesheet" type="text/css" href="../../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../../css/logica_produtos.css">
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
            
<!--        Mostra o gif de carregando na tela. Antes de mostrar o conteúdo verdadeiro.    -->
            <div class="mostrar_gif_carregando">
                <img src="../../gif/loading.gif" alt="carregando a página" title="Carregando">
            </div>
            
            <div class="segura_conteudo_no_meio" style="display:none;">
            
<!--            Divs que mostram os produtos.    -->
                
                <?php
                
                require_once("../../controllers/produtos_controller.php");
                require_once("../../models/produtos_class.php");
                
                $produtoController = new produtosController();
                $listProdutos = $produtoController::Listar();
                
                $cont = 0;
                
                while($cont < count($listProdutos)){
                    
                $name_form = "produto".$cont;

                ?>

                <form name="<?=$name_form;?>" method="post" action="../../views/ver_produto/">
                    <div class="container_produtos" onclick="verProduto('<?=$name_form;?>');">
                        <input type="hidden" name="txtIdProduto" value="<?=$listProdutos[$cont]->idProduto;?>">
                        <input type="hidden" name="txtDescricao" value="<?=$listProdutos[$cont]->descricao;?>">
                        <input type="hidden" name="txtPreco" value="<?=$listProdutos[$cont]->preco;?>">
                        <input type="hidden" name="txtImagem" value="<?=$listProdutos[$cont]->imagem;?>">
                        <div class="imagem_produtos">
                            <img src="../../<?=$listProdutos[$cont]->imagem;?>" alt="<?=$listProdutos[$cont]->descricao;?>" title="<?=$listProdutos[$cont]->descricao;?>">
                        </div>

                        <div class="info_produtos">
                            <div class="info_produtos_descricao">
                                <div class="info_produtos_descricao_reforco">
                                    <?=$listProdutos[$cont]->descricao;?>
                                </div>
                            </div>

                            <div class="info_produtos_valor">
                                R$<?=$listProdutos[$cont]->preco;?>
                            </div>
                        </div>
                    </div>
                </form>
                
                <?php
                    
                    $cont++;
                    
                }
                
                ?>
                
            </div>
        </div>
        
<!--    RODAPÉ    -->
        
        <?php require_once("../modo/rodape.php"); ?>
        
        <script type="text/javascript" src="../../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery2.js"></script>
        <script type="text/javascript" src="../../js/modal_login.js"></script>
        
        <script>
            
            $(document).ready(function(){
                
                // sorteia um numero de 500 a 2000 para servir de mili segundos.
                var mili_segundos = Math.floor(Math.random() * (2000 - 500 + 1) + 500);
                
                console.log(mili_segundos);
                
                window.setTimeout(
                    
                    function(){
                        $(".mostrar_gif_carregando").css({'display':'none'});
                        $(".segura_conteudo_no_meio").css({'display':'block'});
                    }, mili_segundos);
                
            });
            
        </script>
    
        <script>

            function verProduto(name_form){

                document.forms[name_form].submit();

            }

        </script>
        
        <?php require_once('../../js/logica_login_cliente.php'); ?>
        
    </body>
</html>