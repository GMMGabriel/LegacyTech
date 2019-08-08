<!DOCTYPE html>
<html lang="pt">
    <head>
        <title> LegacyTech - CMS - Login </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/geral.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <div id="container_segura">
<!--        IImagem do letreiro do logo. Nome da empresa.    -->
            <img src="../logo/letreiro.png" alt="Letreiro do logo" title="LegacyTech">
            <div id="info_login">
                Login
            </div>
<!--        Onde os campos vão ficar.    -->
            <form name="loginFun" method="post" action="router.php?controller=funcionario&modo=login">
<!--            CPF    -->
                <div class="linhas_inputs">
                    <input type="text" name="txtCpf" value="" placeholder="CPF" required>
                </div>
<!--            Senha    -->
                <div class="linhas_inputs">
                    <input type="text" name="txtSenha" value="" placeholder="Senha" required>
                </div>
<!--            Botão login    -->
                <div class="linhas_inputs">
                    <input type="submit" name="btnLogin" value="Login">
                </div>
            </form>
<!--        "sns" = "solicitar nova senha".    -->
            <div id="container_sns">
                Solicitar nova senha
            </div>
        </div>
    </body>
</html>