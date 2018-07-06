<?php
    /* Página responsável por orquestrar o comando de cadastrar o produto:
        1. buscar os dados do POST;
        2. criar o produto com base nos dados recebido;
        3. adicionar o produto no repositório;
    */

    require_once("../dao/ClienteDAO.php");
    require_once("../model/Sessao.php");
    require_once("../model/Autenticacao.php");

    if (isset($_POST["nome"]) && isset($_POST["pais"])){
        $conteudo = Sessao::getInstance()->recuperar("AUTENTICACAO");
        $idEmpresa = $conteudo->getIdEmpresa();
        $nome = $_POST["nome"];
        $pais = $_POST["pais"];

        $c = new Cliente($idEmpresa, $nome, $pais);

        ClienteDAO::insere($c);
        
        header('Location: ../view/pagina_clientes.php');
    }
?>