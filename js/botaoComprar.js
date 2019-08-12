//function eventDialog(){
//    $('#dialog_comprar').dialog();
//}
//
//$('#btnComprar').onclick(eventDialog);

$(document).ready(function(){
    $("#btnCancelarCompra").click(function(){
        $("#modalContainerComprar").fadeOut(500);
    })
});

function comprar(){
    $("#modalContainerComprar").fadeIn(500);
}

function naoLogado(){
    alert("Faça o login primeiro!");
}