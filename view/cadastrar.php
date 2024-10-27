<?php  
    include_once("./component/header.php");
?>
        <section class="content-box">
            <h2>Cadastrar de Pessoa Física!</h2>
            <div class="erro" id="error-message" style="display: none;"></div>
            <form action="../controler/cadastro.php" id="registerForm" method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" minlength="6" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" minlength="6" required>
                </div>
                <div class="form-group">
                    <label for="confirmar-senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar-senha" name="confirmar-senha"   minlength="6" required>

                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00">
                </div>
                <input type="submit" onclick="Verificar_Senha()" value="Cadastrar">
            </form>
        </section>
        <?php
            include_once("./component/footer.php");
        ?>
    </main>
    <script type="text/javascript" src="../js/verificar_confirmar_senha.js"></script>

</body>
</html>