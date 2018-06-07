<?php
    session_start();
    require_once('functions.php');
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true))
	{
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		header('Location:index.php');
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
                        <iframe frameborder="0" src="http://www.bnu.tv/camera/embed?camera=avenidabrasil_cr_imoveis&width=842&height=500" allowfullscreen></iframe>
                    </div>
                    
                    <!-- Botão Voltar-->								
                    <input id="btn_v_all" type="button" value="Voltar" onclick="window.location.href='baln1.html#cams_baln'">
                    <p></p>

                    <h2>Localização da Câmera</h2>
                    
                    <!-- Frame Localização da Câmera -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d888.8187777713555!2d-48.6329712725091!3d-26.98984580292752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8b61ab0827663%3A0x3a3d1eff4d66ad96!2sAv.+Brasil+-+Centro%2C+Balne%C3%A1rio+Cambori%C3%BA+-+SC!5e0!3m2!1spt-BR!2sbr!4v1525702593598" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>

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