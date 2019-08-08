<!-- Botão para fechar a modal. -->
<div id="fechar">Fechar</div>

<!-- Área das inputs. -->
<div id="area_inputs">
    <form name="login" method="post" action="../../router.php?controller=cliente&modo=login">
        <div class="classe_inputs">
            <input id="txtEmail" class="input_modal_login" type="email" name="txtEmail" maxlength="50" placeholder="E-mail" value="" required>
        </div>

        <div class="classe_inputs">
            <input id="txtPassword" class="input_modal_login" type="password" name="txtSenha" maxlength="20" placeholder="Senha" value="" required>
        </div>

        <div class="classe_inputs">
            <input id="btnlogin" class="input_modal_login" type="submit" name="btnLogin" value="Login">
        </div>
    </form>
</div>

<!-- Área dos links. Onde contem os links que mandam para a página de cadastro e a página para o CMS. -->

<div id="area_links">
    <div class="classe_links azul">
        <a href="../cadastrar/">Cadastre-se</a>
    </div>
    
    <div class="classe_links">
        <a href="">Esqueci minha senha</a>
    </div>
    
    <div class="classe_links">
        <a href="../../cms/">Acessar o CMS</a>
    </div>
</div>