<header id="header">
    <div class="inner">

        <!-- Logo -->
        <a href="<?php echo BASEURL; ?>home.php" class="logo">
            <span class="symbol">
                <img src="<?php echo BASEURL; ?>images/logo.png" alt="" />
            </span>
            <span class="title">WCS - Beta - Olá <?php echo $nome; ?></span>
        </a>

        <!-- Nav -->
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
            </ul>
        </nav>
    </div>
</header>
<!--endHeader-->

<!-- Menu -->
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="<?php echo BASEURL; ?>home.php">Home</a></li>
        <li><a href="<?php echo BASEURL; ?>users/cams_person.php?iduser=<?php echo $_SESSION['id']; ?>">Câmeras Pessoais</a></li>
        <li><a href="<?php echo BASEURL; ?>citys/citys.php">Cidades</a></li>
        <li><a href="<?php echo BASEURL; ?>users/mosaic.php">Minhas Câmeras</a></li>
        <li><a href="<?php echo BASEURL; ?>index.php">Logout</a></li>
        <li><a href="<?php echo BASEURL; ?>elements.html">Sobre</a></li>
    </ul>
</nav>
<!--endMenu-->