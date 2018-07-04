<?php
class Autenticacao{
    private $idUsuario;
    private $usuario;
    private $perfil;
    private $idEmpresa;
    private $hora;

    public function Autenticacao($idUsuario, $usuario, $perfil, $idEmpresa, $hora){
        $this->idUsuario = $idUsuario;
        $this->usuario = $usuario;
        $this->perfil = $perfil;
        $this->idEmpresa = $idEmpresa;
        $this->hora = $hora;
    }

    public function getIdUsario(){
        return $this->idUsuario;
    }
    public function getUsuario(){
        return $this->$usuario;
    }
    public function getPerfil(){
        return $this->perfil;
    }
    public function getIdEmpresa(){
        return $this->idEmpresa;
    }
    public function getHora(){
        return $this->$hora;
    }
}
?>