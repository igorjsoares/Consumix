<?php
namespace App\Model;

class usuariosDao {

    public function criar(Usuario $usuarioObj) {
        $sql = 'INSERT INTO tbl_usuarios (nome, email, telefone, regional, cpf, perfil, status, senha ) VALUES (:nome, :email, :telefone, :regional, :cpf, :perfil, :status, :senha)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':nome', $usuarioObj->getNome());
        $stmt->bindValue(':email', $usuarioObj->getEmail());
        $stmt->bindValue(':telefone', $usuarioObj->getTelefone());
        $stmt->bindValue(':regional', $usuarioObj->getRegional());
        $stmt->bindValue(':cpf', $usuarioObj->getCpf());
        $stmt->bindValue(':perfil', $usuarioObj->getPerfil());
        $stmt->bindValue(':status', $usuarioObj->getStatus());
        $stmt->bindValue(':senha', md5($usuarioObj->getSenha()));
        $resultado = $stmt->execute();

        return $resultado;

    }

    public function editar(Usuario $usuarioObj) {
        $sql = 'UPDATE tbl_usuarios SET nome = :nome, email = :email, telefone = :telefone, regional = :regional, cpf = :cpf, perfil = :perfil WHERE id_usuario = :id';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':id', $usuarioObj->getId());
        $stmt->bindValue(':nome', $usuarioObj->getNome());
        $stmt->bindValue(':email', $usuarioObj->getEmail());
        $stmt->bindValue(':telefone', $usuarioObj->getTelefone());
        $stmt->bindValue(':regional', $usuarioObj->getRegional());
        $stmt->bindValue(':cpf', $usuarioObj->getCpf());
        $stmt->bindValue(':perfil', $usuarioObj->getPerfil());

        $resultado = $stmt->execute();

        return $resultado;
    }

    public function bloquear(Usuario $usuarioObj) {
        $sql = "UPDATE tbl_usuarios SET status = 'Bloqueado' WHERE id_usuario = :id";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':id', $usuarioObj->getId());

        $resultado = $stmt->execute();

        return $resultado;
    }

    public function deletar($id) {
        
    }

    public function mostartodos(Usuario $usuarioObj) {

        $sql = 'SELECT u.id_usuario, u.nome, u.email, u.telefone, u.regional, r.regional AS nome_regional, u.CPF, u.perfil, u.status FROM tbl_usuarios u, tbl_regional r WHERE r.id_regional = u.regional';
        $stmt = Conexao::getConn()->prepare($sql);
            //$stmt->bindValue(':nome', $nomeconsulta);
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

    public function mostrarUm(Usuario $usuarioObj) {

        $sql = 'SELECT u.id_usuario, u.nome, u.cpf, u.email, u.telefone, u.regional, r.regional AS nome_regional, u.CPF, u.perfil, u.status FROM tbl_usuarios u, tbl_regional r WHERE r.id_regional = u.regional AND u.id_usuario = :id_usuario';
        $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(':id_usuario', $usuarioObj->getId());
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

    public function logar(Usuario $usuarioObj) {
        
    
    //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT id_usuario, nome, email, login, perfil, status FROM tbl_usuarios WHERE email = :email AND senha = :senha';


            $stmt = Conexao::getConn()->prepare($sql);

            
            $stmt->bindValue(':email', $usuarioObj->getEmail());
            $stmt->bindValue(':senha', md5($usuarioObj->getSenha()));

            $stmt->execute() or exit(print_r($stmt->errorInfo(), true));

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            $resultado = 0;
            return $resultado;
        endif;
        
    }

    public function novaSenha(Usuario $usuarioObj) {

        //Vai verificar se o e-mail digitado existe da base de dados
            //caso exista, vai [apos criar uma coluna para isso] alterar a coluna de solicitaçao de senha para a data atual e enviar um link para o e-mail, onde será encaminhado para uma pagina HTML que verificará a coluna entenderá se ainda está no prazo (por exemplo, expira em 6h), essa página irá conter os campos de nova senha.
            //Caso não exista retornará um modal.
    }

    public function comboRegional() {

        $sql = 'SELECT * FROM tbl_regional';
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