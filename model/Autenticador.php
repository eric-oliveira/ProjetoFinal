<?php
require_once("../model/Autenticacao.php");
require_once("../dao/UsuarioDAO.php");
require_once("../model/RetornoDaAutenticacao.php");
    class Autenticador{
        public function autenticar(string $usuario, string $senha):RetornoDaAutenticacao{
            $retorno = new RetornoDaAutenticacao();
            
            $rep = new UsuarioDAO();
            $usuario = $rep->buscarPorUsuario($usuario);
            
            if ($usuario == null)
            {
                $retorno->adicionarErro("Usuário não encontrado.");
                return $retorno;
            }
            
            if (!$usuario->validarSenha($senha))
            {
                $retorno->adicionarErro("Senha invália.");
                return $retorno;
            }

            $autenticacao = new Autenticacao($usuario->getId(), $usuario->getNome(), $usuario->getPerfil(), $usuario->getIdEmpresa(), date('d/m/Y H:i:s'));
            $retorno->setAutenticacao($autenticacao);

            return $retorno;
        }
    }
?>