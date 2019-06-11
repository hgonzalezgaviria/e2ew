<?php
	/**
	* Archivo que redirecciona al contenido que se va incrustar dentro de la header y el footer
	* Autor: e2ew-hfg
	**/

	if(empty($_GET['menu'])){
	require_once('Clientes/metadata.php');
	}else{
		if ($_GET['menu']=='mostrar') {
			require_once('Clientes/mostrar.php');
		}else if ($_GET['menu']=='panel') {
			require_once('Clientes/panel.php');
		}else{
			require_once('Clientes/metadata.php');
		}

	}

 ?>
