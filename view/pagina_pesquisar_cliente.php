<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pesquisar Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-pesquisar-cliente {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
</head>
<body>
<?php
    /* Página de interface com o usuário responsável por realizar a pesquisa dos produtos */
    include_once("./include_menu.php");
    require_once("../dao/ClienteDAO.php");
?>

    <divc class="container-fluid">
        <div class="row-fluid">
            <div class="card-pesquisar-cliente">
                <div class="card">
                    <div class="card-header">
                        Pesquisar Clientes
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="../controller/pagina_pesquisar_cliente" method="post">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input type="number" id="id" name="id" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

if (isset($_GET["id"]))    
{
    $id=$_GET["id"];

    $rep = new ClienteDAO();
    
    $cliente = $rep->buscarPorId($id);   
    
    if (isset($cliente))
    {
        echo "$cliente->id - $cliente->idEmpresa - $cliente->nome - $cliente->pais<br>";
    }
    else{
        echo "Cliente não encontrado.";
    }
}
else{
    echo "Lista vazia.";
}
?>

    <div class="row mt-5">
        <div class="col-6">
            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
        </div>
        <div class="col-6">
            <button class="btn btn-lg btn-info btn-block" type="submit" value="Pesquisar">Pesquisar</button>
        </div>
    </div>

</body>
</html>