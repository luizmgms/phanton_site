<?php
    require_once('../config.php');
    require_once(DBAPI);
    
    $camsPubCity = null; $camView = null; $citys = null;
    
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

    /* Listagem de cidades com Câmeras públicas*/
    function citys() {
        global $citys;
        $citys = find_citys();
    }

?>