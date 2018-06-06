<?php
    require_once('functions.php');
    index();	
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
            <div id="main">
                <div class="inner">
                    <?php if (!empty($_SESSION['message'])) : ?>
                        <div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php clear_messages(); ?>
                    <?php endif; ?>
                    
                    <!--Conteúdo-->
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Login</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($users): ?>
                                <?php foreach($users as $user): ?>
                                    <tr>
                                        <td><?php echo $user['idUser']; ?></td>
                                        <td><?php echo $user['loginUser']; ?></td>
                                        <td><?php echo $user['nameUser']; ?></td>
                                        <td><?php echo $user['emailUser']; ?></td>
                                    </tr>
                                <?php endforeach?>
                            <?php else: ?>
                                <tr>
                                    <td>Nenhum Usuário Encontrado!</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--Footer-->
            <?php include(FOOTER_TEMPLATE); ?>

        </div>

        <!-- Scripts -->
        <?php include(SCRIPT_TEMPLATE); ?>
    </body>
</html>