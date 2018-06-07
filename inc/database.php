<?php

    mysqli_report(MYSQLI_REPORT_STRICT);

    /*Abre conexão com banco de dados*/
    function open_database() {
        try {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            return $conn;
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    /*Fecha conexão com o banco de dados*/
    function close_database($conn) {
        try {
            mysqli_close($conn);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /** *Pesquisa um Registro pelo ID em uma Tabela	*/
    function find( $table = null, $login = null, $senha = null ) {
        $database = open_database();
        $found = null;
        try {
            if ($login and $senha) {
                $sql = "SELECT * FROM " . $table . " WHERE loginUser = " . "'$login'" . " AND passUser = " . "'$senha'";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {   
                    $found = $result->fetch_assoc();
                }
            } else {
                $sql = "SELECT * FROM " . $table;
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                    /* Metodo alternativo
                    $found = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($found, $row);
                    } */
                }
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }				
        close_database($database);
        return $found;	
    }

    /*Pesquisa Todos os Registros de uma Tabela	*/
    function find_all($table) {
        return find($table);	
    }

    /* Pesquisa lista de cameras do usuario por id */
    function find_cams($idUser = null){
        $db = open_database();
        $camsUser = null;
        try {
            $sql = "SELECT * FROM (SELECT cams.*, users.idUser FROM user_cam
            INNER JOIN cams ON cams.idCam = user_cam.idCam
            INNER JOIN users on users.idUser = user_cam.idUser) as tb1
            WHERE tb1.idUser = $idUser";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {   
                $camsUser = $result->fetch_all(MYSQLI_ASSOC);
            }
        } catch (Exception $e){
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($db);
        return $camsUser;
    }

    /* Pesquisa todas as câmeras públicas */
    function find_cams_public(){
        $db = open_database();
        $camsPublic = null;
        try {
            $sql = "SELECT * FROM cams WHERE publicCam = 1 ORDER BY cityCam";
            $result = $db->query($sql);
            if($result->num_rows > 0) {
                $camsPublic = $result->fetch_all(MYSQLI_ASSOC);
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($db);
        return $camsPublic;
    }

    /* Adiciona Câmera a um Usuário */
    function addCamInUser($idUser = null, $idCam = null) {
        $db = open_database();
        try {
            $sql = "SELECT * FROM user_cam WHERE idUser = $idUser AND idCam = $idCam";
            $result = $db->query($sql);
            if($result->num_rows >0){
                close_database($db);
                return false;
            } else {
                $sql = "INSERT INTO user_cam(idUser, idCam) VALUES ($idUser, $idCam)";
                $db->query($sql);
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($db);
        return true;
    }

    /* Remove Câmera de um usuário */
    function rmCamOfUser($idUser = null, $idCam = null) {
        $db = open_database();
        try {
            $sql = "DELETE FROM user_cam WHERE idUser = $idUser AND idCam = $idCam";
            $result = $db->query($sql);
            if($result > 0){
                close_database($db);
                return true;
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($db);
        return false;
    }
?>