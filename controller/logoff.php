<?php
	require_once("../model/Sessao.php");
	$sessao = Sessao::getInstance();
	$sessao->encerrar();

	header('Location: ../index.php');
