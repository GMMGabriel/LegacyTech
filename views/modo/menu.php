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
                            
                            <li>
                                <a href="../produtos/">
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
                                        <a href="../sobre_a_empresa/historia.php">
                                            <div class="div_lista_menu">
                                                História
                                                <div class="movimento_efeito"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="../sobre_a_empresa/mvv.php">
                                            <div class="div_lista_menu">
                                                MVV
                                                <div class="movimento_efeito"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="../sobre_a_empresa/localizacao.php">
                                            <div class="div_lista_menu">
                                                Localização
                                                <div class="movimento_efeito"></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            
                            <li>
                                <a href="../fale_conosco/">
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