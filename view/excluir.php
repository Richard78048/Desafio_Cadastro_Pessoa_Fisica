<?php
include_once("../controler/verifica_N_logado.php");
include_once("./component/header.php");
?>
    <section class="content-box">
        <h2>
            Excluir Conta de Usuário
        </h2>
        <div class="delete_user"> 
            <h2>Tem certeza Que quer excluir sua conta? </h2>
            <div>
                    <a href="../controler/exclui.php?cod=UCD">Sim</a>
                    <a href="../view/dashboard.php">Não</a>
            </div>
                
        </div>

    </section>
    <?php
       include_once("./component/footer.php");
    ?>
    </main>
</body>
</html>