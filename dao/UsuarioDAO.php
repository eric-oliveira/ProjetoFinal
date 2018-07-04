<?php 
require_once("../model/Sessao.php");
require_once("../model/Usuario.php");
require_once("../config/mysqli_provider.class.php");

class UsuarioDAO{
    private $usuarios;

    public function UsuarioDAO()
    {
    }

    public static function insere(Usuario $usuario){
        $provider = new MySqliProvider();
        $mysqli = $provider->provide();
        $stmt = $mysqli->prepare('INSERT INTO usuarios (usuario, email, senha, tipo, id_empresa) VALUES (?,?,?, '.$usuario->getPerfil().', '.$usuario->getIdEmpresa().');');
        $stmt->bind_param('sss', $nome, $email, $senha);
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        $stmt->execute();
        $usuario->setId($mysqli->insert_id);
    }

    public function atualizar(Usuario $usuario)
    {
        // $provider = new MySqliProvider();

        // $mysqli = $provider->provide();
    
        // $stmt = $mysqli->prepare('UPDATE usuarios SET (user=?, senha=?, nome=?) WHERE id_usuario=?;');
        // $stmt->bind_param('sssi', $usuario->user,$usuario->senha, $usuario->nome, $usuario->id);
    
        // return $stmt->execute();    
    }

    public function remover( Usuario $usuario)
    {
        // $provider = new MySqliProvider();

        // $mysqli = $provider->provide();
    
        // $stmt = $mysqli->prepare('DELETE FROM usuarios WHERE id_usuario=?;');
        // $stmt->bind_param('i', $usuario->id);
    
        // return $stmt->execute();       
    }

    public function buscarTodos():Array
    {
        // $provider = new MySqliProvider();

        // $mysqli= $provider->provide();

        // $stmt = $mysqli->prepare('SELECT id_usuario, user, senha, nome FROM usuarios ORDER BY nome;');

        // $stmt->execute();

        // $stmt->bind_result($id, $user, $senha, $nome);

        // $result= array();

        // while ($stmt->fetch())
        // {
        //     $result[] = new Usuario($id,$nome, $user, $senha);
        // }
            
        // return $result;
    }
    
    public function buscarPorUsuario($usuario){
        $provider = new MySqliProvider();
        $mysqli= $provider->provide();
        $stmt = $mysqli->prepare('SELECT * FROM usuarios WHERE usuario=?;');
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        /* bind result variables */
        $stmt->bind_result($id, $usuario, $email, $senha, $perfil, $idEmpresa);

        if ($stmt->fetch()){
            return new Usuario($id, $usuario, $email, $senha, $perfil, $idEmpresa);
        } 
        return null;
    }
}
?>