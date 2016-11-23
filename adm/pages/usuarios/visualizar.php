<?php
 require_once("../classes/DAO/usuarioDAO.php");
 $usuarioDAO = new usuarioDAO();
$consulta = $usuarioDAO->retornarTodosInformacoesUsuario($_GET["cod"]);
?>

    <div id="dvVisualizarUsuario" >
        <h1> Visualizar Usuário &raquo;</h1>
        <br />
        <ul>
            <li class="textolista">Nome:</li>
            <li><?=$consulta["us_nome"];?></li>

            <li class="textolista">E-mail:</li>
            <li><?=$consulta["us_email"];?></li>

            <li class="textolista">CPF:</li>
            <li><?=$consulta["pesf_cpf"];?></li>

            <li class="textolista">Telefone:</li>
            <li><?=$consulta["us_telefone"];?></li>

            <li class="textolista">Imagem:</li>
            <li><?=$consulta["us_imagem"];?></li>

            <li class="textolista">Data Nascimento:</li>
            <li><?=$consulta["us_datanascimento"];?></li>

            <li class="textolista">Cidade:</li>
            <li><?=$consulta["us_cidade"];?></li>

            <li class="textolista">Estado:</li>
            <li><?=$consulta["us_estado"];?></li>

            <li class="textolista">Rua:</li>
            <li><?=$consulta["us_rua"];?></li>

            <li class="textolista">Bairro:</li>
            <li><?=$consulta["us_bairro"];?></li>

            <li class="textolista">Cep:</li>
            <li><?=$consulta["us_cidade"];?></li>

            <li class="textolista">Status:</li>
            <li>
                <?php
                if ($consulta["us_status"] == 0){
                    echo "Ativo";
                }else{
                    echo "Administrador";
                }
                ?>
            </li>
            <li class="textoLista">Perfil:</li>
            <li>
                <?php
                if ($consulta["us_perfil"] == 1){
                    echo "Usuário Comum";
                }else{
                    echo "Administrador";
                }
                ?>
            </li>
        </ul>
    </div>