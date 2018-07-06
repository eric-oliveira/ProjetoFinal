<html>
  <head>
    <meta charset="utf-8" />
    <title>ERR Group</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php 
      require_once ("./include_menu.php");
    ?>

    <div class="container-fluid">    
      <div class="row-fluid">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <?php
              $retorno = Sessao::getInstance()->recuperar("AUTENTICACAO");
              if($retorno->getPerfil() == 1){
              ?>
                <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <span><a class="navbar-brand" href="./pagina_empresas.php">EMPRESA</a></span>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <span><a class="navbar-brand" href="./pagina_cadastro_empresa.php">CADASTRAR EMPRESA</a></span>
                </div>
              </div>
              <?php
              }
              if ($retorno->getPerfil() == 2) {
              ?>
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <span><a class="navbar-brand" href="./pagina_clientes.php">CLIENTE</a></span>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <span><a class="navbar-brand" href="./pagina_cadastro_cliente.php">CADASTRAR CLIENTE</a></span>
                </div>
              </div>
              <?php
              }
              ?>
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <span><a class="navbar-brand" href="./pagina_vendas.php">VENDAS</a></span>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <span><a class="navbar-brand" href="./pagina_cadastro_venda.php">CADASTRAR VENDA</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>