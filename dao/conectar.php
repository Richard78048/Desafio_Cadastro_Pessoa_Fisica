<?php
$dbhost = 'localhost';
$dbuser = 'root';   
$dbpassword = '';
try{
$conectdb = new PDO('mysql:host=localhost;dbname=cxlsnvlf_aulas', $dbuser, $dbpassword);
 $conectdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>