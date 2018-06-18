<?php 
	session_start();
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true))
	{
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		$url = BASEURL."index.php";
		header("Location:$url");
	}
	require_once 'config.php';
	require_once DBAPI;
	$logado = $_SESSION['login'];
	$nome = $_SESSION['name'];
	$id = $_SESSION['id'];
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
				<header>
					<h1>Web Cam Service. Sistema on-line para monitoramento de câmeras pessoais e metropolitanas.</h1>
					<p>Sistema desenvolvido por
						<a href="">Luiz Magno</a>, idealizado por
						<a href="https://sigaa.ufpi.br/sigaa/public/docente/portal.jsf?siape=1886865">
							Prof° Armando Soares</a> e orientado por
						<a href="https://sigaa.ufpi.br/sigaa/public/docente/portal.jsf?siape=1226761">Prof° Raimundo Moura</a>, para disciplina de TCCII do curso de Bacharelado em
						<a href="https://sigaa.ufpi.br/sigaa/public/curso/portal.jsf?lc=pt_BR&id=74268">
							Ciência da Computação</a> da
						<a href="http://ufpi.br">UFPI</a>.
					</p>
				</header>
				<section class="tiles">
					<!--Categoria Cidades-->
					<article class="style1">
						<span class="image">
							<img src="<?php echo BASEURL; ?>images/cidade.jpg" alt="" />
						</span>
						<a href="<?php echo BASEURL; ?>citys/citys.php">
							<h2>Cidades</h2>
							<div class="content">
								<p>Câmeras de diversas cidades</p>
							</div>
						</a>
					</article>

					<!--Categoria Câmeras Pessoais-->
					<article class="style2">
						<span class="image">
							<img src="<?php echo BASEURL; ?>images/camera.JPG" alt="" />
						</span>
						<a href="<?php echo BASEURL; ?>users/cams_person.php?iduser=<?php echo $id; ?>">
							<h2>Câmeras Pessoais</h2>
							<div class="content">
								<p>Suas Câmeras Pessoais.</p>
							</div>
						</a>
					</article>

					<!--Categoria Minhas Câmeras-->
					<article class="style3">
						<span class="image">
							<img src="<?php echo BASEURL; ?>images/my_cams.jpg" alt="" />
						</span>
						<a href="<?php echo BASEURL; ?>users/mosaic.php">
							<h2>Minhas Câmeras</h2>
							<div class="content">
								<p>Escolha as câmeras que quer visualizar em um mesmo painel.</p>
							</div>
						</a>
					</article>

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