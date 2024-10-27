<?php
@include_once("../controler/verifica_N_logado.php");
include_once("./component/header.php");
?>
        <section class="content-box">
            <h2 class="name_user">Bem Vindo(a) <?php echo $_SESSION["nome"]; ?> </h2>
            <div class="erro" id="error-message" style="display: none;"></div>
            <div class="unit_tests">
                <h3>Testes Unitários</h3>
                <a href="?t=TC">Teste de Conexão</a>
                <p id="TC">
                    <?php 
                    if((isset($_GET['t'])) && ($_GET['t']== 'TC')){
                    include_once("../dao/conectar.php"); 
                        if($conectdb){
                            echo "<div class='res_sucess'>Conectado com sucesso !</div>";
                        }else{
                            echo "<div class='res_fail'>Erro ao conectar !</div>";
                        }
                    }
                    ?>
                </p>
                <hr>
                <a href="?t=SD">Salvar Dados SQL</a>
                <p id="SD">
                <?php 
                    if((isset($_GET['t'])) && ($_GET['t']== 'SD')){
                        include_once("../dao/inserir.php");
                        include_once("../controler/encripta_senha.php");

                        $operation = InsertUser('teste da silva', 'teste@gmail.com',   Encripta_Senha('123456'), '100.000.000-10');
                        if($operation){
                            echo "<div class='res_sucess'>Senha Criptografada, Cadastrado com sucesso, Teste!</div>";
                        }else{
                            echo "<div class='res_fail'>Erro ao Cadastrar Cadastro Já Salvo!</div>";
                        }
                    }
                    ?>
                </p>
                <hr>
                <a href="?t=LD">Ler Dados SQL Usuário</a>
                <p id="LD">
                <?php 
                    if((isset($_GET['t'])) && ($_GET['t']== 'LD')){
                        include_once("../dao/ler_dados.php");
                        $entrar =  DAO_Logar('teste@gmail.com', '123456');
                        if($entrar){
                            echo "<div class='res_sucess'>
                            Dados Usuário Lidos:
                            <p>Nome: ".$_SESSION['nome']."</p>
                            <p> Email: ".$_SESSION['email']."</p>
                            <p> CPF: ".$_SESSION['cpf']."</p>
                            <p> Senha Criptografada: ".$_SESSION['senha']."</p>
                            <p> ID Usuário: ".$_SESSION['id']."</p>
                            </div>";
                        }else{
                            echo "<div class='res_fail'>Erro ao Ler os dados do Usuário !</div>";
                        }
                    }
                    ?>
                </p>
                <hr>
                <a href="?t=LT">Ler Todos Dados</a>
                <p id="LT">
                    <?php 
                        if((isset($_GET['t'])) && ($_GET['t']== 'LT')){
                            include_once("../dao/ler_dados.php");
                            $lertudo =  Ler_Tudo();
                                foreach ($lertudo as $row) {
                                    echo "<div class='res_sucess'>
                                    Dados Usuário Lidos:
                                    <p>Nome: ".$row['nome']."</p>
                                    <p> Email: ".$row['email']."</p>
                                    <p> CPF: ".$row['cpf']."</p>
                                    <p> Senha Criptografada: ".$row['senha']."</p>
                                    <p> ID Usuário: ".$row['id_user']."</p>
                                    </div>";
                                }
                        }
                    ?>    
                </p>
                <hr>

                <a href="?t=AD">Atualizar Dados SQL</a>
                <p id="AD">
                <?php 
                    if((isset($_GET['t'])) && ($_GET['t']== 'AD')){
                        include_once ('../dao/atualizar_dados_sql.php');
                        include_once("../controler/encripta_senha.php");
                        include_once("../dao/ler_dados.php");
                        //pegar id pelo cpf então atualizar usario pelo id
                        $atualiza_n =  Update_Nome('atualizateste', Get_Id_User('100.000.000-10'));
                        $atualiza_e =  Update_Email('atualizateste@gmail.com',  Get_Id_User('100.000.000-10'));
                        $s = Encripta_Senha('12345678');
                        $atualiza_s =  Update_Senha($s,  Get_Id_User('100.000.000-10'));


                            if($atualiza_e && $atualiza_n && $atualiza_s){
                                $entrar =  DAO_Logar('atualizateste@gmail.com', '12345678');
                                    if($entrar){
                                        echo "<div class='res_sucess'>
                                        Dados Usuário Atualizados (Re-Lidos):
                                        <p>Nome: ".$_SESSION['nome']."</p>
                                        <p> Email: ".$_SESSION['email']."</p>
                                        <p> CPF: ".$_SESSION['cpf']."</p>
                                        <p> Senha Criptografada: ".$_SESSION['senha']."</p>
                                        <p> ID Usuário: ".$_SESSION['id']."</p>
                                        </div>";
                                    }else{
                                    echo "<div class='res_fail'>Erro ao Atualizar os dados do Usuário !</div>";
                                    }
                            }
                    }
                    ?>
                </p>
                <hr>
                <a href="?t=DD"> Deletar Dados SQL</a>
                <p id="DD">
                <?php 
                    if((isset($_GET['t'])) && ($_GET['t']== 'DD')){
                        include("../dao/deletar.php");
                        $operation = DeleteUser($_SESSION['id']);
                        if($operation){
                            session_destroy();
                            echo "<div class='res_sucess'>Usuário Deletado com sucesso!</div>";
                        }else{
                            echo "<div class='res_fail'>Erro Usuário Não deletado</div>";
                        }
                    }
                    ?>
                </p>

            </div>
        </section>
        <?php
            include_once("./component/footer.php");
        ?>
    </main>
    <script type="text/javascript" src="../js/verificar_confirmar_senha.js"></script>

</body>
</html>