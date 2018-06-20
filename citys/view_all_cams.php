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
    camsPubCity($_GET['city']);
	
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

                    <h1>Cidade</h1>
                    
                    <?php foreach($camsPublic as $value): ?>  
                        <!-- Frame Câmera -->
                        <p><?php echo $value['nameCam']; ?></p>
                        <div class="c_iframe">
                            <img class="ratio" src="http://placehold.it/16x9"/>							
                            <iframe frameborder="0" src="<?php echo $value['urlCam']; ?>" allowfullscreen></iframe>
                        </div>                        
                    <?php endforeach?>

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