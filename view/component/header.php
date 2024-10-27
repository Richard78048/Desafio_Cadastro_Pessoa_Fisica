<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css?v1.211">
    <link rel="stylesheet" href="../css/cadastro.css?1">
    <title>Cadastro Pessoa Física RH</title>
</head>
<body>
    <main>
        <header>
            <nav>
                <ul>
                    <li><a href="./cadastrar.php">Cadastro</a></li>
                    <?php 
                    if ( session_status() !== PHP_SESSION_ACTIVE ){
                        session_start();
                     }
                    if($_SESSION != null){
                    echo "<li><a href='./dashboard.php'>Dashboard</a></li>";
                    }else{
                        echo "<li><a href='./logar.php'>Login</a></li>";
                    }
                    ?>
                    <li><a href="./atualizar.php">Atualizar Dados</a></li>
                    <li><a href="./excluir.php">Excluir Conta</a></li>
                    <li><a href="../controler/sai.php?sair=UE1">Logout</a></li>
                </ul>
            </nav>
        </header>