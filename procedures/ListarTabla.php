
<?php
   //Incluir la libreria
	include_once"../controlador/ControladorAlumno.php";
	//Crear el objeto para el controlador
	$objalumno=new ControladorAlumno();
	$listar = $objalumno->ControladorListarAlumno();
	echo"<table border=2>
			<tr>
				<td>CODIGO</td>
				<td>nombre</td>
			</tr>	
	";
	foreach ($listar as $fila) {
		echo"<tr>";
			echo "<td>".$fila[0]."</td>";
			echo "<td>".$fila[2]."</td>";
		echo "</tr>";

	}

	echo "<br><a href='principal.php'>Regresar</a>";
?>
