<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-cliente {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
</head>
<body>
    <?php
        /* Página de interface com o usuário responsável por 
        exibir todos os produtos:
        */
        include_once("./include_menu.php");
        require_once("../dao/ClienteDAO.php");
        require_once("../dao/EmpresaDAO.php")
    ?>

    <div class="container">
        <div class="row">
            <div class="card-consultar-cliente">
                <div class="card">
                    <div class="card-header">
                        Consulta de Clientes
                    </div>
                    <div class="card-body">
                        <?php
                            $clientes = ClienteDAO::buscarTodosJoin();
                            $retorno = Sessao::getInstance()->recuperar("AUTENTICACAO");
                            $empresa = EmpresaDAO::buscarPorId($retorno->getIdEmpresa());
                            if (isset($clientes)){
                                foreach ($clientes as $cliente) {
                                    if($retorno->getPerfil() == 2){
                                        if($empresa->getRazaoSocial() != $cliente->getIdEmpresa()){
                                            continue;
                                        }
                                    }
                        ?>
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $cliente->getIdEmpresa();?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $cliente->getNome();?></h6>
                                            <p class="card-text"><?php echo $cliente->getPais();?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                        <div class="row mt-5">
                            <div class="col-12">
                                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>