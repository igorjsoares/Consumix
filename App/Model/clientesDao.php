<?php
namespace App\Model;

class clientesDao {

    public function criar(Cliente $clienteObj) {
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
    }

    public function mostrarUm(Cliente $clienteObj) {

        $sql = 'SELECT cli.*, u.nome AS consultor FROM tbl_clientes cli, tbl_usuarios u WHERE cli.id_usuario = u.id_usuario AND cli.id_cliente = :id_cliente';
        $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(':id_cliente', $clienteObj->getId());
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

    public function comboConsultores() {

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
    }
}