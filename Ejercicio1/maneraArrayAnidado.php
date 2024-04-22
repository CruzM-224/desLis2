<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglos Anidados</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1>Datos</h1>

	<div class="container m-3 mx-5">
		<table class="table table-sm">
		  <thead>
		    <tr>
		      <th scope="row" colspan="2">
		    	<select class="form-select" id="selectIdioma">
				  <option selected value="0">Idioma</option>
				  <option value="1">Ingles</option>
				  <option value="2">Frances</option>
				  <option value="3">Mandarin</option>
				  <option value="4">Ruso</option>
				  <option value="5">Portugues</option>
				  <option value="6">Japones</option>
				</select>
		      </th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th>Basico</th>
		      <td id="basico">#</td>
		    </tr>
		    <tr>
		      <th>Intermedio</th>
		      <td id="intermedio">#</td>
		    </tr>
		    <tr>
		      <th>Avanzado</th>
		      <td id="avanzado">#</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<!-- Datos Prueba-->
	<?php
		$alumnos = array(
			array
			(
				25,15,10 
			),
			array
			(
				10,5,2 
			),
			array
			(
				8,4,1 
			),
			array
			(
				12,8,4 
			),
			array
			(
				30,15,10 
			),
			array
			(
				90,25,67 
			)
		);
	?>

	<script>
        const alumnos = <?php echo json_encode($alumnos); ?>;

        document.getElementById('selectIdioma').addEventListener('change', function() {

        	if (this.value == 0) {
        		document.getElementById('basico').textContent = "";
	            document.getElementById('intermedio').textContent = "";
	            document.getElementById('avanzado').textContent = "";
        	}else{
        		const idioma = this.value - 1;
	            const datos = alumnos[idioma];

	            document.getElementById('basico').textContent = datos[0];
	            document.getElementById('intermedio').textContent = datos[1];
	            document.getElementById('avanzado').textContent = datos[2];
	        	}
        });
    </script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>