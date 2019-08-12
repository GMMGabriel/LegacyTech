<?php

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

$conect = false;
$update = false;
$action = "cadastrar";
$infoPageTopo = "Cadastrar-se";
$infoPage = "Cadastre-se para conseguir realizar compras no nosso site. E atenção, <u>todos</u> os campos são <u>obrigatórios</u>.";

$botao = "Cadastrar";
$btnLimpar = "Limpar";

$idCliente = null;
$nome = null;
$sobrenome = null;
$email = null;
$cpf = null;
$dataNasc = null;
$sexo = null;
$telefone = null;
$senha = "Senha";
$confirmarSenha = "Confirmar senha";
$numero = null;
$cep = null;
$logradouro = null;
$bairro = null;
$cidade = null;
$estado = null;
$qtdCompras = null;

$requiredSenha = "required";

if(isset($_SESSION['idCliente'])){
    
    if(isset($_GET['update'])){
        $conect = true;
        $update = true;
        $action = "atualizar";
        $infoPageTopo = "Editar perfil";
        $infoPage = "Mude suas informações a vontade. E atenção, se você preencher o campo <u>senha</u>, a sua senha será atualizada, caso não preencha este campo, a sua senha continuará a mesma.";
        
        $botao = "Atualizar";
        $btnLimpar = "Restaurar";
        
        $idCliente = $_SESSION['idCliente'];
        $nome = $_SESSION['nome'];
        $sobrenome = $_SESSION['sobrenome'];
        $email = $_SESSION['email'];
        $cpf = $_SESSION['cpf'];
        $dataNasc = $_SESSION['dataNasc'];
        $sexo = $_SESSION['sexo'];
        $telefone = $_SESSION['telefone'];
        $senha = "Nova senha";
        $confirmarSenha = "Confirmar nova senha";
        $numero = $_SESSION['numero'];
        $cep = $_SESSION['cep'];
        $logradouro = $_SESSION['logradouro'];
        $bairro = $_SESSION['bairro'];
        $cidade = $_SESSION['cidade'];
        $estado = $_SESSION['estado'];
        $qtdCompras = $_SESSION['qtdCompras'];
        
        $requiredSenha = null;
    }else{
        $conect = false;
        $update = false;
    }
    
}

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <title> LegacyTech | <?=$infoPageTopo;?> </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../css/geral.css">
        <link rel="stylesheet" type="text/css" href="../../css/index.css">
        <link rel="stylesheet" type="text/css" href="../../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../../css/modal_login.css">
        <link rel="stylesheet" type="text/css" href="../../css/cadastrar_cliente.css">
        
        <?php require_once("../modo/icone_logo.php"); ?>
        
    </head>
    <body>
        
        <?php
        
        if($conect){
            if($update){
                echo("<script>
                        alert('deu certo!);
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('Desculpe, mas você já fez o login, portanto não pode ir para a página de cadastro.');
                        window.location.href = '../../';
                    </script>
                ");
            }
        }
        
        ?>
        
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
                <form name="cadastrar" method="post" action="../../router.php?controller=cliente&modo=<?=$action;?>">
<!--                PASSAR INFORMAÇÕES.    -->
                    <div id="passar_info">
                        <?=$infoPage;?>
                    </div>
<!--                FAIXAS PARA SEPARAR EM LINHAS.    -->
                    <div class="linhas" style="color: #757575;">
                        Pessoal
                    </div>
<!--                FAIXAS PARA SEPARAR EM LINHAS.    -->
                    <div class="linhas">
<!--                    COLUNAS EM DUPLA.    -->
                        <div class="colunas_trio">
<!--                        NOME.    -->
                            <input class="inpute_cadastrar trio" type="text" name="txtNome" placeholder="Nome" maxlength="20" required value="<?=$nome;?>">
                        </div>

                        <div class="colunas_trio">
<!--                        SOBRENOME.    -->
                            <input class="inpute_cadastrar trio" type="text" name="txtSobrenome" placeholder="Sobrenome" maxlength="60" required value="<?=$sobrenome;?>">
                        </div>

                        <div class="colunas_trio">
<!--                        E-MAIL.    -->
                            <input class="input_cadastrar trio" type="email" name="txtEmail" placeholder="E-mail" maxlength="60" required value="<?=$email;?>">
                        </div>
                    </div>
<!--                FAIXAS PARA SEPARAR EM LINHAS.    -->
                    <div class="linhas">
<!--                    COLUNAS EM TRIO.    -->
                        <div class="colunas_trio">
<!--                        CPF.    -->
                            <input class="input_cadastrar trio" type="text" name="txtCpf" placeholder="CPF ___.___.___-__" maxlength="14" onkeypress="mascaraCPF(this,event);" required value="<?=$cpf;?>">
                        </div>

                        <div class="colunas_trio">
<!--                        DATA DE NASCIMENTO.    -->
                            <input class="input_cadastrar trio" type="text" name="txtDataNasc" placeholder="Data de nasc. __/__/____" maxlength="10" onkeypress="mascaraData(this,event);" required value="<?=$dataNasc;?>">
                        </div>

                        <div class="colunas_trio com_palavra">
<!--                        SEXO.    -->
                            Sexo <input class="radios" type="radio" name="rdoSexo" value="M" required <?php if($sexo == "M"){ echo"checked"; }; ?>> Masculino <input class="radios" type="radio" name="rdoSexo" value="F" required <?php if($sexo == "F"){ echo"checked"; }; ?>> Feminino
                        </div>
                    </div>
<!--                FAIXAS PARA SEPARAR EM LINHAS.    -->
                    <div class="linhas">
<!--                    COLUNAS EM DUPLA.    -->
                        <div class="colunas_trio">
<!--                        TELEFONE.    -->
                            <input class="input_cadastrar trio" type="tel" name="txtTelefone" placeholder="Telefone" maxlength="14" onkeypress="mascaraTel(this, event);" required value="<?=$telefone;?>">
                        </div>
                        
                        <div class="colunas_trio">
<!--                        SENHA.    -->
                            <input class="input_cadastrar trio" type="password" name="txtSenha" placeholder="<?=$senha;?>" maxlength="20" title="Até 20 caractéres" <?=$requiredSenha;?>>
                        </div>
                        
                        <div class="colunas_trio">
<!--                        CONFIRMAR SENHA.    -->
                            <input class="input_cadastrar trio" type="password" name="txtConfirmarSenha" placeholder="<?=$confirmarSenha;?>" maxlength="20" title="Até 20 caractéres" <?=$requiredSenha;?>>
                        </div>
                    </div>
<!--                FAIXAS PARA SEPARAR EM LINHAS.    -->
                    <div class="linhas" style="color: #757575;">
                        Endereço
                    </div>
<!--                FAIXAS PARA SEPARAR EM LINHAS.    -->
                    <div class="linhas">
<!--                    COLUNAS EM TRIO.    -->
                        <div class="colunas_trio">
<!--                         CEP.   -->
                            <input class="input_cadastrar trio" type="text" name="txtCep" placeholder="CEP _____-___" maxlength="9" onkeypress="mascaraCEP(this,event);" required value="<?=$cep;?>">
                        </div>

                        <div class="colunas_trio">
<!--                         logradouro.   -->
                            <input class="input_cadastrar trio" type="text" name="txtlogradouro" placeholder="logradouro" maxlength="50" required value="<?=$logradouro;?>">
                        </div>

                        <div class="colunas_trio">
<!--                         BAIRRO.   -->
                            <input class="input_cadastrar trio" type="text" name="txtBairro" placeholder="Bairro" maxlength="50" required value="<?=$bairro;?>">
                        </div>
                    </div>
<!--                FAIXAS PARA SEPARAR EM LINHAS.    -->
                    <div class="linhas">
<!--                    COLUNAS EM DUPLA    -->
                        <div class="colunas_trio">
<!--                        NÚMERO.    -->
                            <input class="input_cadastrar trio" type="text" name="txtNumero" placeholder="Número" maxlength="9" required value="<?=$numero;?>">
                        </div>
                        
                        <div class="colunas_trio">
<!--                        CIDADE.    -->
                            <input class="input_cadastrar trio" type="text" name="txtCidade" placeholder="Cidade" maxlength="30" required value="<?=$cidade;?>">
                        </div>

                        <div class="colunas_trio">
<!--                        ESTADO.    -->
                            <select id="cbx_cadastrar" class="trio" name="cbxEstado" required>
                                <option value="" <?php if($estado == ""){ echo"selected"; }; ?>>Estado</option>
                                <option value="Acre" <?php if($estado == "Acre"){ echo"selected"; }; ?>>Acre - AC</option>
                                <option value="Alagoas" <?php if($estado == "Alagoas"){ echo"selected"; }; ?>>Alagoas - AL</option>
                                <option value="Amapá" <?php if($estado == "Amapá"){ echo"selected"; }; ?>>Amapá - AP</option>
                                <option value="Amazonas" <?php if($estado == "Amazonas"){ echo"selected"; }; ?>>Amazonas - AM</option>
                                <option value="Bahia" <?php if($estado == "Bahia"){ echo"selected"; }; ?>>Bahia - BA</option>
                                <option value="Ceará" <?php if($estado == "Ceará"){ echo"selected"; }; ?>>Ceará - CE</option>
                                <option value="Distrito Federal" <?php if($estado == "Distrito Federal"){ echo"selected"; }; ?>>Distrito Federal - DF</option>
                                <option value="Espirito Santo" <?php if($estado == "Espirito Santo"){ echo"selected"; }; ?>>Espirito Santo - ES</option>
                                <option value="Goiás" <?php if($estado == "Goiás"){ echo"selected"; }; ?>>Goiás - GO</option>
                                <option value="Maranhão" <?php if($estado == "Maranhão"){ echo"selected"; }; ?>>Maranhão - MA</option>
                                <option value="Mato Grosso" <?php if($estado == "Mato Grosso"){ echo"selected"; }; ?>>Mato Grosso - MT</option>
                                <option value="Mato Grosso do Sul" <?php if($estado == "Mato Grosso do Sul"){ echo"selected"; }; ?>>Mato Grosso do Sul - MS</option>
                                <option value="Minas Gerais" <?php if($estado == "Minas Gerais"){ echo"selected"; }; ?>>Minas Gerais - MG</option>
                                <option value="Parana" <?php if($estado == "Parana"){ echo"selected"; }; ?>>Paraná - PA</option>
                                <option value="Paraiba" <?php if($estado == "Paraiba"){ echo"selected"; }; ?>>Paraíba - PB</option>
                                <option value="Pará" <?php if($estado == "Pará"){ echo"selected"; }; ?>>Pará - PR</option>
                                <option value="Pernambuco" <?php if($estado == "Pernambuco"){ echo"selected"; }; ?>>Pernambuco - PE</option>
                                <option value="Piauí" <?php if($estado == "Piauí"){ echo"selected"; }; ?>>Piauí - PI</option>
                                <option value="Rio de Janeiro" <?php if($estado == "Rio de Janeiro"){ echo"selected"; }; ?>>Rio de Janeiro - RJ</option>
                                <option value="Rio Grande do Norte" <?php if($estado == "Rio Grande do Norte"){ echo"selected"; }; ?>>Rio Grande do Norte - RN</option>
                                <option value="Rio Grande do Sul" <?php if($estado == "Rio Grande do Sul"){ echo"selected"; }; ?>>Rio Grande do Sul - RS</option>
                                <option value="Rondonia" <?php if($estado == "Rondonia"){ echo"selected"; }; ?>>Rondônia - RO</option>
                                <option value="Roraima" <?php if($estado == "Roraima"){ echo"selected"; }; ?>>Roraima - RR</option>
                                <option value="Santa Catarina" <?php if($estado == "Santa Catarina"){ echo"selected"; }; ?>>Santa Catarina - SC</option>
                                <option value="São Paulo" <?php if($estado == "São Paulo"){ echo"selected"; }; ?>>São Paulo - SP</option>
                                <option value="Sergipe" <?php if($estado == "Sergipe"){ echo"selected"; }; ?>>Sergipe - SE</option>
                                <option value="Tocantis" <?php if($estado == "Tocantis"){ echo"selected"; }; ?>>Tocantins - TO</option>
                            </select>
                        </div>
                    </div>

<!--                ÁREA DOS BOTÕES.    -->
                    <div class="area_botoes">
<!--                    LIMPAR.    -->
                        <input class="btns_cadastrar" type="reset" name="btnLimpar" value="<?=$btnLimpar;?>">
<!--                    CADASTRAR.    -->
                        <input class="btns_cadastrar" type="submit" name="btnCadastrar" value="<?=$botao;?>">
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
        
        <script>
            
            // Mascara para o campo CPF.
            function mascaraCPF( campo, e ){
                
                var kC = (document.all) ? event.keyCode : e.keyCode,
                    data = campo.value;
                
                if( kC!=8 && kC!=46 ){
                    if(data.length==3){
                        
                        campo.value = data += '.';
                        
                    }else if(data.length==7){
                        
                        campo.value = data += '.';
                        
                    }else if(data.length==11){
                        
                        campo.value = data += '-';
                        
                    }else{
                        
                        campo.value = data;
                        
                    }
                }
                
            }
            
            // Mascara para o campo Data de nasc.
            function mascaraData( campo, e ){
                
                var kC = (document.all) ? event.keyCode : e.keyCode,
                    data = campo.value;
                
                if( kC!=8 && kC!=46 ){
                    if(data.length==2){
                        
                        campo.value = data += '/';
                        
                    }else if(data.length==5){
                        
                        campo.value = data += '/';
                        
                    }else{
                        
                        campo.value = data;
                        
                    }
                }
                
            }
            
            // Mascara para o campo CEP.
            function mascaraCEP( campo, e ){
                
                var kC = (document.all) ? event.keyCode : e.keyCode,
                    data = campo.value;
                
                if( kC!=8 && kC!=46 ){
                    if(data.length==5){
                        
                        campo.value = data += '-';
                        
                    }else{
                        
                        campo.value = data;
                        
                    }
                }
                
            }
            
            // Mascara para  o campo telefone.
            function mascaraTel( campo, e ){
                
                var kC = (document.all) ? event.keyCode : e.keyCode,
                    data = campo.value;
                
                if( kC!=8 && kC!=46 ){
                    if(data.length==0){
                        
                        campo.value = data += '(';
                        
                    }else if(data.length==3){
                        
                        campo.value = data += ')';
                        
                    }else if(data.length==8){
                        
                        campo.value = data += '-';
                        
                    }else if(data.length==9){
                        
                        if(campo.value.substr(-1, 1) != '-'){
                            campo.value = data += '-';
                        }
                        
                    }else if(data.length==13){
                        
                        var antes,
                            num,
                            fim;
                        
                        if(campo.value.substr(-4, 1) != '-'){
                            
                            antes = campo.value.substr(0, 8);
                            num = campo.value.substr(-4, 1);
                            fim = campo.value.substr(-3);
                            console.log(antes);
                            console.log(num);
                            console.log(fim);

                            campo.value = antes+num+'-'+fim;
                            
                        }else{
                            
                            campo.value = data;
                            
                        }
                        
                    }else{
                        
                        campo.value = data;
                        
                    }
                }
                
            }
            
        </script>
        
        <?php require_once('../../js/logica_login_cliente.php'); ?>
        
    </body>
</html>