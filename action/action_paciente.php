<?php
require('/consultorio/vendor/autoloand.php');
$action = $_GET['action'];
$paciente = new $paciente();
switch($action){
    case 'cadastrar';
            $paciente->nome = $_POST['nome'];
            $paciente->cpf  = $_POST['cpf'];
            $paciente->data_nascimento  = $_POST['data'];
            $paciente->telefone  = $_POST['telefone'];
            $paciente->email  = $_POST['email'];
            $paciente->endereco  = $_POST['endereco'];
            $paciente->convenio  = $_POST['convenio'];
            $paciente->observacao = $_POST['observacao'];
            $paciente->Cadastrar();
            echo "<pre>";
            print_r($paciente);
            echo "<pre>";
    break;
    case 'alterar';
       
    break;
    case 'excluir';

    break;
}



?>
