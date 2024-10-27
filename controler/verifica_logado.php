<?php
session_start();
 
if($_SESSION != null){
  header('location:../view/dashboard.php');
}
?>