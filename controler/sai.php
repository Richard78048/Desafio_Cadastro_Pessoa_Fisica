<?php

session_start();
 //USUARIO EXIT 1 = sim.
if(($_SESSION != null) && ($_GET['sair']=="UE1")){
    session_destroy();
    header('location:../index.html');
}
?>