<?php
include
("../dao/ler_dados.php");
function ConsultarUsuarioJaCadastrado($cpf){
    $result = DAO_ler_cpf_existente($cpf);
    return $result;
}

?>