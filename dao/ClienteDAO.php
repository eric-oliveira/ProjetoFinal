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

    public function atualizar(Cliente $cliente)
    {
        // $provider = new MySqliProvider();

        // $mysqli = $provider->provide();
    
        // $stmt = $mysqli->prepare('UPDATE produtos SET (numero_registro=?, descricao=?) WHERE id_produto=?;');
        // $stmt->bind_param('ssi', $produto->numeroRegistro,$produto->descricao, $produto->id);
    
        // return $stmt->execute();    
    }

    public function remover(Cliente $cliente)
    {
        // $provider = new MySqliProvider();

        // $mysqli = $provider->provide();
    
        // $stmt = $mysqli->prepare('DELETE FROM produto WHERE id_produto=?;');
        
        // $stmt->execute();
        
        // $stmt->bind_param('i', $produto->id);
    
        // return $stmt->execute();       
    }

    public function buscarTodos():Array{
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

    public function buscarPorId($id)
    {
        $provider = new MySqliProvider();

        $mysqli= $provider->provide();
    
        $stmt = $mysqli->prepare('SELECT id, id_empresa, nome, pais FROM clientes WHERE id=?;');
        $stmt->bind_param('i', $id);
        
        $stmt->execute();

        /* bind result variables */
        $stmt->bind_result($id, $idEmpresa, $nome, $pais);
        
        if ($stmt->fetch())
        {
            return new Cliente($id, $idEmpresa, $nome, $pais);
        }
        return null;
    }
}
?>