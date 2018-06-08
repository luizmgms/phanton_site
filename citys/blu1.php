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
	camsPubCity("Blumenau - SC");
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
					<h1>Blumenau - SC</h1>
					
					<!-- Imagem da Cidade -->
					<span class="image main"><img src="<?php echo BASEURL?>images/blumenau/blu_banner.jpg" alt="" /></span>
				
					<!-- Descrição da Cidade -->
					<p>
						Blumenau é um município do estado de Santa Catarina, Região Sul do Brasil. Localiza-se na microrregião homônima e na Mesorregião do Vale do Itajaí.
						É a cidade-sede da Região Metropolitana do Vale do Itajaí. 
						É a terceira cidade mais populosa do estado, a 11ª da Região Sul do Brasil, a 78ª do Brasil e a única cidade média-grande de Santa Catarina,
						constituindo um de seus principais polos industriais, tecnológicos e universitários.
					</p>
					<p>
						Foi fundada pelo filósofo e farmacêutico alemão Hermann Bruno Otto Blumenau, que chegou em um barco via rio Itajaí-Açu acompanhado de outros
						dezessete colonos compatriotas. Este desembarcou à foz do Ribeirão Garcia em 2 de setembro de 1850 e dividiu o território em lotes para que os
						colonos pudessem edificar suas moradias, majoritariamente casas feitas com a técnica enxaimel.
						O intervalo ocupado entre as fozes dos ribeirões Velha e Garcia definiu o atual centro da cidade.
					</p>
					<p>	
						Possui uma agenda cultural focada nas festas baseadas no cotidiano e hábitos dos imigrantes europeus, destacando-se a colonização alemã,
						com a Oktoberfest, a segunda maior festa de cerveja do mundo, que, todos os anos em outubro, acontece durante 17 dias, e o stammtisch,
						tradicional reunião de associações na rua 15 de Novembro. O núcleo italiano da população realiza a Festitália, além de ainda ocorrerem reuniões
						do Centro de Tradições Gaúchas (CTG) e diversas outras manifestações das culturas europeia e brasileira. Apesar de ser minoritário, o turismo
						comercial acha seu nicho na Texfair, feira têxtil reconhecida mundialmente.
					</p>
					<p>	
						Blumenau tem destaque nacional em diversos setores da economia, sobressaindo-se informática e particularmente indústria têxtil — com empresas de
						porte nacional e internacional, como a Companhia Hering, a 16º maior do estado, e a maior produtora de etiquetas do mundo, Haco.
						Nota-se também a relevância regional do setor de serviços e comércio; nomeadamente saúde e educação, com seus cinco hospitais e a universidade de Blumenau,
						além de abrigar três shopping centers. Blumenau conta com um dos maiores índices de desenvolvimento humano do Brasil e uma cobertura vegetal crescente,
						sediando o Parque das Nascentes, maior parque natural municipal do país, e o Parque Nacional da Serra do Itajaí.
					</p>
					<h2>Câmeras de Blumenau</h2>

					<!-- Ancora -->
					<a name="cams_blum"></a>

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
					
					<!-- Botão ver todas cameras-->								
					<input id="btn_v_all" type="button" value="Ver Todas" onclick="window.location.href='<?php echo BASEURL; ?>citys/view_all_cams.php?city=Blumenau\ -\ SC'">
					<!-- Botão Voltar-->								
					<input id="btn_v_all" type="button" value="Voltar" onclick="window.location.href='<?php echo BASEURL; ?>citys.php#anc_citys'">								
			
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