<?php

class usuario {

    private $nome;
    private $email;
    private $telefone;
    private $senha;
    private $imagem;
    private $dataNascimento;
    private $cidade;
    private $estado;
    private $rua;
    private $bairro;
    private $cep;
    private $status;
    private $perfil;

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

}

?>