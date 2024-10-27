<?php

function DAO_ler_cpf_existente($cpf){
    include "../dao/conectar.php";
    //verifica se ja esta cadastrado
    $tarefa03 = $conectdb->query("SELECT * FROM  cadastro_pesssoa_fisica_vaga WHERE cpf='$cpf'");
    $user_result3 = $tarefa03->fetch();

   if ($user_result3> 0) {
        return true;
      }else{ 
        return false;
      }
}
function DAO_Logar($email, $senha){
  include "../dao/conectar.php";
  //verifica se ja esta login está correto
  $tarefa04 = $conectdb->query("SELECT * FROM  cadastro_pesssoa_fisica_vaga WHERE email='$email'");
  $user_result4 = $tarefa04->fetch();

 if ($user_result4> 0) {
    if (password_verify($senha, $user_result4['senha'])) {
        $_SESSION['id'] = $user_result4['id_user'];
        $_SESSION['email'] = $email;
        $_SESSION['senha'] =$user_result4['senha'];
        $_SESSION['nome'] = $user_result4['nome'];
        $_SESSION['cpf'] = $user_result4['cpf'];
        return 1;
    }else{ 
        return 0;
    }
  }else{ 
      return -1;
  }
}
function Ler_Tudo(){
  include "../dao/conectar.php";

  try{
    $tarefa05 = $conectdb->query("SELECT * FROM  cadastro_pesssoa_fisica_vaga");
    $user_result5 = $tarefa05->fetchAll(PDO::FETCH_ASSOC);
    if ($user_result5> 0) {
      return $user_result5;
    }
  }catch(PDOException $e){
      return 0;
  }
}
function Get_Id_User($cpf){
  include "../dao/conectar.php";
  try{
    $tarefa06 = $conectdb->query("SELECT id_user FROM  cadastro_pesssoa_fisica_vaga WHERE cpf='$cpf'");
    $user_result6 = $tarefa06->fetch();
    if ($user_result6> 0) {
      return $user_result6['id_user'];
    }else{
      return 0;
    }
  }catch(PDOException $e){
    return 0;
  }
}
?>