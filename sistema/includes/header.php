<?php

if (empty($_SESSION['active'])) {
	header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema ventas</title>
	<link rel="stylesheet" type="text/css" href="/sistemaventa12/sistema/css/style.css" media="all">
</head>

<body>
	<header>
		<div class="header">
			<a href="#" class="btnMenu"><i class="fas fa-bars"></i></a>
			<h1>INVERSIONES TECNOLÓGICAS AMAROK SAS</h1>
			<div class="optionsBar">
				<p><?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['user'] . '-' . $_SESSION['rol']; ?></span>
				<!--<img class="photouser" src="img/user.png" alt="Usuario">-->
				<a href="salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
		<?php include "nav.php"; ?>
	</header>
	<div class="modal">
		<div class="bodyModal">
		</div>
	</div>


	<!--<div class="modalBuscarPr">
		<div class="bodyModalBuscarPr">
			<section id="container_modal">
				<h1><i class="fas fa-users"></i> Lista de productos</h1>
				<br>
									<form action="" method="post" class="form_search_modalCl">
										<input type="text" name="busquedaProd" id="busquedaProd" placeholder="Buscar">
									</form>
									<a href="#" class="cerrarModalCl" onclick="coloseModal();">Aceptar</a>
		 		<div class="containerTable" id="dataProd"></div>
		 		<div class="paginador" id="paginadorProd"></div>
		 	</section>		
		</div>
	</div>-->

	<!--<div class="modalBuscarPrCompra">
		<div class="bodyModalBuscarPrCompra">
			<section id="container_modal">
				<h1><i class="fas fa-users"></i> Lista de productos</h1>
				<br>
									<form action="" method="post" class="form_search_modalCl">
										<input type="text" name="busquedaProdCompra" id="busquedaProdCompra" placeholder="Buscar">
									</form>
									<a href="#" class="cerrarModalCl" onclick="coloseModal();">Aceptar</a>
		 		<div class="containerTable" id="dataProdCompra"></div>
		 		<div class="paginador" id="paginadorProdCompra"></div>
		 	</section>		
		</div>
	</div>-->

	

	
	
	