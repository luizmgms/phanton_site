<?php
    require_once('../config.php');
    require_once(DBAPI);

    extract($_POST);

    if($nameNewCam == "") {
        echo "<script> alert('Digite um Nome para a Câmeras'); history.back(); </script>";
    }elseif($cityNewCam == "") {
        echo "<script> alert('Digite a cidade da Câmera'); history.back(); </script>";
    }elseif($descNewCam == "") {
        echo "<script> alert('Digite uma breve desrição para a Câmera'); history.back(); </script>";
    }elseif($urlNew == "") {
        echo "<script> alert('Cole a url de streaming da Câmera. Sem ela a Câmera não irá funcionar!'); history.back(); </script>";
    }else{
        $rtn = add_cam($nameNewCam, $cityNewCam, $descNewCam, $urlNew, $mapNewCam , $publicNewCam, $idUser);
        if($rtn == false) {
            echo "<script> alert('Infelizmente não deu para Adicionar essa câmera! Tente novamente mais tarde!'); history.back(); </script>";            
        } else {
            echo "<script> alert('Câmera adicionada com sucesso!'); </script>";
            $url = BASEURL."users/cams_person.php";
            header("Location:$url");
        }
    }
    
    
?>