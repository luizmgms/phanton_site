<?php
    session_start();
    require_once('functions.php');
    $login = $_POST['login'];
    $senha = $_POST['passwd'];
    find_user('users', $login, $senha);
  
    if(!empty($user)) {
        $_SESSION['login'] = $user['loginUser'];
        $_SESSION['name'] = $user['nameUser'];
        $_SESSION['id'] = $user['idUser'];
        $redirect = BASEURL."home.php";
        header("Location:$redirect");
    } else { 
        unset ($_SESSION['login']);
        unset ($_SESSION['name']);
        unset ($_SESSION['id']);
        $redirect = BASEURL."index.php";
        header("Location:$redirect");
    }
?>