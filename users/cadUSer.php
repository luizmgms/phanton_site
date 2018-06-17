<?php
    session_start();
    require_once('functions.php');
    
    $nome = $_POST['nameNew'];
    $login = $_POST['loginNew'];
    $email = $_POST['emailNew'];
    $senha = $_POST['passwdNew'];
    $admin = $_POST['admNew'];
    
    if($nome == "") {
        echo "<script> alert('Digite um Nome para o Usuário'); history.back(); </script>";
    }elseif($login == "") {
        echo "<script> alert('Digite uma Senha para o Usuário'); history.back(); </script>";
    }elseif($email == "") {
        echo "<script> alert('Digite um E-mail para o Usuário'); history.back(); </script>";
    }elseif($senha == "") {
        echo "<script> alert('Digite uma Senha para o Usuário'); history.back(); </script>";
    }else{
        $x = addUser($nome, $login, $email, $senha, $admin);
        if($x == false) {
            echo "<script> alert('Infelizmente já existe um Usuário com esse Login. Tente outro!'); history.back(); </script>";            
        } else {
            $url = BASEURL."index.php";
            header("Location:$url");
        }
    }

?>    