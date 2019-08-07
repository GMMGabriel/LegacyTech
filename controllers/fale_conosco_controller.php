<?php

class faleConoscoController{
    
    // Para salvar uma nova mensagem.
    public function Salvar(){
        
        $faleConosco = new faleConoscoClass();
        
        $faleConosco->nome = $_POST["txtNome"];
        $faleConosco->sobrenome = $_POST["txtSobrenome"];
        $faleConosco->email = $_POST["txtEmail"];
        
        if(($faleConosco->assunto = $_POST["txtAssunto"]) == null){
            
            $faleConosco->assunto = "Assunto não informado";
            
        }
        
        $faleConosco->mensagem = $_POST["txtMensagem"];
        
        $faleConosco::Insert($faleConosco);
        
    }
    
}

?>