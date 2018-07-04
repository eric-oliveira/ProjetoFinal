<!-- Página que representa o meu do site, esse aquivo será utilizado como include nas demais páginas. -->
<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="./home.php">ERR Group</a>
	<ul class="navbar-nav">
		<li class="nav-item">
			<a classe="nav-link" href="../controller/logoff.php">SAIR</a>
		</li>
	</ul>
</nav>
<?php 
    include ("../controller/include_menu_autenticacao.php")
?>