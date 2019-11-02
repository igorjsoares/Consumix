<?php
namespace App\Model;

class Proposta {

    private $id, $idcliente, $placa, $chassi, $renavan, $ano, $modelo, $cor, $valor, $cod_fipe, $rastreador, $login_senha_rastreador, $situacao, $tipo_uso, $participacao, $plano, $vencimento, $avarias, $ip, $local, $nacionalidade, $combustivel, $rede_saude_tit, $combo_ben_vip, $carro_reserva_30, $observacao, $vistoria;

    //tratamento id
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $this->id = $id;
    }

    //tratamento idCliente
    public function getIdCliente() {
        return $this->idcliente;
    }
    public function setIdCliente($idcliente) {
        $idcliente = filter_var($idcliente, FILTER_SANITIZE_NUMBER_INT);
        $this->idcliente = $idcliente;
    }
    //tratamento placa
    public function getPlaca() {
        return $this->placa;
    }
    public function setPlaca($placa) {
        $placa = filter_var($placa, FILTER_SANITIZE_STRING);
        $this->placa = $placa;
    }

    //tratamento Chassi
    public function getChassi() {
        return $this->chassi;
    }
    public function setChassi($chassi) {
        $chassi = filter_var($chassi, FILTER_SANITIZE_STRING);
        $this->chassi = strtoupper($chassi);
    }

    //tratamento Renavan
    public function getRenavan() {
        return $this->renavan;
    }
    public function setRenavan($renavan) {
        $renavan = filter_var($renavan, FILTER_SANITIZE_STRING);
        $this->renavan = $renavan;
    }

    //tratamento Ano
    public function getAno() {
        return $this->ano;
    }
    public function setAno($ano) {
        $ano = filter_var($ano, FILTER_SANITIZE_NUMBER_INT);
        $this->ano = $ano;
    }

    //tratamento modelo
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $modelo = filter_var($modelo, FILTER_SANITIZE_STRING);
        $this->modelo = strtoupper($modelo);
    }

    //tratamento cor
    public function getCor() {
        return $this->cor;
    }
    public function setCor($cor) {
        $cor = filter_var($cor, FILTER_SANITIZE_STRING);
        $this->cor = $cor;
    }

    //tratamento Valor
    public function getValor() {
        return $this->valor;
    }
    public function setValor($valor) {
        $valor = str_replace("R$ ", "", $valor);
        $valor = str_replace(".", "", $valor);
        $valor = str_replace(",", ".", $valor);
        $valor = filter_var($valor, FILTER_SANITIZE_STRING);
        $this->valor = $valor;
    }

    //tratamento Codfipe
    public function getCod_fipe() {
        return $this->codfipe;
    }
    public function setCod_fipe($codfipe) {
        $codfipe = filter_var($codfipe, FILTER_SANITIZE_STRING);
        $this->codfipe = $codfipe;
    }

    //tratamento rastreador
    public function getRastreador() {
        return $this->rastreador;
    }
    public function setRastreador($rastreador) {
        $rastreador = filter_var($rastreador, FILTER_SANITIZE_STRING);
        $this->rastreador = $rastreador;
    }

    //tratamento Login_senha_rastreador
    public function getLogin_senha_rastreador() {
        return $this->login_senha_rastreador;
    }
    public function setLogin_senha_rastreador($login_senha_rastreador) {
        $login_senha_rastreador = filter_var($login_senha_rastreador, FILTER_SANITIZE_STRING);
        $this->login_senha_rastreador = $login_senha_rastreador;
    }

    //tratamento situacao
    public function getSituacao() {
        return $this->situacao;
    }
    public function setSituacao($situacao) {
        $situacao = filter_var($situacao, FILTER_SANITIZE_STRING);
        $this->situacao = $situacao;
    }

    //tratamento tipo_uso
    public function getTipo_uso() {
        return $this->tipo_uso;
    }
    public function setTipo_uso($tipo_uso) {
        $tipo_uso = filter_var($tipo_uso, FILTER_SANITIZE_STRING);
        $this->tipo_uso = $tipo_uso;
    }

    //tratamento nacionalidade
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade) {
        $nacionalidade = filter_var($nacionalidade, FILTER_SANITIZE_STRING);
        $this->nacionalidade = $nacionalidade;
    }

    //tratamento tipo_veículo
    public function getTipo_veiculo() {
        return $this->tipo_veiculo;
    }
    public function setTipo_veiculo($tipo_veiculo) {
        $tipo_veiculo = filter_var($tipo_veiculo, FILTER_SANITIZE_STRING);
        $this->tipo_veiculo = $tipo_veiculo;
    }

    //tratamento Plano
    public function getPlano() {
        return $this->plano;
    }
    public function setPlano($plano) {
        $plano = filter_var($plano, FILTER_SANITIZE_STRING);
        $this->plano = $plano;
    }

    //tratamento Vencimento
    public function getVencimento() {
        return $this->vencimento;
    }
    public function setVencimento($vencimento) {
        $vencimento = filter_var($vencimento, FILTER_SANITIZE_STRING);
        $this->vencimento = $vencimento;
    }

    //tratamento Avarias
    public function getAvarias() {
        return $this->avarias;
    }
    public function setAvarias($avarias) {
        $avarias = filter_var($avarias, FILTER_SANITIZE_STRING);
        $this->avarias = $avarias;
    }

    //tratamento Ip
    public function getIp() {
        return $this->ip;
    }
    public function setIp($ip) {
        $ip = filter_var($ip, FILTER_SANITIZE_STRING);
        $this->ip = $ip;
    }

    //tratamento Local
    public function getLocal() {
        return $this->local;
    }
    public function setLocal($local) {
        $local = filter_var($local, FILTER_SANITIZE_STRING);
        $this->local = $local;
    }

    //tratamento Combustivel
    public function getCombustivel() {
        return $this->combustivel;
    }
    public function setCombustivel($combustivel) {
        $combustivel = filter_var($combustivel, FILTER_SANITIZE_STRING);
        $this->combustivel = $combustivel;
    }

    //tratamento Rede_saude_tit
    public function getRede_saude_tit() {
        return $this->rede_saude_tit;
    }
    public function setRede_saude_tit($rede_saude_tit) {
        $rede_saude_tit = filter_var($rede_saude_tit, FILTER_SANITIZE_STRING);
        $this->rede_saude_tit = $rede_saude_tit;
    }

    //tratamento Combo_ben_vip
    public function getCombo_ben_vip() {
        return $this->combo_ben_vip;
    }
    public function setCombo_ben_vip($combo_ben_vip) {
        $combo_ben_vip = filter_var($combo_ben_vip, FILTER_SANITIZE_STRING);
        $this->combo_ben_vip = $combo_ben_vip;
    }

    //tratamento Carro_reserva_30
    public function getCarro_reserva_30() {
        return $this->carro_reserva_30;
    }
    public function setCarro_reserva_30($carro_reserva_30) {
        $carro_reserva_30 = filter_var($carro_reserva_30, FILTER_SANITIZE_STRING);
        $this->carro_reserva_30 = $carro_reserva_30;
    }

    //tratamento Observacao
    public function getObservacao() {
        return $this->observacao;
    }
    public function setObservacao($observacao) {
        $observacao = filter_var($observacao, FILTER_SANITIZE_STRING);
        $this->observacao = $observacao;
    }

     //tratamento Vistoria
    public function getVistoria() {
        return $this->vistoria;
    }
    public function setVistoria($vistoria) {
        $vistoria = filter_var($vistoria, FILTER_SANITIZE_STRING);
        $this->vistoria = $vistoria;
    }
}

