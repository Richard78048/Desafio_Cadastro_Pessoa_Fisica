<?php 
function Encripta_Senha($s){
    $options = [
    'cost' => 8 ];
    $senha_encriptada = password_hash($s,  PASSWORD_BCRYPT, $options); 
    return $senha_encriptada;
}
?>