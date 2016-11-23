<?php

class fisica{
    private $cpf;
    private $usuarioCod;
    
    public function getUsuarioCod() {
        return $this->usuarioCod;
    }

    public function setUsuarioCod($usuarioCod) {
        
        $this->usuarioCod = $usuarioCod;
    }

        public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        
         //valida CPF
        
        $this->cpf = $cpf;
    }


}