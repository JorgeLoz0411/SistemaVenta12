<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factura</title>
    <link rel="stylesheet" href="styleticket.css">
</head>
<body>
<img class="anulada" src="img/anulado.png" alt="Anulada">
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
				<div>
					<img src="/sistemaventa12/img/logoAmarok.png">
				</div>
			</td>
		</tr>
		<tr>
			<td class="info_empresa">
				<div>
					<span class="h2">SISTEMA VENTAS</span>
					<p>Ruc:  901380140</p>
					<p>Razon social: Inversiones Tecnológicas Amarok SAS</p>
					<p>Dirección: CR 28 A   67 A   12 Bucaramanga - Santander</p>
					<p>Teléfono: +(057) 3044818104</p>
					<p>Email: jor0411loz@gmail.com</p>
				</div>
			</td>
			</tr>
			<tr>
			<td class="info_factura">
				<div class="round">
					<span class="h3">Factura</span>
					<p>No. Factura: <strong>000001</strong></p>
					<p>Fecha: 20/11/2024</p>
					<p>Hora: 10:30am</p>
					<p>Vendedor: Jorge Lozano</p>
				</div>
			</td>
		</tr>
		<tr>
			<td class="info_cliente">
				<div class="round">
					<span class="h3">Cliente</span>
					<table class="datos_cliente">
						<tr>
							<td><p>Nombre: William Montejo </p></td>	
						</tr>
						<tr>
							<td><p>Ced: 99999999</p></td>		
						</tr>
						<tr>
							<td><p>Teléfono: 5555555</p></td>
						</tr>
						<tr>
							<td><p>Tena - Cundinamarca</p></td>
						</tr>
					</table>
				</div>
			</td>

		</tr>
	</table>

	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px">Cant.</th>
					<th class="textleft">Descripción</th>
					<th class="textright" width="150px">Precio Unitario.</th>
					<th class="textright" width="150px"> Precio Total</th>
				</tr>
			</thead>
			<tbody id="detalle_productos">
				<tr>
					<td class="textcenter">1</td>
					<td>HP Core i3 12 Gen 3.3-4.4 GHz (Todo en Uno )</td>
					<td class="textright">1850000</td>
					<td class="textright">1850000</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>JANUS Celeron G5905 Case Metálico 3.5 GHz</td>
					<td class="textright">1320000</td>
					<td class="textright">1320000</td>
				</tr>
			</tbody>
			<tfoot id="detalle_totales">
				<tr>
					<td colspan="3" class="textright"><span>SUBTOTAL $</span></td>
					<td class="textright"><span>3170000</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>IVA (19%)</span></td>
					<td class="textright"><span>602300</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>TOTAL $</span></td>
					<td class="textright"><span>3772300</span></td>
				</tr>
		</tfoot>
	</table>
	<div>
		<p class="nota">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto con nombre, teléfono y Email</p>
		<h4 class="label_gracias">¡Gracias por su compra!</h4>
	</div>

</div>

</body>
</html>
