<?php
include_once ('../dao/atualizar_dados_sql.php');
include('./encripta_senha.php');
$update_res = 0;
//atualizar nome
if ((isset($_POST['novo_nome'])) && (!empty($_POST['novo_nome']))) {
    $nome = filter_var( $_POST['novo_nome'], FILTER_SANITIZE_STRING );
        if($update_res = Update_Nome($nome, $_SESSION['id'])){
            $_SESSION['nome'] =  $nome;
            echo "<script> alert('Sucesso ! Nome Atualizado !'); window.location.href = ' ../view/atualizar.php';</script>";
        }else{             
            echo "<script> alert('Falha! Nome não Atualizada !'); history.back();</script>";
        }
}
//atualizar email
if((isset($_POST['novo_email'])) && (!empty($_POST['novo_email']))){
    if (filter_var($_POST['novo_email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['novo_email'];
        if( $update_res = Update_Email($email, $_SESSION['id'])){
            $_SESSION['email'] =  $email;
            echo "<script> alert('Sucesso ! Email Atualizado !'); window.location.href = ' ../view/atualizar.php';</script>";
        }else{             
            echo "<script> alert('Falha! Email não Atualizado !'); history.back();</script>";
        }
    }
}
//atualizar senha
if((isset($_POST['senha_atual'])) && (!empty($_POST['senha_atual'])) &&
    (isset($_POST['nova_senha'])) && (!empty($_POST['nova_senha']))){
    $senha_atual = $_POST['senha_atual'];
    if (password_verify($senha_atual, $_SESSION['senha'])) {
        $nova_senha = $_POST['nova_senha'];
        $nova_senha = Encripta_Senha($nova_senha);
        if( $update_res = Update_Senha($nova_senha,$_SESSION['id'])){
            $_SESSION['senha'] =  $nova_senha;
            echo "<script> alert('Sucesso!  Senha Atualizada !'); window.location.href = ' ../view/atualizar.php';</script>";
        }else{             
            echo "<script> alert('Falha! Senha não Atualizada !'); history.back();</script>";
        }
    }else{
        echo "<script> alert('Senha Atual Incorreta !'); history.back();";
    } 
}


?>