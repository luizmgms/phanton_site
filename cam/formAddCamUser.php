<?php
	session_start();
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true))
	{
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		$url = BASEURL."index.php";
		header("Location:url");
		}
	
	$logado = $_SESSION['login'];
    $nome = $_SESSION['name'];
    $idUser = $_SESSION['id'];
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
		    <?php include(HEADER_TEMPLATE); ?>

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1>Adicionar Câmera</h1>
                    <!-- Form -->
                    <section>
                        
                        <form method="post" action="<?php echo BASEURL; ?>cam/addCam.php">
                            <div class="row uniform">
                                <div class="12u$">
                                    <input type="text" name="nameNewCam" id="nameNewCam" value="" placeholder="Digite o Nome da Câmera" />
                                </div>
                                <div class="12u$">    
                                    <input type="text" name="cityNewCam" id="cityNewCam" value="" placeholder="Digite a Cidade onde a câmera está Localizada" />
                                </div>
                                <div class="12u$"> 
                                    <input type="text" name="descNewCam" id="descNewCam" value="" placeholder="Digite uma pequena descrição sobre a câmera" />
                                </div>
                                <div class="12u$">    
                                    <input type="text" name="urlNew" id="urlNew" value="" placeholder="Cole aqui a url de streaming da câmera"/>
                                </div>
                                <div class="12u$">    
                                    <input type="text" name="mapNewCam" id="mapNewCam" value="" placeholder="(Opcional) Cole aqui a url do Google Maps com a Localização da câmera"/>
                                </div>
                                <div class="12u$">    
                                    <input type="hidden" name="idUser" id="isUser" value="<?php echo $idUser; ?>"/>
                                </div>
                                <p>Câmera Pública?</p>    
                                <div class="4u 12u$(small)">
                                    <input type="radio" id="demo-priority-low" name="publicNewCam" value="0"checked>
                                    <label for="demo-priority-low">Não</label>
                                </div>
                                <div class="4u 12u$(small)">
                                    <input type="radio" id="demo-priority-normal" name="publicNewCam" value="1">
                                    <label for="demo-priority-normal">Sim</label>
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