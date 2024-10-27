<?php
include_once("../controler/verifica_logado.php");
include_once("../dao/ler_dados.php");
if ((isset($_POST['email'])) && !empty($_POST['email']) && (isset($_POST['senha'])) && !empty($_POST['senha'])){
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $logou =  DAO_Logar($email, $senha);
    if ($logou == 1) {
        echo  "<script> alert('Login realizado com sucesso!');  window.location.href = ' ../view/dashboard.php'; </script>";
    }else{
        //erros baseados em cod U= usuario S =  senha 0 = binario de nada 
        if($logou  == 0){
            header("Location: ../view/logar.php?erro=US0");
        }else{
            header("Location: ../view/logar.php?erro=U0");
        }

    }
}

?>