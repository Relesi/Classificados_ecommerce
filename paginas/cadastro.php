<?php
require_once("classes/upLoad.php");
require_once("classes/DAO/usuarioDAO.php");
require_once("classes/Entidade/usuario.php");

require_once("classes/DAO/fisicaDAO.php");
require_once("classes/Entidade/fisica.php");

$upLoad = new upLoad();
$usuarioDAO = new usuarioDAO();
$usuario = new usuario();
$fisicaDAO = new fisicaDAO();
$fisica = new fisica();
?>

<div id="dvCadastro">
    <h2>&raquo; Cadastre-se grátis.</h2>
    <br />

    <div id="dvRegrasCadastro">
        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo 
            utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou 
            para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto
            para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando 
            a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser 
            integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
    </div>

    <form method="post" name="frmCadastro" enctype="multipart/form-data">
        <table>
            <tr>
                <td class="textoComum">Nome:</td>
                <td><input type="text" name="txtNome" placeholder="Joana Dias" required class="inputFormulario" /></td>
            </tr>
            <tr>
                <td class="textoComum">E-mail:</td>
                <td><input type="email" name="txtEmail" placeholder="exemplo@exemplo.com" required class="inputFormulario" /></td>
            </tr>
            <tr>
                <td class="textoComum">Telefone:</td>
                <td><input type="tel" name="txtTelefone" required class="inputFormulario" /></td>
            </tr>        <tr>
                <td class="textoComum">Senha:</td>
                <td><input type="password" name="txtSenha" placeholder="*****" required id="senha1" class="inputFormulario" /></td>
            </tr>       
            <tr>
                <td class="textoComum">Confirmar senha:</td>
                <td><input type="password" name="txtSenhaValida" placeholder="*****" required id="senha2" class="inputFormulario" /></td>
            </tr>
            <tr>
                <td class="textoComum">Imagem:</td>
                <td><input type="file" name="flUsuario" required class="inputFormulario" /></td>
            </tr>
            <tr>
                <td class="textoComum">CPF:</td>
                <td><input type="text" name="txtCPF" placeholder="000.000.000-00" required class="inputFormulario" /></td>
            </tr>
            <tr>
                <td class="textoComum">Data Nascimento:</td>
                <td><input type="date" name="txtDataNascimento" required class="inputFormulario" /></td>
            </tr>
            <tr>
                <td class="textoComum">Cidade: </td>
                <td><input type="text" name="txtCidade" placeholder="Presidente Prudente" required class="inputFormulario" /></td>
            </tr>
            <tr>
                <td class="textoComum">Estado:</td>
                <td>
                    <select name="slEstado" class="inputFormulario"> 
                        <option value="">Selecione</option> 
                        <option value="ac">Acre</option> 
                        <option value="al">Alagoas</option> 
                        <option value="am">Amazonas</option> 
                        <option value="ap">Amapá</option> 
                        <option value="ba">Bahia</option> 
                        <option value="ce">Ceará</option> 
                        <option value="df">Distrito Federal</option> 
                        <option value="es">Espírito Santo</option> 
                        <option value="go">Goiás</option> 
                        <option value="ma">Maranhão</option> 
                        <option value="mt">Mato Grosso</option> 
                        <option value="ms">Mato Grosso do Sul</option> 
                        <option value="mg">Minas Gerais</option> 
                        <option value="pa">Pará</option> 
                        <option value="pb">Paraíba</option> 
                        <option value="pr">Paraná</option> 
                        <option value="pe">Pernambuco</option> 
                        <option value="pi">Piauí</option> 
                        <option value="rj">Rio de Janeiro</option> 
                        <option value="rn">Rio Grande do Norte</option> 
                        <option value="ro">Rondônia</option> 
                        <option value="rs">Rio Grande do Sul</option> 
                        <option value="rr">Roraima</option> 
                        <option value="sc">Santa Catarina</option> 
                        <option value="se">Sergipe</option> 
                        <option value="sp">São Paulo</option> 
                        <option value="to">Tocantins</option> 
                    </select>
                </td>
            </tr>
            <tr>
                <td class="textoComum">Rua:</td>
                <td><input type="text" name="txtRua" placeholder="Rua 10 nº 100" required class="inputFormulario" /></td>
            </tr> 
            <tr>
                <td class="textoComum">Bairro:</td>
                <td><input type="text" name="txtBairro" placeholder="P. Cedral" required class="inputFormulario" /></td>
            </tr>
            <tr>
                <td class="textoComum">Cep:</td>
                <td><input type="text" name="txtCep" placeholder="00000-000" required class="inputFormulario" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="ckTermo" id="ckTermo" /> <label for="ckTermo">Eu concordo com os termos de uso acima.</label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input style=" margin:5px;" type="submit" name="btnSubmit" value="&raquo; cadastrar" class="btnSubmit" /></td>
            </tr>
        </table>
    </form>
</div>

<?php
if (isset($_POST['btnSubmit'])) {

    if ($_POST['ckTermo']) {

        $nomeImagem = $upLoad->upLoadFile($_FILES['flUsuario'], "imgUsuarios/", ".jpg");

        if ($nomeImagem != null) {
            $usuario->setNome($_POST['txtNome']);
            $usuario->setEmail($_POST['txtEmail']);
            $usuario->setTelefone($_POST['txtTelefone']);
            $usuario->setSenha(md5($_POST['txtSenhaValida']));
            $usuario->setImagem($nomeImagem);
            $usuario->setDataNascimento($_POST['txtDataNascimento']);
            $usuario->setCidade($_POST['txtCidade']);
            $usuario->setEstado("PR");
            $usuario->setRua($_POST['txtRua']);
            $usuario->setBairro($_POST['txtBairro']);
            $usuario->setCep($_POST['txtCep']);
            
            if ($usuarioDAO->cadastrarUsuario($usuario)) {
                $codPessoa = $usuarioDAO->consultarIdPorEmail($_POST['txtEmail']);

                $fisica->setCpf($_POST['txtCPF']); //Pessoa Física.
                $fisica->setUsuarioCod($codPessoa);

                if ($fisicaDAO->cadastrar($fisica)) {
                    ?>
                    <script type="text/javascript">
                        alert("Usuário cadastrado com sucesso!");
                    </script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript">
                        alert("Erro ao cadastrar Usuário!");
                    </script>
                    <?php
                }
            }
        }
    }
}
?>