<?php
    require_once('../config.php');
    require_once(DBAPI);
    
    $camsPubCity = null; $camView = null;
    
    /* Listagem de Câmeras Públicas de uma Cidade*/
    function camsPubCity($city = null){
        global $camsPublic;
        $camsPublic = find_cams_public($city);
    }

    /* Camera a ser vista */
    function findCam($idCam = null){
        global $camView;
        $camView = findCamById($idCam);
    }


?>