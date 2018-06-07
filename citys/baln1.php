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
	
	require_once('functions.php');
	
	camsPubCity("Balneario Camboriu - SC");
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
					<h1>Balneário Camboriú - SC</h1>
					
					<!-- Imagem da Cidade -->
					<span class="image main"><img src="<?php echo BASEURL?>images/balneario/bal_banner.jpg" alt="" /></span>
					
					<!-- Descrição da Cidade -->
					<p>
						Balneário Camboriú é um município da Região Metropolitana da Foz do Rio Itajaí, no litoral norte do estado de Santa Catarina, no Brasil.
						Possui, segundo o censo do Instituto Brasileiro de Geografia e Estatística no ano de 2014, uma população de 124 557 habitantes, sendo o
						11º município mais populoso do estado e o 2º menor em área total.
					</p>
					<p>
						A cidade, com suas colinas íngremes que caem até o mar, é popular entre os sul-americanos. A principal avenida beira-mar é a Avenida Atlântica
						e seu famoso teleférico liga a praia central da cidade à praia de Laranjeiras. A cidade está localizada a 10 km ao sul da cidade de Itajaí,
						a 96 km ao sul da cidade de Joinville e a 80 km ao norte da capital do estado, Florianópolis. A cidade tem uma população de 124.557
						(estimativa do escritório do censo de 2014), que aumenta para mais de um milhão durante o verão.
					</p>
					<p>	
						Em uma reportagem publicada no final de fevereiro de 2012 pela revista Forbes sobre a ascensão da música eletrônica no Brasil, Balneário Camboriú
						foi classificada como "a capital da música eletrônica" no país. A cidade também é conhecida pelo apelido de "Dubai Brasileira", devido ao alto número
						de arranha-céus e turistas. A cidade é servida pelo Aeroporto Internacional Ministro Victor Konder, localizado no município adjacente de Navegantes.
					</p>
					<p>	
						A Ilha das Cabras é um importante ponto turístico e as travessias para a praia próxima de Laranjeiras ocorrem a bordo de navios semelhantes às embarcações
						piratas do século XVII, que dão uma volta à ilha antes de retornar novamente a Balneário Camboriú. A cidade também tem uma estátua semelhante ao Cristo
						Redentor no Rio de Janeiro, chamado "Cristo Luz", mas com algumas diferenças: é um pouco menor que o Redentor e retrata Jesus com uma com um círculo no
						ombro esquerdo, simbolizando o Sol, que abriga um holofote que brilha para toda a cidade.
					</p>

					<!--Ancora-->
					<a name="cams_baln"></a>
					<h2>Câmeras de Balneário Camboriú</h2>
					
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
					onclick="window.location.href='<?php echo BASEURL; ?>citys.php#anc_citys'">

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