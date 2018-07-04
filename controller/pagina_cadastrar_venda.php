<?php

    require_once("../dao/VendaDAO.php");
    require_once("../model/Sessao.php");

    if (isset($_POST["id_cliente"]) && isset($_POST["data"]) && isset($_POST["valor"]) && isset($_POST["cotacao"])){
        $sessao = Sessao::getInstance();
        $idEmpresa = $sessao->recuperar()->getAutenticacao()->getPermissoes();
        $idCliente = $_POST["id_cliente"];
        $data = $_POST["data"];
        $valor = $_POST["valor"];
        $cotacao = $_POST["cotacao"];

        $v = new Venda($idEmpresa, $idCliente, $data, $valor, $cotacao);

        $rep = new VendaDAO();
        $rep->adicionar($v);
        
        header('Location: ../view/pagina_vendas.php');
    }
?>
