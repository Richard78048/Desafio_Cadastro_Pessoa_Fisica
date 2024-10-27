<?php
include_once("../controler/verifica_N_logado.php");
include("../dao/deletar.php");

if ($_GET['cod']== 'UCD'){
    $user_delete =  $_SESSION['id'];
    $resD = DeleteUser($user_delete);
    if ($resD) {
        session_destroy();
        echo "<script> alert('Sucesso, Usuário Deletado do Sistema!'); window.location.href = ' ../index.html';</script>";
    }else{
        echo "<script> alert('Falha, Usuário não deletado!');</script>";

    }
}

?>
