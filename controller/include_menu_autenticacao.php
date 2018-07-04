<?php
require_once("../model/Sessao.php");
require_once("../model/Autenticacao.php");

$sessao = Sessao::getInstance();

if ($sessao->existe("AUTENTICACAO")){
    $autenticacao = $sessao->recuperar("AUTENTICACAO");
}
else{
    $uri = $_SERVER['REQUEST_URI'];
    header("Location: ./index.php?uri_origem=$uri");
}
?>