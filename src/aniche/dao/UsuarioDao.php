<?php

namespace Aniche\TDD\Dao;

use Aniche\TDD\DAO\Usuario;

class UsuarioDao {
    private $connect;
    private $db;
    
    public function __construct($host, $username, $password, $database) {
        $this->connect = mysql_connect($host, $username, $password);
        $this->db = mysql_select_db($database);
    }

	public function porId($id) {

		$res = mysql_query("select * from usuario where id = " . $id, $this->connect) or die(mysql_error());
        
        if(mysql_num_rows($res) > 0) {
            for($i = 0; $i < mysql_num_rows($res); $i++) {
                $row = mysql_fetch_assoc($res);
                
                $u = new Usuario($row['nome'], $row['email'], $row['idade']);
                $u->setId($row['id']);
				$result[$i] = $u;
            }
        }
        return $result;

	}
	
    public function porIdade($menor, $maior) {

        $sql = "select * from usuario where idade between " . $menor . " and " . $maior;

        $res = mysql_query($sql, 
            $this->connect) or die(mysql_error());
    

        if(mysql_num_rows($res) > 0) {
            for($i = 0; $i < mysql_num_rows($res); $i++) {
                $row = mysql_fetch_assoc($res);
                
                $u = new Usuario($row['nome'], $row['email'], $row['idade']);
                $u->setId($row[id]);
                return $u;
            }
        }
        return null;
    }

	public function porNomeEEmail($nome, $email) {

		$sql = "select * from usuario where nome = '" . 
			$nome . "' and email = '" . $email . "'";

		$res = mysql_query($sql, 
			$this->connect) or die(mysql_error());
    

        if(mysql_num_rows($res) > 0) {
            for($i = 0; $i < mysql_num_rows($res); $i++) {
                $row = mysql_fetch_assoc($res);
                
                $u = new Usuario($row['nome'], $row['email'], $row['idade']);
                $u->setId($row[id]);
                return $u;
            }
        }
        return null;
	}
	
	public function salvar($usuario) {
		$sql = "INSERT INTO usuario (nome, email, idade) VALUES('".
                $usuario->getNome()."', '".
                $usuario->getEmail()."', " . $usuario->getIdade() . ")";
            
		mysql_query($sql, $this->connect) or die(mysql_error());
	}
	
	public function atualizar($usuario) {
		$sql = "UPDATE usuario set ".
                "nome = '" . $usuario->getNome()."', ".
                "idade = " . $usuario->getIdade().", ".
                "email = '" . $usuario->getEmail()."' where id = ".
                $usuario->getId();
            
		mysql_query($sql, $this->connect) or die(mysql_error());
	}
	
	public function deletar($usuario) {
		$sql = "delete from usuario where id = ".$usuario->getId();
            
		mysql_query($sql, $this->connect) or die(mysql_error());
	}


}

?>
