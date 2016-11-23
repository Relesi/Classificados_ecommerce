<?php

require_once("conexao.php");

class fisicaDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    public function cadastrar(fisica $entFisica) {
        //Cadastra CPF de usuário
        try {
            $stmt = $this->pdo->prepare("INSERT INTO pessoa_fisica VALUES (:pesf_cpf, :us_cod)");
                    
            $param = array(
                ":us_cod" => $entFisica->getUsuarioCod(),
                ":pesf_cpf" => $entFisica->getCpf()
            );
            
            return $stmt->execute($param);
            
        } catch (PDOException $ex) {
            echo "Erro 01: {$ex->getMessage()}";
        }
    }

}

?>