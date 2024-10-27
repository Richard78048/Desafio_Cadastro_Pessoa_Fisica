<?php
    session_start();
if($_SESSION == null){
  header('location:../index.html');
}
?>