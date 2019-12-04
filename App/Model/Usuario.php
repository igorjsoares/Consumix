<?php
namespace App\Model;

class Usuario {

    private $id, $nome, $email, $telefone, $regional, $cpf, $perfil, $status, $senha, $cansaco;

    //tratamento id
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $this->id = $id;
    }

    //tratamento nome
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $nome = filter_var($nome, FILTER_SANITIZE_STRING);
        $this->nome = strtoupper($nome);
    }

    //tratamento email
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = strtolower($email);
    }

    //tratamento telefone
    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($telefone) {
        $telefone = filter_var($telefone, FILTER_SANITIZE_NUMBER_INT);
        $telefone = str_replace("-", "", $telefone);
        $this->telefone = $telefone;
    }

    //tratamento regional
    public function getRegional() {
        return $this->regional;
    }
    public function setRegional($regional) {
        $this->regional = $regional;
    }

    //tratamento cpf
    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($cpf) {
        $cpf = filter_var($cpf, FILTER_SANITIZE_NUMBER_INT);
        $cpf = str_replace("-", "", $cpf);
        $this->cpf = $cpf;
    }

    //tratamento perfil
    public function getPerfil() {
        return $this->perfil;
    }
    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    //tratamento status
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }

    //tratamento Senha
    public function setSenha($senha) {
        $senha = filter_var($senha, FILTER_SANITIZE_STRING);
        $this->senha = $senha;
    }
    public function getSenha() {
        return $this->senha;
    }

    /////PESSOAL, TIRAR MAIS TARDE
    public function setCansaco($cansaco) {
        $cansaco = filter_var($cansaco, FILTER_SANITIZE_NUMBER_INT);
        $this->cansaco = $cansaco;
    }
    public function getCansaco() {
        return $this->cansaco;
    }
}

