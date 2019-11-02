<?php
namespace App\Model;

class planosDao {

    /*public function criar(Cliente $clienteObj) {
        $sql = 'INSERT INTO tbl_clientes (id_usuario, nome, email, telefone, rg, cpf, endereco, nascimento, contato ) VALUES (:consultor, :nome, :email, :telefone, :rg, :cpf, :endereco, :nascimento, :contato)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':consultor', $clienteObj->getConsultor());
        $stmt->bindValue(':nome', $clienteObj->getNome());
        $stmt->bindValue(':email', $clienteObj->getEmail());
        $stmt->bindValue(':telefone', $clienteObj->getTelefone());
        $stmt->bindValue(':rg', $clienteObj->getRg());
        $stmt->bindValue(':cpf', $clienteObj->getCpf());
        $stmt->bindValue(':endereco', $clienteObj->getEndereco());
        $stmt->bindValue(':nascimento', $clienteObj->getNascimento());
        $stmt->bindValue(':contato',$clienteObj->getContato());
        $resultado = $stmt->execute();

        return $resultado;

    }

    public function editar(Cliente $clienteObj) {
        $sql = 'UPDATE tbl_clientes SET id_usuario = :idConsultor, nome = :nome, email = :email, telefone = :telefone, rg = :rg, cpf = :cpf, endereco = :endereco, nascimento = :nascimento, contato = :contato WHERE id_cliente = :id';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':id', $clienteObj->getId());
        $stmt->bindValue(':idConsultor', $clienteObj->getConsultor());
        $stmt->bindValue(':nome', $clienteObj->getNome());
        $stmt->bindValue(':email', $clienteObj->getEmail());
        $stmt->bindValue(':telefone', $clienteObj->getTelefone());
        $stmt->bindValue(':rg', $clienteObj->getRg());
        $stmt->bindValue(':cpf', $clienteObj->getCpf());
        $stmt->bindValue(':endereco', $clienteObj->getEndereco());
        $stmt->bindValue(':nascimento', $clienteObj->getNascimento());
        $stmt->bindValue(':contato', $clienteObj->getContato());

        $resultado = $stmt->execute();

        return $resultado;
    }

    public function deletar($id) {
        
    }

    public function mostartodos(Cliente $clienteObj) {

        $sql = 'SELECT * FROM tbl_clientes';
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
    }*/

    public function mostrarUmFaixa(Plano $planoObj) {

        $sql = 'SELECT * FROM tbl_faixas WHERE faixa >= :valor_fipe AND tipo = 1 ORDER BY faixa ASC LIMIT 1';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':valor_fipe', $planoObj->getValor_fipe());
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

    public function mostrarUm(Plano $planoObj) {

        $sql = 'SELECT p.*, m.adesao, m.mensalidade FROM tbl_planos p, tbl_mensalidades m WHERE p.id_plano = m.id_plano AND m.id_faixa = :faixa AND p.nome = :nome_plano';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':faixa', $planoObj->getFaixa());
        $stmt->bindValue(':nome_plano', $planoObj->getNome_plano());
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

    public function mostrarOpcionais() {

        $sql = 'SELECT * FROM tbl_opcionais';
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

   /* public function comboConsultores() {

        $sql = 'SELECT id_usuario AS valor, nome AS name FROM tbl_usuarios ORDER BY nome ASC';
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
    }*/
}