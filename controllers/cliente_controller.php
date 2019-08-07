<?php

class clienteController{
    
    // Para cadastrar um novo cliente.
    public function Cadastrar(){
        
        $clienteClass = new cliente();
        
        $clienteClass->nome = $_POST['txtNome'];
        $clienteClass->sobrenome = $_POST['txtSobrenome'];
        $clienteClass->cpf = $_POST['txtCpf'];
        $clienteClass->dataNasc = $_POST['txtDataNasc'];
        $clienteClass->sexo = $_POST['rdoSexo'];
        $clienteClass->email = $_POST['txtEmail'];
        $clienteClass->senha = $_POST['txtSenha'];
        $clienteClass->numero = $_POST['txtNumero'];
        $clienteClass->cep = $_POST['txtCep'];
        $clienteClass->logadouro = $_POST['txtLogadouro'];
        $clienteClass->bairro = $_POST['txtBairro'];
        $clienteClass->cidade = $_POST['txtCidade'];
        $clienteClass->estado = $_POST['cbxEstado'];
        
        $clienteClass::Insert($clienteClass);
        
    }
    
    // Para atualizar os dados do cliente.
    public function Atualizar(){
        
        $clienteClass = new Cliente();
        
        $clienteClass->idCliente = $_SESSION['idCliente'];
        $clienteClass->nome = $_POST['txtNome'];
        $clienteClass->sobrenome = $_POST['txtSobrenome'];
        $clienteClass->cpf = $_POST['txtCpf'];
        $clienteClass->dataNasc = $_POST['txtDataNasc'];
        $clienteClass->sexo = $_POST['rdoSexo'];
        $clienteClass->email = $_POST['txtEmail'];
        // Verifica o "value" do campo "senhs". Se estiver "null" a senha é a mesma. Se não estiver "null" a senha mudará.
        if($_POST['txtSenha'] == null){
            $clienteClass->senha = $_SESSION['senha'];
        }else{
            $clienteClass->senha = $_POST['txtSenha'];
        }
        $clienteClass->numero = $_POST['txtNumero'];
        $clienteClass->cep = $_POST['txtCep'];
        $clienteClass->logadouro = $_POST['txtLogadouro'];
        $clienteClass->bairro = $_POST['txtBairro'];
        $clienteClass->cidade = $_POST['txtCidade'];
        $clienteClass->estado = $_POST['cbxEstado'];
        
        $clienteClass::Update($clienteClass);
        
    }
    
    // Para realizar o login do cliente.
    public function Login(){
        
        $clienteClass = new cliente();
        
        $clienteClass->email = $_POST['txtEmail'];
        $clienteClass->senha = $_POST['txtSenha'];
        
        $clienteClass::SelectLogin($clienteClass);
        
    }
    
}

?>