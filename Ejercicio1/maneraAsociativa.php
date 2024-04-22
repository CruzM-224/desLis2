<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglos Asociativos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1>Datos</h1>

	<div>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">First</th>
		      <th scope="col">Last</th>
		      <th scope="col">Handle</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mark</td>
		      <td>Otto</td>
		      <td>@mdo</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Jacob</td>
		      <td>Thornton</td>
		      <td>@fat</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td colspan="2">Larry the Bird</td>
		      <td>@twitter</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<!-- Datos Prueba-->
	<?php
		$alumnos = array(
			"Inglés" => array
			(
				'Básico' => 25,
				'Intermedio' => 15,
				'Avanzado' => 10 
			),
			"Francés" => array
			(
				'Básico' => 10,
				'Intermedio' => 5,
				'Avanzado' => 2 
			),
			"Mandarin" => array
			(
				'Básico' => 8,
				'Intermedio' => 4,
				'Avanzado' => 1 
			),
			"Ruso" => array
			(
				'Básico' => 12,
				'Intermedio' => 8,
				'Avanzado' => 4 
			),
			"Portugués" => array
			(
				'Básico' => 30,
				'Intermedio' => 15,
				'Avanzado' => 10 
			),
			"Japonés" => array
			(
				'Básico' => 90,
				'Intermedio' => 25,
				'Avanzado' => 67 
			)
		);
	?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>