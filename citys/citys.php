<?php
	session_start();
	require_once '../config.php';
	require_once DBAPI;
	require_once 'functions.php';
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true))
	{
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		$url = BASEURL."index.php";
		header("Location:$url");
	}
	citys();
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
					<!--Ancora-->
					<a name="anc_citys"></a>
					<div class="inner">
						<header>
							<h1>Cidades</h1>
							<p>Algumas Câmeras públicas de algumas Cidades.</p>
						</header>
						
						<section class="tiles">
							<?php $i = 1; ?>
							<?php foreach($citys as $value): ?>
								<article class="style<?php echo $i; ?>">
									<span class="image">
										<img src="<?php echo BASEURL?>images/pic<?php echo $i; ?>.jpg" alt="" />
									</span>
									<a href="<?php echo BASEURL?>citys/camsOfCity.php?city=<?php echo $value['cityCam']; ?>">
										<h2><?php echo $value['cityCam']; ?></h2>
										<div class="content">
											<p>Câmeras públicas da cidade de <?php echo $value['cityCam']; ?></p>
										</div>
									</a>
								</article>
								<?php $i++; ?>
							<?php endforeach ?>
							
						</section>

						<!-- Botão Voltar-->								
						<input id="btn_v_all" type="button" value="Voltar"
						onclick="window.location.href='<?php echo BASEURL; ?>home.php'">
						
					</div>
				</div>
					
				<!--Footer-->
				<?php include(FOOTER_TEMPLATE); ?>

			</div>

		<!-- Scripts -->
		<?php include(SCRIPT_TEMPLATE); ?>

	</body>
</html>