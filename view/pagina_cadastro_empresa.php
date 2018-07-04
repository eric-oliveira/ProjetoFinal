<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro Empresa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-cadastro-empresa {
        padding: 0 50px 0 50px;
        width: 100%;
        margin: 0 auto;
      }
    </style>
</head>
<body>
    <?php
        include_once("./include_menu.php");
    ?>

    <divc class="container-fluid">
        <div class="row-fluid">
            <div class="card-cadastro-empresa">
                <div class="card">
                    <div class="card-header">
                        Cadastro Empresa
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="../controller/pagina_cadastrar_empresa.php" method="post">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input type="text" id="id" name="id" class="form-control" disabled="disabled">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="razaosocial" name="razao-social" class="form-control" placeholder="Razão Social">
                                    </div>
                                    <div class="form-group">
                                        <select type="text" id="pais" name="pais" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select type="text" id="moeda" name="moeda" class="form-control">
                                        </select>
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
<script type="text/javascript" src="../js/pagina_cadastro_empresa.js"></script>
</html>