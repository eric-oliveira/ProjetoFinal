<?php
    class Venda{
        private $id;
        private $idEmpresa;
        private $idCliente;
        private $data;
        private $valor;
        private $dolar;

        public function Venda($id, $idEmpresa, $idCliente, $data, $valor, $dolar){
        	$this->id = $id;
	        $this->idEmpresa = $idEmpresa;
	        $this->idCliente = $idCliente;
	        $this->data = $data;
	        $this->valor = $valor;
	        $this->dolar = $dolar;
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