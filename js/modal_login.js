$(document).ready(function(){

    document.getElementById("txtEmail").value = "";
    document.getElementById("txtPassword").value = "";

    $("#botao_login").click(function(){
        $("#modalcontainer").fadeIn(500);
    });

    $("#fechar").click(function(){
        $("#modalcontainer").fadeOut(500);
        document.getElementById("txtEmail").value = "";
        document.getElementById("txtPassword").value = "";
    });

});