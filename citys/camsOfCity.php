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
    $cidade = $_GET['city'];
	camsPubCity($cidade);
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
					<h1><?php echo $cidade; ?></h1>
										
					<!--Ancora-->
					<a name="cams_baln"></a>
					<h2>Câmeras de <?php echo $cidade; ?></h2>
					
					<section class="tiles">
						<?php $i=1; ?>							
						<?php foreach($camsPublic as $value): ?>									
							<article class="style<?php echo $i; ?>">
								<span class="image">
									<img src="<?php echo BASEURL;?>images/pic<?php echo $i; ?>.jpg" alt="" />
								</span>
								<a href="<?php echo BASEURL; ?>citys/view_cam.php?idcam=<?php echo $value['idCam']; ?>">
									<h2><?php echo $value['nameCam']; ?></h2>
									<div class="content">
										<p><?php echo $value['descCam']; ?></p>
									</div>
								</a>
							</article>
							<?php $i++;?>
						<?php endforeach?>											
					</section>
					
					<!-- Botão Voltar-->								
					<input id="btn_v_all" type="button" value="Voltar"
					onclick="window.location.href='<?php echo BASEURL; ?>citys/citys.php#anc_citys'">

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