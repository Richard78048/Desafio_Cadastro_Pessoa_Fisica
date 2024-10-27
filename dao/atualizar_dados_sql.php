<?php 
 if ( session_status() !== PHP_SESSION_ACTIVE ){
    session_start();
 }

function Update_Email($novo_email, $id){
    include("../dao/conectar.php");
    $atualizar = "UPDATE cadastro_pesssoa_fisica_vaga SET email=? WHERE id_user=?";
    $res= $conectdb->prepare($atualizar)->execute([$novo_email, $id]);
    return $res;
}
function Update_Nome($novo_nome, $id){
    include("../dao/conectar.php");
    $atualizar2 = "UPDATE cadastro_pesssoa_fisica_vaga SET nome=? WHERE id_user=?";
    $res = $conectdb->prepare($atualizar2)->execute([$novo_nome, $id]);
    return $res;
}
function Update_Senha($nova_senha, $id){ //senha já encriptada
    include("../dao/conectar.php");
    $atualizar3 = "UPDATE cadastro_pesssoa_fisica_vaga SET senha=? WHERE id_user=?";
    $res = $conectdb->prepare($atualizar3)->execute([$nova_senha, $id]);
    return $res;
}

?>