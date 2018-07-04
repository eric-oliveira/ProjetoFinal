<?php
class Usuario{
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $perfil;
    private $idEmpresa;

    public function __construct(){
        $args = func_get_args();
        if(func_num_args() == 6){
            $this->id = $args[0];
            $this->nome = $args[1];
            $this->email = $args[2];
            $this->senha = $args[3];
            $this->perfil = $args[4];
            $this->idEmpresa = $args[5];
        }
        if(func_num_args() == 5){ 
            $this->nome = $args[0];
            $this->email = $args[1];
            $this->senha = $args[2];
            $this->perfil = $args[3];
            $this->idEmpresa = $args[4];
        }
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getPerfil(){
        return $this->perfil;
    }
    public function getIdEmpresa(){
        return $this->idEmpresa;
    }
    public function validarSenha(string $senha):bool{
        return $this->senha == $senha;
    }
}
?>