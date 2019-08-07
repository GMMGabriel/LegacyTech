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
    
//    function keyPressed(evt){
//        evt = evt || window.event;
//        var key = evt.keyCode || evt.which;
//        return String.fromCharCode(key); 
//    }
//
//    document.onkeypress = function(evt) {
//        var str = keyPressed(evt);
//
//        if(str == '')
//            alert("Apertou o 'f', chamando uma função...");
//    };

});