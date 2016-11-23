<?php

require_once("conexao.php");

class usuarioDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    public function cadastrarUsuario(usuario $entUsuario) {
        try {
            $stmt = $this->pdo->prepare("insert into usuario "
                    . "(us_nome, us_email, us_telefone, us_senha, us_imagem, us_datanascimento, us_cidade, us_estado, us_rua, us_bairro, us_cep, us_status, us_perfil) "
                    . "values "
                    . "(:nome, :email, :telefone, :senha, :imagem, :datanascimento, :cidade, :estado, :rua, :bairro, :cep, :status, :perfil)");

            $param = array(
                ":nome" => $entUsuario->getNome(),
                ":email" => $entUsuario->getEmail(),
                "telefone" => $entUsuario->getTelefone(),
                ":senha" => $entUsuario->getSenha(),
                ":imagem" => $entUsuario->getImagem(),
                ":datanascimento" => $entUsuario->getDataNascimento(),
                ":cidade" => $entUsuario->getCidade(),
                ":estado" => $entUsuario->getEstado(),
                ":rua" => $entUsuario->getRua(),
                ":bairro" => $entUsuario->getBairro(),
                ":cep" => $entUsuario->getCep(),
                ":status" => 0,
                ":perfil" => 1
            );
            $stmt->execute($param);

            return true;
        } catch (PDOException $ex) {
            echo "ERRO 01: {$ex->getMessage()}";
        }
    }

    public function consultarIdPorEmail($us_email) {
        try {
            $stmt = $this->pdo->prepare("SELECT us_cod FROM usuario WHERE us_email = :us_email");

            $param = array(":us_email" => $us_email);

            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                $consultaCod = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consultaCod['us_cod'];
            } else {
                return "";
            }
        } catch (Exception $ex) {
            echo "ERRO 02: {$ex->getMessage()}";
        }
    }

    public function validarUsuario($us_email, $us_senha) {
        try {
            $stmt = $this->pdo->prepare("SELECT us_email, us_senha FROM usuario WHERE us_email = :us_email and us_senha = :us_senha");
            $param = array(
                ":us_email" => $us_email,
                "us_senha" => md5($us_senha)
            );

            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 03: {$ex->getMessage()}";
        }
    }

    public function retornarInformacoes($us_email) {
        try {

            $stmt = $this->pdo->prepare("SELECT us_cod, us_nome, us_email, us_imagem, us_perfil FROM usuario WHERE us_email = :us_email");

            $param = array(":us_email" => $us_email);

            $stmt->execute($param);
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
            
        } catch (PDOException $ex) {
            echo "ERRO 04: {$ex->getMessage()}";
        }
    }


    public function retornarTodosusuarios() {
        try {

            $stmt = $this->pdo->prepare("SELECT us_cod, us_nome, us_email, us_imagem, us_perfil FROM usuario ");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $ex) {
            echo "ERRO 05: {$ex->getMessage()}";
        }
    }
    public function retornarTodosInformacoesUsuario() {
        try {


            $stmt = $this->pdo->prepare("SELECT * FROM usuario INNER JOIN pessoa_fisica on pessoa_fisica.us_cod = usuario.us_cod WHERE usuario.us_cod = :us_cod");
            $param = array(":us_cod" => $us_cod);

            $stmt->execute( $param);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $ex) {
            echo "ERRO 06: {$ex->getMessage()}";
        }
    }

}

?>