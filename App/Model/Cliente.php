<?php
namespace App\Model;

class Cliente {

    private $id, $nome, $email, $telefone, $rg, $cpf, $endereco, $nascimento, $contato, $consultor;

    //tratamento id
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $this->id = $id;
    }

    //tratamento consultor
    public function getConsultor() {
        return $this->consultor;
    }
    public function setConsultor($consultor) {
        $consultor = filter_var($consultor, FILTER_SANITIZE_STRING);
        $this->consultor = $consultor;
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

    //tratamento rg
    public function getRg() {
        return $this->rg;
    }
    public function setRg($rg) {
        $rg = filter_var($rg, FILTER_SANITIZE_STRING);
        $this->rg = strtoupper($rg);
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

    //tratamento Endereço
    public function getEndereco() {
        return $this->endereco;
    }
    public function setEndereco($endereco) {
        $endereco = filter_var($endereco, FILTER_SANITIZE_STRING);
        $this->endereco = $endereco;
    }

    //tratamento Nascimento
    public function getNascimento() {
        return $this->nascimento;
    }
    public function setNascimento($nascimento) {
        $nascimento = filter_var($nascimento, FILTER_SANITIZE_STRING);
        $this->nascimento = $nascimento;
    }

    //tratamento Contato
    public function getContato() {
        return $this->contato;
    }
    public function setContato($contato) {
        $contato = filter_var($contato, FILTER_SANITIZE_NUMBER_INT);
        $contato = str_replace("-", "", $contato);
        $this->contato = $contato;
    }
}

