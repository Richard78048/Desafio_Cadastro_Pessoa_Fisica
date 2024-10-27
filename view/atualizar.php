<?php
include_once("../controler/verifica_N_logado.php");
include_once("./component/header.php");
?>
    <section class="content-box">
        <h2>
            Atualizar Dados pessoais:
        </h2>
        <div class="update_user"> 
            <label> <p id="nome_antigo">Nome :  <?php echo $_SESSION['nome']; ?></p> 
                <form method="POST" id="form_new_name" action="../controler/atualiza.php" style="display:none;">
                    <input id="name_text" type="text" name="novo_nome" placeholder="Digite o novo nome" minlength="6" required>
                    <button type="submit" class="btn-transparent" name="novo_nome_btn" id="novo_nome_btn">Atualizar</button>
                </form>
                <a href="#" onclick="AlterarNome()" id="editar_nome" class="btn" title="Editar"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"></path>
                    </svg>
                </a>
            </label>
        </div>
        <div class="update_user">
            <label><p id="email_antigo"> Email : <?php echo $_SESSION['email']; ?></p>
            <form method="POST" id="form_new_email" action="../controler/atualiza.php" style="display:none;">
                <input id="email_text" type="text" name="novo_email" placeholder="Digite o novo Email" required>
                <button type="submit" class="btn-transparent" name="novo_email_btn" id="novo_email_btn">Atualizar</button>
            </form>
                <a href="#" class="btn" onclick="AlterarEmail()" id="editar_email" title="Editar"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"></path>
                    </svg>
                </a>
            </label>
        </div>
        <p class="update_user">
            <label> CPF :  <?php echo $_SESSION['cpf']; ?></label>(não pode ser alterado)
        </p>
        <div class="update_user">
            <label><p id="senha_label"> Senha :  ******</p>
            <form method="POST" id="form_new_senha" action="../controler/atualiza.php" style="display:none;">
                <input id="atual_password_text" type="password" name="senha_atual" placeholder="Senha Atual" minlength="6" required>
                <input id="password_text" type="password" name="nova_senha" placeholder="Sua Nova Senha" minlength="6" required>
                <button type="submit" class="btn-transparent" name="nova_senha_btn" id="nova_senha_btn">Atualizar</button>
            </form>
            <a href="#" class="btn" onclick="AlterarSenha()" id="editar_senha" title="Editar"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"></path>
                    </svg>
                </a>
            </label>
        </div>

        
    </section>
<?php
            include_once("./component/footer.php");
        ?>
    </main>
    <script type="text/javascript" src="../js/atualizar_dados_forms.js?v"></script>

</body>
</html>