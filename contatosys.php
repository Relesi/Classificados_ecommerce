<!doctype html>
<html lang="pt-br">
    <head>
        <title>Contato</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div id="dvCentro">
            <form name="frmContato" method="post">
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="txtNome" placeholder="nome" /></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="email" name="txtEmail" placeholder="mail" /></td>
                    </tr>
                    <tr>
                        <td>Assunto:</td>
                        <td><input type="text" name="txtAssunto" placeholder="Assunto" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">Mensagem:</td>
                    </tr>
                    <tr>
                        <td  colspan="2">
                            <textarea name="txtMensagem">
                                
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="btnSubmit" value="Enviar" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>