<?php
	session_start();
	require_once 'functions.php';
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true))
	{
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		$url = BASEURL."index.php";
		header("Location:url");
	}	
	camsUser($_SESSION['id']);
	$logado = $_SESSION['login'];
	$nome = $_SESSION['name'];
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
					<a name="anc_pess"></a>
					<div class="inner">
						<header>
							<h1>Câmeras Pessoais</h1>
							<p>Selecione uma Câmera para Visualizá-la</p>
						</header>

						<?php $i=1; ?>
						<?php if($camsUser): ?>
													
							<section class="tiles">																			
								<?php foreach($camsUser as $value): ?>
									<?php if($value['publicCam'] == 0): ?>									
										<article class="style<?php echo $i; ?>">
											<span class="image">
												<img src="<?php echo BASEURL;?>images/pic<?php echo $i; ?>.jpg" alt="" />
											</span>
											<a href="<?php echo BASEURL; ?>citys/view_cam.php?idcam=<?php echo $value['idCam']; ?>">
												<h2><?php echo $value['nameCam']; ?></h2>
												<div class="content">
													<p>Câmeras Pessoal de <?php echo $nome; ?></p>
												</div>
											</a>
										</article>
										<?php $i++;?>
									<?php endif ?>
								<?php endforeach?>

								<!--Botão Adicionar Câmera-->
								<article class="style<?php echo $i; ?>">
									<span class="image">
										<img src="<?php echo BASEURL;?>images/pic<?php echo $i; ?>.jpg" alt="" />
									</span>
									<a href="<?php echo BASEURL; ?>cam/formAddCamUser.php">
												<h2>+ Adicionar Câmera</h2>
												<div class="content">
													<p>Adicione uma Nova Câmera Pessoal</p>
												</div>
											</a>
								</article>

							</section>
						<?php else: ?>
							<h3>Parece que não há Câmeras Pessoais aqui :(</h3>
							<section class="tiles">
								<!--Botão Adicionar Câmera-->
								<article class="style<?php echo $i; ?>">
									<span class="image">
										<img src="<?php echo BASEURL;?>images/pic<?php echo $i; ?>.jpg" alt="" />
									</span>
									<a href="<?php echo BASEURL; ?>cam/formAddCamUser.php">
												<h2>+ Adicionar Câmera</h2>
												<div class="content">
													<p>Adicione uma Nova Câmera Pessoal</p>
												</div>
											</a>
								</article>
							</section>
						<?php endif?>	
					
						<!-- Botão Voltar-->								
						<input id="btn_v_all" type="button" value="Voltar" onclick="javascript:history.back()">
						
					</div>
				</div>
					
				<!--Footer-->
				<?php include(FOOTER_TEMPLATE); ?>

			</div>

		<!-- Scripts -->
		<?php include(SCRIPT_TEMPLATE); ?>

	</body>
</html>