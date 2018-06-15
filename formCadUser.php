<?php
    session_start();           
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true)) {
        unset($_SESSION['login']);
        unset($_SESSION['name']);
    } else {
        session_destroy();
    }
?>

<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

    <!--Head-->
    <?php $rtn = include(HEAD_TEMPLATE); ?>

    <body>
        <!-- Wrapper -->
        <div id="wrapper">

            <!--Header-->
            <header id="header">
                <div class="inner">

                    <!-- Logo -->
                    <a href="home.php" class="logo">
                        <span class="symbol">
                            <img src="<?php echo BASEURL; ?>images/logo.png" alt="" />
                        </span>
                        <span class="title">WCS - Beta - Bem Vindo!</span>
                    </a>

                </div>
            </header>
            <!--endHeader-->

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1>Cadastro de Usuário</h1>
                    <!-- Form -->
                    <section>
                        
                        <form method="post" action="<?php echo BASEURL; ?>cadUser.php">
                            <div class="row uniform">
                                <div class="12u$">
                                    <input type="text" name="name" id="name" value="" placeholder="Digite o Nome do Usuário" />
                                    <input type="text" name="login" id="login" value="" placeholder="Digite um Login para o Usuário" />
                                    <input type="text" name="email" id="email" value="" placeholder="Digite o E-mail do Usuário" />
                                    <input type="password" name="passwd" id="passwd" value="" placeholder="Digite uma Senha para  Usuário"/>
                                    <input type="hidden" name="adm" id="adm" value="0"/>
                                </div>
                                <div class="12u$">
                                    <ul class="actions">
                                        <li><input type="submit" value="Cadastrar" class="special" /></li>
                                        <li><input type="reset" value="Limpar" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>

                        <b>Já é Cadastrado! Faça o Login <a href="index.php">Aqui!</a></b>
                        <p><a href="resetsenha.php">Esqueceu a senha? :(</a></p>
                        
                    </section>

                </div>
            </div>

            <!--Footer-->
            <?php include(FOOTER_TEMPLATE); ?>
            
        </div>

        <!-- Scripts -->
        <?php include(SCRIPT_TEMPLATE); ?>
        
    </body>
</html>