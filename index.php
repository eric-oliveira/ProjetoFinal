<!-- Página inicial do site -->

<html>
  <head>
    <meta charset="utf-8" />
    <title>ERR Group</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        ERR Group
      </a>
    </nav>

    <div class="container">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="controller/valida_login.php" method="post">
                <div class="form-group">
                  <input name="usuario" type="text" class="form-control" placeholder="Usuário">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php 
                	if(isset($_GET['login']) && $_GET['login'] == 'erro'){ 
                ?>
	                <div class="text-danger">
	                	Usuário ou Senha Inválido(s)
	                </div>
            	<?php 
            		} 
            	?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>