<?php 
    require_once "../model/Autenticador.php";

    if (isset($_POST["usuario"]) && isset($_POST["senha"])){
        $sessao = Sessao::getInstance();
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $aut = new Autenticador();
        $ret = $aut->autenticar($usuario, $senha);
        if($ret->getTemErros()){
            $sessao->encerrar();
            header("location: ../index.php?login=erro");
        }
        else{
            $sessao->salvar("AUTENTICACAO", $ret->getAutenticacao());
            header("location: ../view/home.php");
        }
    }
?>