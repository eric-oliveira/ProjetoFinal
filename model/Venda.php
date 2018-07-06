<?php
    class Venda{
        private $id;
        private $idEmpresa;
        private $idCliente;
        private $data;
        private $valor;
        private $dolar;

        public function __construct(){
        	$args = func_get_args();
        	if(func_num_args() == 6){
	            $this->id = $args[0];
		        $this->idEmpresa = $args[1];
		        $this->idCliente = $args[2];
		        $this->data = $args[3];
		        $this->valor = $args[4];
		        $this->dolar = $args[5];
	        }
	        if(func_num_args() == 5){
		        $this->idEmpresa = $args[0];
		        $this->idCliente = $args[1];
		        $this->data = $args[2];
		        $this->valor = $args[3];
		        $this->dolar = $args[4]; 
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
	    public function getIdCliente(){
	    	return $this->idCliente;
	    }
	    public function getData(){
	    	return $this->data;
	    }
	    public function getvalor(){
	        return $this->valor;
	    }
	    public function getDolar(){
	        return $this->dolar;
	    }
	}
?>