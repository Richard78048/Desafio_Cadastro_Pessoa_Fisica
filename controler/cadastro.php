<?php
include_once("./encripta_senha.php");
include_once("ja_cadastrado.php");
include_once("../dao/inserir.php");

if ((isset($_POST['nome'])) && (!empty($_POST['nome'])) &&
        (isset($_POST['email'])) && (!empty($_POST['email']))&&
            (isset($_POST['senha'])) && (!empty($_POST['senha']))&&
                (isset($_POST['cpf'])) && (!empty($_POST['cpf']))){
                    $nome = trim($_POST['nome']);
                    $email = (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
                    $senha = trim($_POST['senha']);
                    $cpf = trim($_POST['cpf']);
                    $senha = Encripta_Senha($senha);
                    $usuario_existente = ConsultarUsuarioJaCadastrado($cpf);
                    if ($usuario_existente == false) {
                        $operation = InsertUser($nome, $email,  $senha, $cpf);
                            if ($operation == 1) {
                                echo "<script> alert('Sucesso, Cadastrado !'); window.location.href = ' ../view/logar.php';</script>";
                            }else{
                                echo "<script> alert('Falha ao Cadastrar, Tente Novamente!');</script>";
                            }
                    }else{ 
                        echo "<script> alert('CPF já cadastrado para outro usuário!'); history.back();</script>";
                    }        
}



?>