<?php 
require_once("../model/Venda.php");
require_once("../config/mysqli_provider.class.php");
// Classe responsável pela persistência e captura dos dados dos produtos
class VendaDAO{
    private $empresas;

    public function __construct(){
        
    }

    public static function insere(Venda $venda){
        $provider = new MySqliProvider();
        $mysqli = $provider->provide();
        $stmt = $mysqli->prepare('INSERT INTO vendas (id_empresa, id_cliente, data, valor, dolar) VALUES (?,?,?,?,?);');
        $stmt->bind_param('sssdd', $venda->getIdEmpresa(), $venda->getIdCliente(), date("Y-m-d", strtotime($venda->getData())), $venda->getValor(), $venda->getDolar());
        $stmt->execute();
        $venda->setId($mysqli->insert_id);
    }

    public static function buscarTodos():Array{
        $provider = new MySqliProvider();
        $mysqli= $provider->provide();
        $stmt = $mysqli->prepare('SELECT * FROM vendas');
        $stmt->execute();
        /* bind result variables */
        $stmt->bind_result($id, $idEmpresa, $idCliente, $data, $valor, $dolar);
        $result= array();
        while ($stmt->fetch()){
            $venda = new Venda($id, $idEmpresa, $idCliente, $data, $valor, $dolar);
            $result[] = $venda;
        }
        return $result;
    }

    public static function buscarTodosJoin(){
        $provider = new MySqliProvider();
        $mysqli = $provider->provide();
        $stmt = $mysqli->prepare('SELECT v.id, e.razaosocial, c.nome, DATE_FORMAT(v.data, "%d/%m/%Y"), v.valor, v.dolar
                                  FROM vendas AS v
                                  JOIN empresas AS e ON e.id = v.id_empresa
                                  JOIN clientes AS c ON c.id = v.id_cliente');
        $stmt->execute();
        $stmt->bind_result($id, $razaoSocial, $cliente, $data, $valor, $dolar);
        $result= array();
        while ($stmt->fetch()){
            $venda = new Venda($id, $razaoSocial, $cliente, $data, $valor, $dolar);
            $result[] = $venda;
        }
        return $result;
    }

    public static function buscarPorId($id){
        $provider = new MySqliProvider();
        $mysqli= $provider->provide();
        $stmt = $mysqli->prepare('SELECT id, id_empresa, id_cliente, data, valor, dolar FROM vendas WHERE id=?;');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        /* bind result variables */
        $stmt->bind_result($id, $idEmpresa, $idCliente, $data, $valor, $dolar);
        if ($stmt->fetch()){
            return new Venda($id, $idEmpresa, $idCliente, $data, $valor, $dolar);
        }
        return null;
    }
}
?>