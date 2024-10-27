<?php

function  InsertUser($nome,$email, $senha, $cpf){
    include("../dao/conectar.php");
    try{
        $inserir = $conectdb->prepare("INSERT INTO cadastro_pesssoa_fisica_vaga(nome, cpf, email, senha) VALUES (:nome, :cpf, :email, :senha)");
        $inserir->bindParam(':nome', $nome, PDO::PARAM_STR, 100);
        $inserir->bindParam(':cpf', $cpf, PDO::PARAM_STR, 14);
        $inserir->bindParam(':email', $email, PDO::PARAM_STR, 200);
        $inserir->bindParam(':senha', $senha, PDO::PARAM_STR, 1000);
        $op = $inserir->execute();
    }catch(PDOException $e){
        $op = 0;
    }
    return $op;
}

?>