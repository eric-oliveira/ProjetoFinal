<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro Venda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-cadastro-venda {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
</head>
<body>
    <?php
        include_once("./include_menu.php");
        require_once("../dao/ClienteDAO.php");
    ?>

    <divc class="container-fluid">
        <div class="row-fluid">
            <div class="card-cadastro-venda">
                <div class="card">
                    <div class="card-header">
                        Cadastro Venda
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="../controller/pagina_cadastrar_venda.php" method="post">
                                    <div class="form-group">
                                        <select type="text" id="id_cliente" name="id_cliente" class="form-control">
                                        	<?php
                                        		$sessao = Sessao::getInstance();
                                        		$conteudo = $sessao->recuperar('AUTENTICACAO');
                                        		$idEmpresa = $conteudo->getIdEmpresa();
                                        		$retornoLista = ClienteDAO::buscarListaCliente($idEmpresa);
                                        		foreach ($retornoLista as $cliente) {
                                        	       echo ("<option value = '".$cliente->getId()."'>".$cliente->getNome()."</option>");
                                        		}
                                        	?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" id="data" name="data" value="25/06/2018" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="valor" name="valor" class="form-control" placeholder="Valor">
                                    </div>
                                    <div class="form-group">
                                        <label>Dolar</label>
                                        <input type="text" id="cotacao" name="cotacao" class="form-control" disabled="disabled">
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>  
<script type="text/javascript" src="../js/pagina_cadastro_venda.js"></script>
</html>