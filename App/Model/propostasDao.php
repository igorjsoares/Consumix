<?php
namespace App\Model;

class propostasDao {

    public function criar(Proposta $propostaObj) {
        $sql = "INSERT INTO tbl_propostas (id_cliente, placa, chassi, renavan, ano, modelo, combustivel, cor, valor, cod_fipe, rastreador, login_senha_rastreador, situacao, tipo_uso, nacionalidade, tipo_veiculo, plano, vencimento, rede_saude_tit, combo_ben_vip, carro_reserva_30, observacao, vistoria ) VALUES (:id_cliente, :placa, :chassi, :renavan, :ano, :modelo, :combustivel, :cor, :valor, :cod_fipe, :rastreador, :login_senha_rastreador, :situacao, :tipo_uso, :nacionalidade, :tipo_veiculo, :plano, :vencimento, :rede_saude_tit, :combo_ben_vip, :carro_reserva_30, :observacao, 'Pendente')";
        echo $sql;
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':id_cliente', $propostaObj->getIdCliente());
        $stmt->bindValue(':placa', $propostaObj->getPlaca());
        $stmt->bindValue(':chassi', $propostaObj->getChassi());
        $stmt->bindValue(':renavan', $propostaObj->getRenavan());
        $stmt->bindValue(':ano', $propostaObj->getAno());
        $stmt->bindValue(':modelo', $propostaObj->getModelo());
        $stmt->bindValue(':combustivel', $propostaObj->getCombustivel());
        $stmt->bindValue(':cor', $propostaObj->getCor());
        $stmt->bindValue(':valor', $propostaObj->getValor());
        $stmt->bindValue(':cod_fipe', $propostaObj->getCod_fipe());
        $stmt->bindValue(':rastreador', $propostaObj->getRastreador());
        $stmt->bindValue(':login_senha_rastreador', $propostaObj->getLogin_senha_rastreador());
        $stmt->bindValue(':situacao',$propostaObj->getSituacao());
        $stmt->bindValue(':tipo_uso',$propostaObj->getTipo_uso());
        $stmt->bindValue(':nacionalidade',$propostaObj->getNacionalidade());
        $stmt->bindValue(':tipo_veiculo',$propostaObj->getTipo_veiculo());
        $stmt->bindValue(':plano', $propostaObj->getPlano());
        $stmt->bindValue(':vencimento', $propostaObj->getVencimento());
        $stmt->bindValue(':rede_saude_tit', $propostaObj->getRede_saude_tit());
        $stmt->bindValue(':combo_ben_vip', $propostaObj->getCombo_ben_vip());
        $stmt->bindValue(':carro_reserva_30', $propostaObj->getCarro_reserva_30());
        $stmt->bindValue(':observacao', $propostaObj->getObservacao());
        $resultado = $stmt->execute();
        //echo $sql;
        return $resultado;

    }

    public function editar(Proposta $propostaObj) {
        $sql = 'UPDATE tbl_propostas SET id_cliente = :id_cliente, placa = :placa, chassi = :chassi, renavan = :renavan, ano = :ano, modelo = :modelo, cor = :cor, valor = :valor, cod_fipe = :cod_fipe, rastreador = :rastreador, login_senha_rastreador = :login_senha_rastreador, situacao = :situacao, tipo_uso = :tipo_uso, nacionalidade = :nacionalidade, tipo_veiculo = :tipo_veiculo, plano = :plano, vencimento = :vencimento, rede_saude_tit = :rede_saude_tit, combo_ben_vip = :combo_ben_vip, carro_reserva_30 = $carro_reserva_30, observacao = :observacao WHERE id_proposta = :id';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':id', $propostaObj->getId());
        $stmt->bindValue(':id_cliente', $propostaObj->getIdCliente());
        $stmt->bindValue(':placa', $propostaObj->getPlaca());
        $stmt->bindValue(':chassi', $propostaObj->getChassi());
        $stmt->bindValue(':renavan', $propostaObj->getRenavan());
        $stmt->bindValue(':ano', $propostaObj->getAno());
        $stmt->bindValue(':modelo', $propostaObj->getModelo());
        $stmt->bindValue(':cor', $propostaObj->getCor());
        $stmt->bindValue(':valor', $propostaObj->getValor());
        $stmt->bindValue(':cod_fipe', $propostaObj->getCod_fipe());
        $stmt->bindValue(':rastreador', $propostaObj->getRastreador());
        $stmt->bindValue(':login_senha_rastreador', $propostaObj->getLogin_senha_rastreador());
        $stmt->bindValue(':situacao',$propostaObj->getSituacao());
        $stmt->bindValue(':tipo_uso',$propostaObj->getTipo_uso());
        $stmt->bindValue(':nacionalidade',$propostaObj->getNacionalidade());
        $stmt->bindValue(':tipo_veiculo',$propostaObj->getTipo_veiculo());
        $stmt->bindValue(':plano', $propostaObj->getPlano());
        $stmt->bindValue(':vencimento', $propostaObj->getVencimento());
        $stmt->bindValue(':rede_saude_tit', $propostaObj->getRede_saude_tit());
        $stmt->bindValue(':combo_ben_vip', $propostaObj->getCombo_ben_vip());
        $stmt->bindValue(':carro_reserva_30', $propostaObj->getCarro_reserva_30());
        $stmt->bindValue(':observacao', $propostaObj->getObservacao());

        $resultado = $stmt->execute();

        return $resultado;
    }

    public function editarVistoria(Proposta $propostaObj) {
        $sql = "UPDATE tbl_propostas SET vistoria = :vistoria WHERE id_proposta = :id";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':id', $propostaObj->getId());
        $stmt->bindValue(':vistoria', $propostaObj->getVistoria());

        $resultado = $stmt->execute();

        return $resultado;
    }

    public function editarIp(Proposta $propostaObj) {
        $sql = "UPDATE tbl_propostas SET ip = :ip WHERE id_proposta = :id";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':ip', $propostaObj->getIp());
        $stmt->bindValue(':id', $propostaObj->getId());

        $resultado = $stmt->execute();

        return $resultado;
    }

    public function editarLocal(Proposta $propostaObj) {
        $sql = "UPDATE tbl_propostas SET local = :local WHERE id_proposta = :id";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':local', $propostaObj->getLocal());
        $stmt->bindValue(':id', $propostaObj->getId());

        $resultado = $stmt->execute();

        return $resultado;
    }

    public function deletar($id) {

    }

    public function mostartodos() {

        $sql = 'SELECT p.*, c.nome AS cliente FROM tbl_propostas p, tbl_clientes c WHERE p.id_cliente = c.id_cliente';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        //echo $sql;
        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            $resultado = 0;
            return $resultado;
        endif;
    }

    public function mostrarUm(Proposta $propostaObj) {

        $sql = 'SELECT p.*, c.* FROM tbl_propostas p, tbl_clientes c WHERE p.id_cliente = c.id_cliente AND p.id_proposta = :id';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':id', $propostaObj->getId());
        $stmt->execute();
        //echo $sql;
        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            $resultado = 0;
            return $resultado;
        endif;
    }

    public function mostrarUmPlaca(Proposta $propostaObj) {

        $sql = 'SELECT p.*, c.nome AS cliente, c.cpf AS cpf, p.vistoria AS vistoria FROM tbl_propostas p, tbl_clientes c WHERE p.id_cliente = c.id_cliente AND p.placa = :placa';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':placa', $propostaObj->getPlaca());
        $stmt->execute();
        //echo $sql;
        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            $resultado = 0;
            return $resultado;
        endif;
    }

    public function comboClientes() {

        $sql = 'SELECT id_cliente AS valor, nome AS name FROM tbl_clientes ORDER BY nome ASC';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        //echo $sql;
        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            $resultado = 0;
            return $resultado;
        endif;
    }

    public function comboCores() {

        $sql = 'SELECT * FROM tbl_cores ORDER BY name ASC';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        //echo $sql;
        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            $resultado = 0;
            return $resultado;
        endif;
    }
}