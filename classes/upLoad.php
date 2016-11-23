<?php

class upLoad {

    function upLoadFile($arquivo, $diretorio, $extencao) {

        $pasta = $diretorio;
        $tamanho = 1024 * 1024 * 20;
       
        $renomeia = true;

        if ($tamanho < $arquivo['size']) {

        }
        if ($renomeia == true) {
            // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
            $nomeFinal = time() . $extencao;
        } else {

            $nomeFinal = $arquivo['name'];
        }
        if (move_uploaded_file($arquivo['tmp_name'], $pasta . $nomeFinal)) {

            return $nomeFinal;
        } else {
            // Não foi possível fazer o upload, provavelmente a pasta está incorreta

            return null;
        }
    }
}

?>
