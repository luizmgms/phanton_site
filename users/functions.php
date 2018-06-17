<?php
    require_once('../config.php');
    require_once(DBAPI);
    
    $users = null;	$user = null; $camsUser = null; $camsPublic = null;
    
    /* Listagem de Users */
    function index() {
        global $users;
        $users = find_all('users');
    }

    /* Retorna User */
    function find_user($table = null, $login = null, $senha = null){
        global $user;
        $user = find('users', $login, $senha);
    }

    /* Retorna Câmeras de um Usuário*/
    function camsUser($idUser = null){
        global $camsUser;
        $camsUser = find_cams($idUser);
    }

    /* Listagem de Câmeras Públicas */
    function camsPublic(){
        global $camsPublic;
        $camsPublic = find_cams_public();
    }

    /* Cadastrar Usuário */
    function addUser($name = null, $login = null, $email = null, $pass = null, $admin = null){
        return cad_new_user($name, $login, $email, $pass, $admin);
    }

?>