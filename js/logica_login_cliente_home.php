        <?php
        
        if(isset($_SESSION['idCliente'])){
            
        ?>
        <script>
            // variáveis.
            var divElement = document.querySelector('.botao_imagem_login'), // div que segura tudo.
                imgElement = document.createElement('img'), // imagem de usuário para quando o cliente fazer o login.
                textoDivNome = document.querySelector('.mostra_nome_cliente b'), // tag onde fica o texto que mostra o nome do cliente logado.
                btnSairElement = document.querySelector('#btnLogout'), // botão de sair para fazer o logout.
                btnEditarPerfilElement = document.querySelector('#btnEditarPerfil'), // botão de editar o perfil
                ativo = false; // variável boolean para saber se a div que mostra as opções para o cliente está ativa ou não.
            
            // Set novos atributos na tag "img".
            imgElement.setAttribute('src', 'imagens/img_user.png');
            imgElement.setAttribute('alt', 'Imagem que representa um usúario: <?=$_SESSION['nome'];?>');
            
            // Adiciona a imagem de usuário, assim ele vai aparecer.
            divElement.appendChild(imgElement);
            
            // Torna a div que mostra o nome do cliente visível.
            function mostraNome(){
                $('.mostra_nome_cliente').css({'display':'block'});
            }
            
            mostraNome();
            
            // Ao clicar na imagem de usuáio, aparece a div que contem as opções de ações do cliente.
            function menuOpcoesCliente(){
                // Se a variável estiver com valor "true" significa que a div está a mostra, então ela deve ser escondida.
                if(ativo){
                    // Esconde a div.
                    $('.opcoes_cliente').css({'display':'none'});
                    // Muda o valor boolean.
                    ativo = false;
                // Se a variável estiver com valor "false" significa que a div está escondida, então ela deve ser mostrada.
                }else{
                    // Mostra a div.
                    $('.opcoes_cliente').css({'display':'block'});
                    // Muda o valor boolean.
                    ativo = true;
                }
            };
            
            // Ao clicar na imagem de usuáio, aparece a div que contem as opções de ações do cliente.
            imgElement.onclick = menuOpcoesCliente;
            textoDivNome.onclick = menuOpcoesCliente;
            
            // Botão de "editar perfil".
            btnEditarPerfilElement.onclick = function(){
                window.location.href = "views/cadastrar/index.php?update=1";
            }
            
            // Botão de "sair".
            btnSairElement.onclick = function(){
                window.location.href = "router.php?controller=cliente&modo=logout";
            }
        </script>
        <?php
            
        }else{
            
        ?>
        <script>
            var divElement = document.querySelector('.botao_imagem_login'), // Div que segura tudo.
                btnLoginElement = document.createElement('div'), // Botão de fazer o login.
                divNome = document.querySelector('.mostra_nome_cliente'); // div que mostra o nome do cliente logado.
            
            // Remove a div que mostra o nome do cliente logado... quando não houver alguém logado.
            divElement.removeChild(divNome);
            
            // Set novos atributos para o botão de login.
            btnLoginElement.setAttribute('id', 'botao_login');
            // Cria o texto para ficar dentro do botão de login.
            var textLoginElement = document.createTextNode('Login');
            
            // Adiciona o texto dentro do botão.
            btnLoginElement.appendChild(textLoginElement);
            
            // Adiciona o botão de login na div.
            divElement.appendChild(btnLoginElement);
        </script>
        <?php
            
        }
        
        ?>