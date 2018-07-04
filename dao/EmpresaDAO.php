<?php 
require_once("../model/Empresa.php");
require_once("../config/mysqli_provider.class.php");

// Classe responsável pela persistência e captura dos dados dos produtos
class EmpresaDAO{
    private $empresas;

    public function EmpresaDAO(){
        
    }

    public static function insere(Empresa $empresa){
        $provider = new MySqliProvider();
        $mysqli = $provider->provide();
        $stmt = $mysqli->prepare('INSERT INTO empresas (razaosocial, pais, moeda) VALUES (?,?,?);');
        $stmt->bind_param('sss', $razaosocial, $pais, $moeda);
        $razaosocial = $empresa->getRazaoSocial();
        $pais = $empresa->getPais();
        $moeda = $empresa->getMoeda();
        $stmt->execute();
        $empresa->setId($mysqli->insert_id);
    }

    public function atualizar(Empresa $empresa)
    {
        // $provider = new MySqliProvider();

        // $mysqli = $provider->provide();
    
        // $stmt = $mysqli->prepare('UPDATE produtos SET (numero_registro=?, descricao=?) WHERE id_produto=?;');
        // $stmt->bind_param('ssi', $produto->numeroRegistro,$produto->descricao, $produto->id);
    
        // return $stmt->execute();    
    }

    public function remover( Empresa $empresa)
    {
        // $provider = new MySqliProvider();

        // $mysqli = $provider->provide();
    
        // $stmt = $mysqli->prepare('DELETE FROM produto WHERE id_produto=?;');
        
        // $stmt->execute();
        
        // $stmt->bind_param('i', $produto->id);
    
        // return $stmt->execute();       
    }

    public function buscarTodos():Array
    {
        $provider = new MySqliProvider();
    
        $mysqli= $provider->provide();
        
        $stmt = $mysqli->prepare('SELECT id, razaosocial, pais, moeda FROM empresas;');

        $stmt->execute();

        /* bind result variables */
        $r = $stmt->bind_result($id, $razaoSocial, $pais, $moeda);

        $result= array();

        while ($stmt->fetch())
        {
            $empresa = new Empresa($id, $razaoSocial, $pais, $moeda);
            
            $result[] = $empresa;
        }

        return $result;
    }
    public function buscarPorId($id)
    {
        $provider = new MySqliProvider();

        $mysqli= $provider->provide();
    
        $stmt = $mysqli->prepare('SELECT id, razaosocial, pais, moeda FROM empresas WHERE id=?;');
        $stmt->bind_param('i', $id);
        
        $stmt->execute();

        /* bind result variables */
        $stmt->bind_result($id, $razaoSocial, $pais, $moeda);
        
        if ($stmt->fetch())
        {
            return new Empresa($id, $razaoSocial, $pais, $moeda);
        }
        return null;
    }
}
?>