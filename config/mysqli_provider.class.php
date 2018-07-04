<?php
    class MySqliProvider {
        //host
        private $host = 'localhost';
        //usuario
        private $usuario = 'root';
        //senha
        private $senha = '';
        //banco de dados
        private $database = 'aluno_banco';

        public function provide(){

            //criar conexao
            $mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->database);
            
            //ajustar o charset de comunicação entre a aplicação e o banco de dados
            $mysqli->set_charset('utf8');

            //verificar se houve erro de conexão
            if($mysqli->errno){
                echo 'Erro ao tentar se conectar com banco MySQL: ' . $mysqli->error;
            }

            return $mysqli;
        }
    }
?>