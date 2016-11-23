<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['us_perfil'] == 2) {
    header('Location: index.php?acao=invalido');

}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Administração - Classificados</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/styleadm.css" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="shoortcut icon" href="../img/favicon.ico" />
        <link rel="stylesheet" href="../css/menu.css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="dvBarraTopo">
        </div>

        <div id="dvTopo">
            <div id="dvCentroTopo">
                <div id="dvLogo">
                    <img src="../img/logo.png" alt="Classificados on-line" />
                </div>
            </div>
        </div>

        <div id="dvMenu">
            <div id="dvCentroMenu">
                <div id='cssmenu'>
                    <ul>
                        <li><a href='?pagina=inicio'><span>Inicio</span></a></li>
                        <li><a href='?pagina=listarUsuario'><span>Listar Usuários</span></a></li>
                        <li><a href='?pagina=#'><span>Listar Anúncios</span></a></li>
                        <li class='last'><a href='?pagina=sair"'><span>Sair</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="dvCentro">

            <div id="dvEsquerda">
                <?php
                if (isset($_GET["pagina"])) {

                    $pagina = $_GET["pagina"];

                    switch ($pagina) {

                        case "sair":
                            header('Location: logout.php');
                        break;

                        case "listarUsuario":
                             require_once("pages/usuarios/listar.php");
                        break;
                        case "visualizarUsuario":
                            require_once("pages/usuarios/visualizar.php");
                        break;
                        case "editarUsuario":
                            require_once("pages/usuarios/editar.php");
                            break;
                    }
                }
                ?>
            </div>

            <div id="dvDireita">

            </div>
            <div class="clear"></div>
        </div>

    </body>
</html>
