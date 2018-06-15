<?php
	session_start();
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true))
	{
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		header('Location:index.php');
		}
	
	$logado = $_SESSION['login'];
	$nome = $_SESSION['name'];
?>

<?php require_once '../config.php'; ?>
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
                    <h1>Adicionar Câmera</h1>
                    <!-- Form -->
                    <section>
                        
                        <form method="post" action="<?php echo BASEURL; ?>addCamUser.php">
                            <div class="row uniform">
                                <div class="12u$">
                                    <input type="text" name="name" id="name" value="" placeholder="Digite o Nome da Câmera" />
                                </div>
                                <div class="12u$">    
                                    <input type="text" name="cidade" id="cidade" value="" placeholder="Digite a Cidade onde a câmera está Localizada" />
                                </div>
                                <div class="12u$"> 
                                    <input type="text" name="desc" id="desc" value="" placeholder="Digite uma pequena descrição sobre a câmera" />
                                </div>
                                <div class="12u$">    
                                    <input type="text" name="url" id="url" value="" placeholder="(Opcional) Cole aqui a url do Google Maps com a Localização da câmera"/>
                                </div>    
                                <div class="6u 12u$(small)">
                                    <input type="checkbox" id="public" name="public">
                                    <label for="public">Câmera Pública</label>
                                </div>

                                </div>
                                <div class="12u$">
                                    <ul class="actions">
                                        <li><input type="submit" value="Adicionar" class="special" /></li>
                                        <li><input type="reset" value="Limpar" /></li>
                                        <li><input type="button" onclick="javascript:history.back()" value="Cancelar"></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        
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