<?php

    require_once("../dao/VendaDAO.php");
    require_once("../model/Sessao.php");
    require_once("../model/Autenticacao.php");

    if (isset($_POST["id-cliente"]) && isset($_POST["data"]) && isset($_POST["valor"]) && isset($_POST["conversao"])){
        $sessao = Sessao::getInstance();
        $conteudo = $sessao->recuperar('AUTENTICACAO');
        $idEmpresa = $conteudo->getIdEmpresa();
        $idCliente = $_POST["id-cliente"];
        $data = $_POST["data"];
        $valor = $_POST["valor"];
        $cotacao = $_POST["conversao"];

        $v = new Venda($idEmpresa, $idCliente, $data, $valor, $cotacao);

        VendaDAO::insere($v);
        header('Location: ../view/pagina_vendas.php');
    }else{
        echo "entra aqui";
    }
?>
