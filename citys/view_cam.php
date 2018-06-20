<?php
    session_start();
    require_once('functions.php');
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true))
	{
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		$url = BASEURL."index.php";
		header("Location:$url");
	}
	
	$logado = $_SESSION['login'];
    $nome = $_SESSION['name'];
    findCam($_GET['idcam']);
	
?>

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

                    <h1><?php echo $camView['nameCam']; ?> - <?php echo $camView['cityCam']; ?></h1>
                    
                    <!-- Frame Câmera -->
                    <div class="c_iframe">
                        <img class="ratio" src="http://placehold.it/16x9"/>							
                        <iframe frameborder="0" src="<?php echo $camView['urlCam']; ?>" allowfullscreen></iframe>
                    </div>
                                        
                    <h2>Localização da Câmera</h2>
                    
                    <!-- Frame Localização da Câmera -->
                    <iframe src="<?php echo $camView['mapCam']; ?>" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>

                    <!-- Botão Voltar-->								
                    <input id="btn_v_all" type="button" value="Voltar" onclick="javascript:history.back()">
                    <p></p>

                </div>                     
                            
            </div>
            <div style="height: 20px; width: 100%;"></div>
            <!--Footer-->
            <?php include(FOOTER_TEMPLATE); ?>
                            
        </div>

		<!-- Scripts -->
        <?php include(SCRIPT_TEMPLATE); ?>
		
	</body>
</html>