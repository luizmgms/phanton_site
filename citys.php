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
			<?php include(HEADER_TEMPLATE); ?>

				<!-- Main -->
				<div id="main">
					<a name="anc_citys"></a>
					<div class="inner">
						<header>
							<h1>Cidades</h1>
							<p>Algumas Câmeras públicas de algumas cidades do Brasil.</p>
						</header>
						<section class="tiles">
							<article class="style1">
								<span class="image">
									<img src="images/blumenau/blumenau1.jpg" alt="" />
								</span>
								<a href="blu1.html">
									<h2>Blumenau - SC</h2>
									<div class="content">
										<p>Câmeras públicas da cidade de Blumenau</p>
									</div>
								</a>
							</article>
							<article class="style2">
								<span class="image">
									<img src="images/balneario/balneario1.jpg" alt="" />
								</span>
								<a href="baln1.html">
									<h2>Balneário Camboriú - SC</h2>
									<div class="content">
										<p>Cânmeras da cidade de Balneário Camboriú - SC</p>
									</div>
								</a>
							</article>
							
						</section>

						<!-- Botão Voltar-->								
						<input id="btn_v_all" type="button" value="Voltar" onclick="window.location.href='index.html'">
						
					</div>
				</div>
					
				<!--Footer-->
				<?php include(FOOTER_TEMPLATE); ?>

			</div>

		<!-- Scripts -->
		<?php include(SCRIPT_TEMPLATE); ?>

	</body>
</html>