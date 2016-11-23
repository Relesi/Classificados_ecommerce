<?php
require_once("../classes/DAO/usuarioDAO.php");
$usuarioDAO = new usuarioDAO();

?>

<div id="dvListarUsuario">

    <h1>Listar Usuários &raquo;</h1>
    <br />

    <table>
        <thead>
        <tr>
            <th>Codigo:</th>
            <th>Imagem</th>
            <th>Nome:</th>
            <th>Email:</th>
            <th>Perfil</th>
            <th>Vizualizar</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach($usuarioDAO->retornarTodosusuarios() as $consulta) {


                ?>

                <tr>
                    <td><?=$consulta["us_cod"];?></td>
                    <td><img src="../imgUsuarios/<?=$consulta["us_imagem"];?>"alt="<?=$consulta["us_nome"];?>" class="imgLista" /> </td>
                    <td><?=$consulta["us_nome"];?></td>
                    <td><?=$consulta["us_email"];?></td>
                    <td><?php

                        if($consulta["us_perfil"] == 1){
                            echo "Usuario Comum";
                        }else{
                            echo "Administrador";
                        }



                    ?></td>
                    <td><a href="?pagina=visualizarUsuario&cod=<?=$consulta["us_cod"];?>"><img src="../img/find.png" alt="Visualizar Usuário" /></td>
                    <td><a href="?pagina=editarUsuario&cod=<?=$consulta["us_cod"];?>"><img src="../img/editar.png" alt="Editar Usuário" /></td>

                </tr>
            <?PHP
            }
        ?>
        </tbody>
        <tfoot>

        </tfoot>

    </table>

</div>