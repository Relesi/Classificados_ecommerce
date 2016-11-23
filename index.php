<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Classificados - On-line</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
       <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
        <link rel="shoortcut icon" href="img/favicon.ico" />
        <link rel="stylesheet" href="css/menu.css">
      <!--  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
    </head>
    <body>
        <div id="dvBarraTopo">
        </div>

        <div id="dvTopo">
            <div id="dvCentroTopo">
                <div id="dvLogo">
                    <img src="img/logo.png" alt="Classificados on-line" />
                </div>
                <div id="dvPesquisa">
                    <form method="post" name="frmPesquisa">
                        <input type="text" name="txtPesquisa" id="txtPesquisa" placeholder="Pesquisa" required />
                        <input type="submit" value="" id="btnSubmit" name="btnSubmit" />
                    </form>
                </div>
            </div>
        </div>

        <div id="dvMenu">
            <div id="dvCentroMenu">
                <div id='cssmenu'>
                    <ul>
                        <li><a href='?pagina=inicio'><span>Inicio</span></a></li>
                        <li><a href='?pagina=cadastro'><span>Cadastro</span></a></li>
                        <li><a href='#'><span>Portifolio</span></a></li>
                        <li><a href='#'><span>Projetos</span></a></li>
                        <li><a href='#'><span>Produtos</span></a></li>
                        <li><a href='#'><span>Compania</span></a></li>
                        <li><a href='#'><span>Quem Somos</span></a></li>
                        <li class='last'><a href='#'><span>Contato</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="dvCentro">
            <div id="dvEsquerda">
                <?php
                if (isset($_GET['pagina'])) {
                    $pagina = $_GET['pagina'];
                    switch ($pagina) {

                        case "inico":
                            include_once("paginas/inicio.php");
                            break;
                        case "cadastro":
                            include_once ("paginas/cadastro.php");
                            break;
                        default:
                            include_once("paginas/inicio.php");
                    }
                } else {
                    include_once("paginas/inicio.php");
                }
                ?>
            </div>

            <div id="dvDireita">

            </div>
            <div class="clear"></div>
        </div>

    </body>
</html>
