<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>Welcome to CodeIgniter</title>


	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){

			/**

			 * Funcion para añadir una nueva columna en la tabla

			 */

			$("#add").click(function(){

				// Obtenemos el numero de filas (td) que tiene la primera columna

				// (tr) del id "tabla"

				var tds=$("#tabla tr:first td").length;

				// Obtenemos el total de columnas (tr) del id "tabla"

				var trs=$("#tabla tr").length;

				var nuevaFila="<tr>";

				for(var i=0;i<tds;i++){

					// añadimos las columnas

					nuevaFila+="<td>columna "+(i+1)+" Añadida con jquery</td>";

				}

				// Añadimos una columna con el numero total de columnas.

				// Añadimos uno al total, ya que cuando cargamos los valores para la

				// columna, todavia no esta añadida

				nuevaFila+="<td>"+(trs+1)+" columnas";

				nuevaFila+="</tr>";

				$("#tabla").append(nuevaFila);

			});



			/**

			 * Funcion para eliminar la ultima columna de la tabla.

			 * Si unicamente queda una columna, esta no sera eliminada

			 */

			$("#del").click(function(){

				// Obtenemos el total de columnas (tr) del id "tabla"

				var trs=$("#tabla tr").length;

				if(trs>1)

				{

					// Eliminamos la ultima columna

					$("#tabla tr:last").remove();

				}

			});

		});

	</script>


	<style type="text/css">
		#add, #del  {cursor:pointer;text-decoration:underline;color:#00f;}
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div class="panel panel-default">
	<div class="panel-heading">
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">




		<div class="col-md-2">
<form method="post" action="<?php echo base_url().'welcome/do_upload' ?>" enctype="multipart/form-data">
	<label>Título:</label><input type="text" name="titulo" />
	<input type="file" name="userFile"/>

	<input type="submit" value="cargar imagen">

</form>
		</div>

		<div class="col-md-12">


			</head>



			<body>

			<div id="add">añadir una nueva fila </div>

			<div id="del">pulsa para eliminar la ultima fila</div>

			<p>

			<table id="tabla" border=1>

				<tr>

					<td>primera columma</td>

					<td>segundo columna</td>

					<!-- podemos añadir tantas columnas como deseemos -->

					<!--<td>tercera columna</td>-->

				</tr>

			</table>
		</div>
	</div>

</div>
</div>
</div>

</body>

</html>