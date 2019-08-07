<!--    CABEÇALHO    -->

        <header>
<!--        Segura o menu no meio.    -->
            <div id="segura_menu">
<!--            Local do logo.    -->
                <div id="segura_logo">
                    <a href="../../">
                        <img src="../../logo/logo.png" alt="Logo da empresa" title="Logo da empresa">
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
                    <?php require_once('../../js/logica_login_cliente.php'); ?>
                    
<!--                Menus.    -->
                    <nav id="lista_menu">
                        <ul>
                            <li>
                                <a href="../../">
                                    <div class="div_lista_menu">
                                        Home
                                        <div class="movimento_efeito"></div>
                                    </div>
                                </a>
                            </li>
                            
                            <a href="../produtos/">
                                <li>
                                    Produtos
                                    <div class="movimento_efeito"></div>
                                </li>
                            </a>
                            
                            <li id="sub_menu">
                                Sobre a empresa
                                <div class="movimento_efeito"></div>

                                <ul>
                                    <a href="../sobre_a_empresa/historia.php">
                                        <li>
                                            História
                                            <div class="movimento_efeito"></div>
                                        </li>
                                    </a>

                                    <a href="../sobre_a_empresa/mvv.php">
                                        <li>
                                            MVV
                                            <div class="movimento_efeito"></div>
                                        </li>
                                    </a>

                                    <a href="../sobre_a_empresa/localizacao.php">
                                        <li>
                                            Localização
                                            <div class="movimento_efeito"></div>
                                        </li>
                                    </a>
                                </ul>

                            </li>
                            
                            <a href="../fale_conosco/">
                                <li>
                                    Fale conosco
                                    <div class="movimento_efeito"></div>
                                </li>
                            </a>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>