<?php
	session_start();
	require_once('functions.php');

	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['name']) == true)) {
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		$url = BASEURL."index.php";
		header("Location:$url");
	}
	
	$logado = $_SESSION['login'];
	$nome = $_SESSION['name'];
	$idUser = $_SESSION['id'];
	camsUser($idUser);
	camsPublic();
	
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
					<h1>Minhas Câmeras</h1>
					
					<!--Ancora-->
					<a name="my_cams"></a>

					<!--Conteúdo-->
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cidade</th>
								<th>Nome</th>
								<th>Descrição</th>
								<th>Pública</th>
								<th>Ver</th>
								<th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($camsUser): ?>
                                <?php foreach($camsUser as $cam): ?>
                                    <tr>
										<td><?php echo $cam['idCam']; ?></td>
                                        <td><?php echo $cam['cityCam']; ?></td>
										<td><?php echo $cam['nameCam']; ?></td>
										<td><?php echo $cam['descCam']; ?></td>
										<td><?php
											if($cam['publicCam']) {
												echo "Sim";
											} else {
												echo "Não";
											}
										?></td>
										<td>
											<form action="mosaic.php#view_cam" method="POST">
												<input type="hidden" name="url_cam" value="<?php echo $cam['urlCam']; ?>">
												<input type="hidden" name="ct_cam" value="<?php echo $cam['cityCam']; ?>">
												<input type="hidden" name="name_cam" value="<?php echo $cam['nameCam']; ?>">
												<input type="submit" value="Ver" />												
											</form>											
										</td>
										<td>
											<button onclick="return rmCamUser(<?php echo $cam['idCam']; ?>)">
											Excluir</button>
										</td>
                                    </tr>
                                <?php endforeach?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7">Nenhuma Câmera :( Tente adicionar alguma no menu Drop-Down abaixo!</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

					<!--Botão Ver Todas as Cameras-->
					<div style="width: 100%; height: 70px; padding-left: 84%;">
						<button id="btnAddCam" class="button" onclick="verAllCams()">Ver Todas</a>
					</div>

					<script>
						function verAllCams() {
							$("#my_mosaic").hide();
							if(document.getElementById("frm_ind") != null){
								$("#frm_ind").remove();
							}
							var list = document.getElementById("my_mosaic");							
							while (list.hasChildNodes()) {   
								list.removeChild(list.firstChild);
							}
							
							<?php
								foreach ($camsUser as $key => $value) {
									$p1 = 'document.getElementById("my_mosaic").innerHTML += ';
									$p2 = '<iframe width="720" height="407" frameborder="0" src="';
									$p3 = '" allowfullscreen></iframe> ';
									$p4 = "<p>".$value['cityCam']." - ".$value['nameCam']."</p>";
									echo $p1."'".$p2.$value['urlCam'].$p3.$p4."'\n";
								}
							?>
							$("#my_mosaic").show();
							this.location = "#view_cam";
						}
					</script>

					<!--Escolher Câmera-->
					<div class="12u$">
						
						<div class="select-wrapper"></div>
						
						<select name="demo-category" id="demo-category">
							<option value="">- Escolha uma Câmera -</option>
							<?php if($camsPublic): ?>
								<?php foreach($camsPublic as $camPub): ?>
									<option value="<?php echo $camPub['idCam']; ?>">
										<?php echo $camPub['cityCam'].' - '.$camPub['nameCam'];	?>
									</option>
								<?php endforeach?>
							<?php else: ?>
								<option value="">- Nenhuma Câmera -</option>
							<?php endif; ?>							
						</select>
						
						<!--Botão para Adicionar Camera ao usuário-->
						<button id="btnAddCam" class="button" onclick="return addCamUser()">Adicionar Câmera</a>

						<script>
							function addCamUser() {
								user = <?php echo $idUser; ?>;
								cam = $("#demo-category").val();
								if(cam == ""){
									alert("Escolha uma Câmera!");
								}else{
									$.post(
										'addcamuser.php',
										{
											user: user,
											cam: cam
										},
										function(data) {
											if(data) {
												alert("Câmera inserida com sucesso!");
											} else {
												alert("Infelizmente não se pode inserir está câmera. "+
												"Talvez ela já esteja inserida neste Usuário");
											}
											location.reload(true);
										} 
									)
								}
							}

							function rmCamUser(cam_a_ex) {
								rtn = confirm("Tem certeza disso?");
									if(rtn) {
									user = <?php echo $idUser; ?>;
									$.post(
										'rmcamuser.php',
										{
											user: user,
											cam: cam_a_ex
										},
										function(data){
											if(data){
												alert("Câmera foi excluída com sucesso!");
											} else {
												alert("Algo deu errado :(");
											}
											location.reload(true);
										}

									)
								}
							}

						</script>						
					</div>
							
					<!--Ancora-->
					<a name="view_cam"></a>
					<div style="width: 100%; height: 20px"></div>
					
					<!-- Ver Camera Aqui -->
					<?php if(!empty($_POST)) : ?>
						<div id="my_mosaic">
							<iframe id="frm_ind" width="720" height="407" frameborder="0"
							src=<?php echo $_POST['url_cam']; ?> allowfullscreen></iframe>
							<p><?php echo $_POST['ct_cam'];?> - <?php echo $_POST['name_cam']; ?> <p>
						</div>
					<?php else: ?>
						<div id="my_mosaic"></div>	
					<?php endif; ?>
					
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