<?php 
    require_once('../config.php');
    require_once(DBAPI);

    extract($_POST);

    $rtn = addCamInUser($user, $cam);
    
    echo $rtn;

?>