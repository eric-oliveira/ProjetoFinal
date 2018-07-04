<?php
    /* Página responsável por orquestrar o comando de cadastrar o produto:
        1. buscar os dados do POST;
        2. criar o produto com base nos dados recebido;
        3. adicionar o produto no repositório;
    */

    require_once("../dao/EmpresaDAO.php");
    require_once("../dao/UsuarioDAO.php");

    if (isset($_POST["razao-social"]) && isset($_POST["pais"]) && isset($_POST["moeda"]) && isset($_POST["usuario"]) && isset($_POST["email"]) && isset($_POST["senha"])){
        $razaoSocial = $_POST["razao-social"];
        $pais = $_POST["pais"];
        $moeda = $_POST["moeda"];
        $empresa = new Empresa($razaoSocial, $pais, $moeda);
        EmpresaDAO::insere($empresa);

        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $usuario = new Usuario($usuario, $email, $senha, 2, $empresa->getId());
        UsuarioDAO::insere($usuario);
        
        header('Location: ../view/pagina_empresas.php');
    }else{
        echo 'Não tem';
    }
?>
