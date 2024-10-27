<?php
include_once("../controler/verifica_logado.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css?">
    <link rel="stylesheet" href="../css/cadastro.css?">
    <link rel="stylesheet" href="../css/login.css">
    <title>Sistema de Cadastro</title>
    <script type="text/javascript" src="../js/captura_erros_url.js"></script>

</head>
<body onload="BuscaErros();">
    <main>
        <header>
            <nav>
                <ul>
                    <li><a href="../view/cadastrar.html">Cadastro</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="./atualizar.php">Atualizar Dados</a></li>
                    <li><a href="./excluir.php">Excluir Conta</a></li>
                </ul>
            </nav>
        </header>
        <section class="content-box">
            <div class="erro" id="error-message" style="display: none;"></div>
            <div class="login-content">
                <img src="../img/bg-login.png" alt="Descrição da Imagem" class="imagem-esquerda">
                <form action="../controler/login.php" id="loginForm" method="post">
                <h2>Login de Pessoa Física!</h2>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" minlength="6" required>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
        </section>
        <?php
            include_once("./component/footer.php");
        ?>
    </main>
</body>
</html>