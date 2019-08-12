<!DOCTYPE html>
<html lang="pt">
    <head>
        <title> LegacyTech | Página inicial </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/geral.css">
        <link rel="stylesheet" type="text/css" href="css/modal_login.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/logica_produtos.css">
        <link rel="shortcut icon" type="image/x-icon" href="icones/icone_logo.png">
        
        <?php //$_SESSION['idCliente'];?>
        
    </head>
    <body>
        
<!--    MODAL DE LOGIN    -->
        
        <div id="modalcontainer">
            <div id="modal">
                <?php
                
                require_once("views/modo/login.php");
                
                ?>
            </div>
        </div>
        
<!--    CABEÇALHO    -->
        
        <header id="headerMenu">
<!--        Segura o menu no meio.    -->
            <div id="segura_menu">
<!--            Local do logo.    -->
                <div id="segura_logo">
                    <a href="views/../">
                        <img src="logo/logo.png" alt="Logo da empresa" title="Logo da empresa">
                    </a>
                </div>
                
<!--            Local dos menus.    -->
                <div id="segura_menus">
<!--                Botão para o login e imagem de usuário.    -->
                    <div class="botao_imagem_login">
                        <div class="mostra_nome_cliente"><b><?=$_SESSION['nome']." ".$_SESSION['sobrenome'];?></b></div>
                        <div class="opcoes_cliente">
                            <div id="btnEditarPerfil" class="linhasOp">Editar perfil</div>
                            <div id="btnLogout" class="linhasOp">Logout</div>
                        </div>
                    </div>
                    
<!--                Menus.    -->
                    <nav id="lista_menu">
                        <ul>
                            <li>
                                <a href="views/../">
                                    <div class="div_lista_menu">
                                        Home
                                        <div class="movimento_efeito"></div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="views/produtos/">
                                    <div class="div_lista_menu">
                                        Produtos
                                        <div class="movimento_efeito"></div>
                                    </div>
                                </a>
                            </li>
                            
                            <li id="sub_menu">
                                <div class="div_lista_menu">
                                    Sobre a empresa
                                    <div class="movimento_efeito"></div>
                                </div>

                                <ul>
                                    <li>
                                        <a href="views/sobre_a_empresa/historia.php">
                                            <div class="div_lista_menu">
                                                História
                                                <div class="movimento_efeito"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="views/sobre_a_empresa/mvv.php">
                                            <div class="div_lista_menu">
                                                MVV
                                                <div class="movimento_efeito"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="views/sobre_a_empresa/localizacao.php">
                                            <div class="div_lista_menu">
                                                Localização
                                                <div class="movimento_efeito"></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            
                            <li>
                                <a href="views/fale_conosco/">
                                    <div class="div_lista_menu">
                                        Fale conosco
                                        <div class="movimento_efeito"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        
<!--    PRINCIPAL    -->
        
        <div id="main">
<!--        Segura a div de "Produtos".    -->
            <div id="area_produtos" class="areas_home">
                <div class="segura_conteudo_no_meio">
                    <h3><a href="views/produtos/produtos.php">Nossos produtos</a></h3>
                    
<!--                Divs que mostram os produtos.    -->
                    
                    <?php
                    
                    require_once("controllers/produtos_controller.php");
                    require_once("models/produtos_class.php");
                    
                    $produtosController = new produtosController();
                    $listProdutos = $produtosController::ListarHome();
                    
                    $cont = 0;
                    
                    while($cont < count($listProdutos)){
                        
                        $name_form = "produto".$cont;
                    
                    ?>
                    
                    <form name="<?=$name_form;?>" method="post" action="views/ver_produto/">
                        <div class="container_produtos" onclick="verProduto('<?=$name_form;?>');">
                            <input type="hidden" name="txtIdProduto" value="<?=$listProdutos[$cont]->idProduto;?>">
                            <input type="hidden" name="txtDescricao" value="<?=$listProdutos[$cont]->descricao;?>">
                            <input type="hidden" name="txtPreco" value="<?=$listProdutos[$cont]->preco;?>">
                            <input type="hidden" name="txtImagem" value="<?=$listProdutos[$cont]->imagem;?>">
                            <div class="imagem_produtos">
                                <img src="<?=$listProdutos[$cont]->imagem;?>" alt="<?=$listProdutos[$cont]->descricao;?>" title="<?=$listProdutos[$cont]->descricao;?>">
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
            
<!--        Segura a div de "Sobre a empresa".    -->
            <div id="conheca_nossa_empresa" class="cor_dif">
                <div class="segura_conteudo_no_meio">
                    <h3>Conheça nossa empresa</h3>
                    
                    <p>
                        Está curioso sobre a história da nossa empresa? Quer saber como ela nasceu? Curiosidades? Etc...? Então venha conferir:
                    </p>
                    
                    <p>
                        <a href="views/sobre_a_empresa/historia.php">História</a>
                    </p>
                    
                    <p>
                        <a href="views/sobre_a_empresa/mvv.php">Missão, visão e valores</a>
                    </p>
                    
                    <p>
                        <a href="views/sobre_a_empresa/localizacao.php">Localização</a>
                    </p>
                </div>
            </div>
            
<!--        Segura a div de "Fale conosco".    -->
            <div id="area_fale_conosco" class="areas_home">
                <div class="segura_conteudo_no_meio">
                    <h3><a href="views/fale_conosco/fale_conosco.php">Fale conosco</a></h3>
                    
                    <p>
                        Você tem algo que queira nos dizer? Alguma sugestão, objeção, crítica, etc...? Então mande isso para nós, ficaremos felizes em saber o que você tem a nos dizer.
                    </p>
                </div>
            </div>
        </div>
        
<!--    RODAPÉ    -->
        
        <footer>
<!--        Segura o "footer" no meio da tela.    -->
            <div id="segura_footer">
<!--            Mapa do site.    -->
                <div id="mapa_site">
                    <h1>Mapa do site</h1>
                    
                    <ul>
                        <li>
                            <a href="views/../">
                                Home
                            </a>
                        </li>
                        
                        <li>
                            <a href="views/produtos/">
                                Produtos
                            </a>
                        </li>
                        
                        <li id="menuS_mapa">
                            Sobre a empresa
                            
                            <ul>
                                <li>
                                    <a href="views/sobre_a_empresa/historia.php">
                                        História
                                    </a>
                                </li>

                                <li>
                                    <a href="views/sobre_a_empresa/mvv.php">
                                        MVV
                                    </a>
                                </li>

                                <li>
                                    <a href="views/sobre_a_empresa/localizacao.php">
                                        Localização
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="views/fale_conosco/">
                                Fale conosco
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="divisor"></div>
                
<!--            Área de informações.    -->
                <div id="area_informacoes">
<!--                "INFORMAÇÕES" dados da empresa. Como endereço, telefone, e-mail, etc.    -->
                    <div id="dados_empresa">
                        <h1>Dados da empresa</h1>
                        
                        <p>
                            <img src="icones/location_16.png" alt="Ícone de Endereço" title="Ícone de Endereço"><b>Endereço:</b> Rua João Longo, nº 192, Jardim Rosa Emilia, Sagrado Coração, Jandira / SP - 06608-420
                        </p>
                        
                        <p>
                            <img src="icones/email_16.png" alt="Ícone de E-mail" title="Ícone de E-mail"><b>E-mail:</b> legacytech@gmail.com
                        </p>
                        
                        <p>
                            <img src="icones/phone_16.png" alt="Ícone de Telefone" title="Ícone de Telefone"><b>Telefone:</b> (11) 4619-2076
                        </p>
                        
                        <p>
                            <img src="icones/whats_16.png" alt="Ícone de WhatsApp" title="Ícone de WhatsApp"><b>WhatsApp:</b> (11) 97374-7568
                        </p>
                    </div>
                    
                    <div class="divisor"></div>
                    
                    <div id="segura_informacoes">
<!--                "INFORMAÇÕES" redes sociais.    -->
                        <div class="informacoes">
                            <h1>Redes sociais</h1>

                            <a href="https://www.facebook.com/legacytech/" target="_blank"><img src="icones/facebook_64.png" alt="Acesso ao facebook da empresa" title="facebook"></a>

                            <a href="https://www.instagram.com/legacytech/" target="_blank"><img src="icones/instagram_64.png" alt="Acesso ao instagram da empresa" title="Instagram"></a>

                            <a href="https://www.youtube.com/legacytech/" target="_blank"><img src="icones/youtube_64.png" alt="Acesso ao canal no YouTube da empresa" title="YouTube"></a>

                            <a href="https://www.twitter.com/legacytech/" target="_blank"><img src="icones/twitter_64.png" alt="Acesso ao Twitter da empresa" title="Twitter"></a>

                            <a href="https://www.snapchat.com/legacytech/" target="_blank"><img src="icones/snapchat_64.png" alt="Acesso ao Snapchat da empresa" title="Snapchat"></a>
                        </div>

    <!--                Div que faz uma linha dividindo os dois lados.    -->
                        <div id="divide_informacoes"></div>

    <!--                "INFORMAÇÕES" criador do site.    -->
                        <div class="informacoes">
                            <h1>Desenvolvedor</h1>

                            <p>Site desenvolvido por <a href="contato/Curriculo_Gabriel.pdf" target="_blank"><strong>Gabriel de Melo Marcondes</strong></a>.</p>
                            <p>E-mail: gabriel-santos1313@hotmail.com</p>
                            <P>Contato: (11) 97374-7568.</P>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery2.js"></script>
        <script type="text/javascript" src="js/modal_login.js"></script>
    
        <script>

            function verProduto(name_form){

                document.forms[name_form].submit();

            }

        </script>
        
        <?php require_once('js/logica_login_cliente_home.php'); ?>
        
    </body>
</html>