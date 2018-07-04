<?php 
/** Classe responsável por centralizar a manipulação das sessoes
 * Classe encapsula as operaçãoes de sessões;
 */
    class Sessao{
        /** por ser uma classe com a resposnsabilidade de manipular a sessão,
         * e essa é única, podemos considerar que essa classe só pode ter uma
         * instância. Por esse motivo podemos implementar um singleton.
         */
        private static $instance;
        
        public static function getInstance():Sessao{
            
            /** 1. A primeira vez que a função getInstance for chamada, irá
             * criar a instância da classe sessao, a partir disso, toda 
             * nova chamada a função getInstance irá retornar a instância
             * criada anteriormente.
             * 
             * 2. Ao criar o objeto da classe Sessao significa que é a
             * primeira vez que a sessão do servivor será manipulada, então
             * precisamos iniciar nossa sessão do servido com o session_start().
             * A partir da segunda vez, com a sessao iniciada, não precisamos
             * mais iniciá-la
             * 
             * 3. Ou seja, nossa sessão do servidor, só será iniciada quando realmente 
             * precisarmos utilizá-la, sem a necessidade de termos que iniciá-la
             * em cada página. Dizemos que sua utilização é "sob demanda";
             */

            if (!isset(self::$instance))
            {
                self::$instance = new Sessao();
                 session_start();   
            }
            
            return self::$instance;
         }

         // construtor privado para garantir que a instância dessa classe seja criada apenas dentro da classe
         private function Sessao(){
         }

        // Métodos responsável por encapsular a inclusão de conteúdo da sessão do servidor
        public function salvar (string $chave, $conteudo){
            /** Por não garantir que o php irá conhecer o objeto que será adiconado a sessão
             * serializaremos (transformaremos em texto) todo o conteúdo colocado em sessão;
             * 
             * Nesse caso, estou optanto por serializar todo o conteúdo em formato json.
             */
             $json = serialize($conteudo);
             $_SESSION[$chave] = $json;
        }
        
        // Método responsável por encapsular a recuperação de conteúdo da sessão do servidor
        public function recuperar(string $chave){
            if (!$this->existe($chave)){
                return null;
            }

            $conteudo = unserialize($_SESSION[$chave]);

            return $conteudo;
        }

        // Método resposável por verifivar se uma chave realmente existe na sessão
        public function existe(string $chave):bool{
            return isset($_SESSION[$chave]);
        }

        // Método resposável por encerrar a sessão.
        public function encerrar(){
            /** Ao encerrarmos a sessão, encerramos também o objeto da classe Sessao, 
             * com isso, ao acessar posteriormente a classe Sessao, irá iniciar novamente
             * uma nova sessão no servidor;
             */
            session_destroy();
            self::$instance=null;
        }
    }
?>