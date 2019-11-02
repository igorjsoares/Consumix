<?php
namespace App\Model;

class Plano {

    private $id, $valor, $faixa, $valor_fipe, $nome_plano;

    /*, $nome, $cob_roubo_furto_passeio, $cob_roubo_furto_util, $cob_roubo_furto_ubertaxi, $cob_roubo_furto_regular, $cob_roubo_furto_sin_salv, $cob_roubo_furto_rec_finan, $desastres_naturais, $auto_soc_pos_pane, $auto_soc_pos_sini, $chav_troca_pneus, $taxi_transpalernativo, $assis_bonus, $vidros_farois_retro, $carro_reserva, $protecao_3, $desp_med, $inden_morte, $aux_funeral, $combo_ben_vip, $rastreamento_24, $rede_saude_tit, $prop_compra_sin, $carro_reserva_30, $tx_part_nacional, $tx_part_importado, $tx_part_import_especial, $tx_part3_nacional, $tx_part3_importado, $tx_part3_import_especial, $part_vidros_farios_retro*/

    //tratamento id
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $this->id = $id;
    }

    //tratamento Valor
    public function getValor() {
        return $this->valor;
    }
    public function setValor($valor) {
        $valor = filter_var($valor, FILTER_SANITIZE_STRING);
        $this->valor = $valor;
    }

    //tratamento Faixa
    public function getFaixa() {
        return $this->faixa;
    }
    public function setFaixa($faixa) {
        $faixa = filter_var($faixa, FILTER_SANITIZE_STRING);
        $this->faixa = $faixa;
    }

    //tratamento Valor_fipe
    public function getValor_fipe() {
        return $this->valor_fipe;
    }
    public function setValor_fipe($valor_fipe) {
        $valor_fipe = filter_var($valor_fipe, FILTER_SANITIZE_STRING);
        $this->valor_fipe = $valor_fipe;
    }

    //tratamento Nome_plano
    public function getNome_plano() {
        return $this->nome_plano;
    }
    public function setNome_plano($nome_plano) {
        $nome_plano = filter_var($nome_plano, FILTER_SANITIZE_STRING);
        $this->nome_plano = $nome_plano;
    }



/*$nome, 
$cob_roubo_furto_passeio,
 $cob_roubo_furto_util, 
 $cob_roubo_furto_ubertaxi, 
 $cob_roubo_furto_regular, 
 $cob_roubo_furto_sin_salv, 
 $cob_roubo_furto_rec_finan, 
 $desastres_naturais, 
 $auto_soc_pos_pane, 
 $auto_soc_pos_sini, 
 $chav_troca_pneus, 
 $taxi_transpalernativo, 
 $assis_bonus, 
 $vidros_farois_retro, 
 $carro_reserva,
 $protecao_3, $desp_med,
  $inden_morte, 
  $aux_funeral, 
  $combo_ben_vip, 
  $rastreamento_24, 
  $rede_saude_tit, 
  $prop_compra_sin, 
  $carro_reserva_30, 
  $tx_part_nacional, 
  $tx_part_importado, 
  $tx_part_import_especial, 
  $tx_part3_nacional, 
  $tx_part3_importado, 
  $tx_part3_import_especial, 
  $part_vidros_farios_retro*/


}

