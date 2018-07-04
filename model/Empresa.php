<?php
    //Classe que representa o produto

    class Empresa{
        private $id;
        private $razaoSocial;
        private $pais;
        private $moeda;

        public function __construct(){
        	$args = func_get_args();
        	if(func_num_args() == "4"){
	            $this->id = $args[0];
		        $this->razaoSocial = $args[1];
		        $this->pais = $args[2];
		        $this->moeda = $args[3];
	        }
	        if(func_num_args() == 3){ 
		        $this->razaoSocial = $args[0];
		        $this->pais = $args[1];
		        $this->moeda = $args[2]; 
	        }
        }

        public function getId(){
	        return $this->id;
	    }
	    public function setId($id){
	    	$this->id = $id;
	    }
	    public function getRazaoSocial(){
	        return $this->razaoSocial;
	    }
	    public function getPais(){
	        return $this->pais;
	    }
	    public function getMoeda(){
	        return $this->moeda;
	    }
	}
?>