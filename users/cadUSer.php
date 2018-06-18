<?php
    session_start();
    require_once('functions.php');
    
    extract($_POST);
    
    if($nameNew == "") {
        echo "<script> alert('Digite um Nome para o Usuário'); history.back(); </script>";
    }elseif($loginNew == "") {
        echo "<script> alert('Digite uma Senha para o Usuário'); history.back(); </script>";
    }elseif($emailNew == "") {
        echo "<script> alert('Digite um E-mail para o Usuário'); history.back(); </script>";
    }elseif($passwdNew == "") {
        echo "<script> alert('Digite uma Senha para o Usuário'); history.back(); </script>";
    }else{
        $x = addUser($nameNew, $loginNew, $emailNew, $passwdNew, $admNew);
        if($x == false) {
            echo "<script> alert('Infelizmente já existe um Usuário com esse Login. Tente outro!'); history.back(); </script>";            
        } else {
            echo "<script> alert(']você já pode efetuar o Login no sistema!'); </script>";
            $url = BASEURL."index.php";
            header("Location:$url");
        }
    }

?>    