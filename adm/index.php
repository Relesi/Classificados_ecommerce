<?php
require_once("../classes/DAO/usuarioDAO.php");
$usuarioDAO = new usuarioDAO();
session_start();
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Login - Classificados</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styleadm.css" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="dvCentroLogin">
            <div id="dvTopoLogin">
                <img src="../img/logo.png" alt="Logo" />
            </div>

            <form method="post" name="frmLogin">
                <div id="dvEmail"> <img src="../img/user.png" alt="E-mail" /><input type="email" name="txtEmail" class="inputLogin" placeholder="exemplo@dominio.com" required /> </div>
                <div id="dvpass"> <img src="../img/pass.png" alt="Password" /><input type="password" name="txtPassword" class="inputLogin" placeholder="*******" required /> </div>

                <input type="submit" name="btnSubmit" style="margin:10px;" value="Login" class="btnSubmit" /> <a href="#">Recuperar Senha</a>
                <p style="padding:10px;" id="resultado">&nbsp;</p>
            </form>
        </div>
    </body>
</html>

<?php
if (isset($_POST['btnSubmit'])) {
    if ($usuarioDAO->validarUsuario($_POST["txtEmail"], $_POST["txtPassword"])) {

        $consulta = $usuarioDAO->retornarInformacoes($_POST["txtEmail"]);

        $_SESSION['us_cod'] = $consulta['us_cod'];
        $_SESSION['us_nome'] = $consulta['us_nome'];
        $_SESSION['us_email'] = $consulta['us_email'];
        $_SESSION['us_perfil'] = $consulta['us_perfil'];
        $perfil = $consulta['us_perfil'];
        $_SESSION['logado'] = true;


        if($perfil == 2){
            header('Location: painel.php');
        }
        else{
            header('Location: ../index.php');
        }



        header('Location: painel.php');
        ?>
        <script>
            //document.location.href = "painel.php";
        </script>  
        <?php
    } else {
        ?>
        <script>
            document.getElementById("resultado").innerHTML = "Usuário ou senha inválido";
        </script>  
        <?php
    }
}

if (isset($_GET["acao"])) {

    $pagina = $_GET["acao"];

    switch ($pagina) {

        case "invalido":
            ?>
            <script>
                document.getElementById("resultado").innerHTML = "Autenticação requerida.";
            </script>  
            <?php
            break;
        case "logout":
            ?>
            <script>
                document.getElementById("resultado").innerHTML = "Você efetuou o Logout.";
            </script>  
            <?php
            break;
    }
}
?>