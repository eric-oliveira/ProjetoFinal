<?php 
require_once("../model/Cliente.php");
require_once("../config/mysqli_provider.class.php");
// Classe responsável pela persistência e captura dos dados dos produtos
class ClienteDAO{
    private $clientes;

    public function ClienteDAO(){
        
    }

    public static function insere(Cliente $cliente){
        $provider = new MySqliProvider();
        $mysqli = $provider->provide();
        $stmt = $mysqli->prepare('INSERT INTO clientes (id_empresa, nome, pais) VALUES (?,?,?);');
        $stmt->bind_param('sss', $cliente->getIdEmpresa(), $cliente->getNome(), $cliente->getPais());
        $stmt->execute();
        $cliente->setId($mysqli->insert_id);
    }

    public static function buscarTodos():Array{
        $provider = new MySqliProvider();
        $mysqli= $provider->provide();
        $stmt = $mysqli->prepare('SELECT * 
                                  FROM clientes');
        $stmt->execute();
        /* bind result variables */
        $r = $stmt->bind_result($id, $idEmpresa, $nome, $pais);
        $result= array();
        while ($stmt->fetch()){
            $cliente = new Cliente($id, $idEmpresa, $nome, $pais);
            $result[] = $cliente;
        }
        return $result;
    }

    public static function buscarListaCliente($idEmpresa):Array{
        $provider = new MySqliProvider();
        $mysqli= $provider->provide();
        $stmt = $mysqli->prepare('SELECT * 
                                  FROM clientes
                                  WHERE id_empresa = ?;');
        $stmt->bind_param('i', $idEmpresa);
        $stmt->execute();
        /* bind result variables */
        $r = $stmt->bind_result($id, $idEmpresa, $nome, $pais);
        $result= array();
        while ($stmt->fetch()){
            $cliente = new Cliente($id, $idEmpresa, $nome, $pais);
            $result[] = $cliente;
        }
        return $result;
    }

    public static function buscarPorId($id){
        $provider = new MySqliProvider();
        $mysqli= $provider->provide();
        $stmt = $mysqli->prepare('SELECT id, id_empresa, nome, pais FROM clientes WHERE id=?;');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        /* bind result variables */
        $stmt->bind_result($id, $idEmpresa, $nome, $pais);
        if ($stmt->fetch()){
            return new Cliente($id, $idEmpresa, $nome, $pais);
        }
        return null;
    }

    public static function buscarTodosJoin(){
        $provider = new MySqliProvider();
        $mysqli= $provider->provide();
        $stmt = $mysqli->prepare('SELECT c.id, e.razaosocial, c.nome, c.pais
                                  FROM clientes AS c
                                  JOIN empresas AS e ON e.id = c.id_empresa');
        $stmt->execute();
        /* bind result variables */
        $r = $stmt->bind_result($id, $razaoSocial, $nome, $pais);
        $result= array();
        while ($stmt->fetch()){
            $cliente = new Cliente($id, $razaoSocial, $nome, $pais);
            $result[] = $cliente;
        }
        return $result;
    }
}
?>