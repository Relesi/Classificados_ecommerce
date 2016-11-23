<?php

session_start();

if ($_SESSION["logado"]) {
    
    $_SESSION["logado"] = null;
    $_SESSION["us_cod"] = null;
    $_SESSION["us_nome"] = null;
    $_SESSION["us_email"] = null;
    $_SESSION["us_perfil"] = null;
}

 header('Location: index.php?acao=logout');
?>