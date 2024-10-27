<?php

function DeleteUser($id){
    include("../dao/conectar.php");
    try{
        $deletar = "DELETE FROM cadastro_pesssoa_fisica_vaga WHERE id_user=?";
        $res= $conectdb->prepare($deletar)->execute([$id]);
    }catch(PDOException $e){
        $res = 0;
    }
    
    return $res;
}

?>