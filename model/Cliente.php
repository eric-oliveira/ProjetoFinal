<?php
    class Cliente{
        private $id;
        private $idEmpresa;
        private $nome;
        private $pais;

        public function __construct(){
        	$args = func_get_args();
        	if(func_num_args() == 4){
	            $this->id = $args[0];
		        $this->idEmpresa = $args[1];
		        $this->nome = $args[2];
		        $this->pais = $args[3];
	        }
	        if(func_num_args() == 3){ 
		        $this->idEmpresa = $args[0];
		        $this->nome = $args[1];
		        $this->pais = $args[2]; 
	        }
        }

        public function getId(){
	        return $this->id;
	    }
	    public function setId($id){
	    	$this->id = $id;
	    }
	    public function getIdEmpresa(){
	        return $this->idEmpresa;
	    }
	    public function getNome(){
	        return $this->nome;
	    }
	    public function getPais(){
	        return $this->pais;
	    }
	}
?>