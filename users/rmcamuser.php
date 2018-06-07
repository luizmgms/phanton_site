<?php 
    require_once('../config.php');
    require_once(DBAPI);

    extract($_POST);

    $rtn = rmCamOfUser($user, $cam);
    
    echo $rtn;

?>