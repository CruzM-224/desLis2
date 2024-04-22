<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-3">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
      <div class="mb-3">
        <label for="nombreAutor" class="form-label">Autor</label>
        <input type="text" class="form-control" id="nombreAutor" name="nombreAutor" aria-describedby="descNombre">
        <div id="descNombre" class="form-text">APELLIDOS, Nombre</div>
      </div>

      <div class="mb-3">
        <label for="tituloLibro" class="form-label">Titulo del libro</label>
        <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" aria-describedby="descTitulo">
        <div id="descTitulo" class="form-text">No entrecomillar</div>
      </div>

      <div class="mb-3">
        <label for="numEdicion" class="form-label">Numero de edicion</label>
        <input type="text" class="form-control" id="numEdicion" name="numEdicion" aria-describedby="descNumEdicion">
        <div id="descNumEdicion" class="form-text">Caracteres superíndices, ej. [1<sup>er</sup>]</div>
      </div>

      <div class="mb-3">
        <label for="lugarPubl" class="form-label">Lugar de publicacion</label>
        <input type="text" class="form-control" id="lugarPubl" name="lugarPubl" aria-describedby="descLugar">
        <div id="descLugar" class="form-text">Ciudad en que se ha publicado el libro</div>
      </div>

      <div class="mb-3">
        <label for="editorial" class="form-label">Editorial</label>
        <input type="text" class="form-control" id="editorial" name="editorial" aria-describedby="descEditorial">
        <div id="descEditorial" class="form-text">Empresa que edita el libro publicando un numero de ejemplares</div>
      </div>

      <div class="mb-3">
        <label for="yearEdicion" class="form-label">Año de edición</label>
        <input type="text" class="form-control" id="yearEdicion" name="yearEdicion" aria-describedby="descEdicion">
        <div id="descEdicion" class="form-text">Año de publicacion por la editorial</div>
      </div>

      <div class="mb-3">
        <label for="numPaginas" class="form-label">Numero de paginas</label>
        <input type="number" class="form-control" id="numPaginas" name="numPaginas" aria-describedby="descNumPaginas">
        <div id="descNumPaginas" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="notas" class="form-label">Notas</label>
        <textarea class="form-control" id="notas" name="notas" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="isbn" aria-describedby="descISBN">
        <div id="descISBN" class="form-text">Identificador único para libros, previsto para uso comercial. Está compuesto por 13 dígitos de longitud divididos en cuatro partes cuyos número corresponden a: El código de país o lengua de origen, el editor, el número del artículo y un dígito de control.</div>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      // Validación de campos utilizando expresiones regulares

      // Función para validar el formato del autor
      function validarAutor($autor) {
          // Expresión regular para el formato de autor
          $patron = "/^(?:VARIOS\s+AUTORES|AUTORES\s+VARIOS|\[?[A-ZÁÉÍÓÚÑ\s]+\s*,\s*[A-ZÁÉÍÓÚÑ\s]+\]?)$/i";
          return preg_match($patron, $autor);
      }

      // Función para validar el formato del título del libro
      function validarTitulo($titulo) {
          // Expresión regular para el formato del título
          $patron = "/^\[?[^\"]+\]?$/";
          return preg_match($patron, $titulo);
      }

      // Función para validar el formato del número de edición
      function validarEdicion($edicion) {
          // Expresión regular para el formato del número de edición
          $patron = "/^\[[0-9]+<sup>er<\/sup>\]$/i";
          return preg_match($patron, $edicion);
      }

      // Función para validar el formato del año de edición
      function validarAnioEdicion($anio) {
          // Expresión regular para el formato del año de edición
          $patron = "/^\([0-9]{4}\)$/"; // Año entre paréntesis, formato YYYY
          return preg_match($patron, $anio);
      }

      // Función para validar el formato del ISBN
      function validarISBN($isbn) {
          // Expresión regular para el formato del ISBN
          $patron = "/^[0-9]{13}$/"; // ISBN de 13 dígitos
          return preg_match($patron, $isbn);
      }

      // Validar los campos
      $autor = $_POST["nombreAutor"];
      $titulo = $_POST["tituloLibro"];
      $edicion = $_POST["numEdicion"];
      $lugar = $_POST["lugarPubl"];
      $editorial = $_POST["editorial"];
      $anio = $_POST["yearEdicion"];
      $paginas = $_POST["numPaginas"];
      $notas = $_POST["notas"];
      $isbn = $_POST["isbn"];

      $autorValido = validarAutor($autor);
      $tituloValido = validarTitulo($titulo);
      $edicionValida = validarEdicion($edicion);
      $anioValido = validarAnioEdicion($anio);
      $isbnValido = validarISBN($isbn);

      if ($autorValido && $tituloValido && $edicionValida && $anioValido && $isbnValido) {
          echo "<h2>Libro registrado exitosamente:</h2>";
          echo "<p><strong>Autor:</strong> $autor</p>";
          echo "<p><strong>Título del Libro:</strong> $titulo</p>";
          echo "<p><strong>Número de Edición:</strong> $edicion</p>";
          echo "<p><strong>Lugar de Publicación:</strong> $lugar</p>";
          echo "<p><strong>Editorial:</strong> $editorial</p>";
          echo "<p><strong>Año de Edición:</strong> $anio</p>";
          echo "<p><strong>Número de Páginas:</strong> $paginas</p>";
          echo "<p><strong>Notas:</strong> $notas</p>";
          echo "<p><strong>ISBN:</strong> $isbn</p>";
      } else {
          echo "<h2>Error al registrar el libro:</h2>";
          if (!$autorValido) {
              echo "<p>El formato del autor es inválido.</p>";
          }
          if (!$tituloValido) {
              echo "<p>El formato del título es inválido.</p>";
          }
          if (!$edicionValida) {
              echo "<p>El formato del número de edición es inválido.</p>";
          }
          if (!$anioValido) {
              echo "<p>El formato del año de edición es inválido.</p>";
          }
          if (!$isbnValido) {
              echo "<p>El formato del ISBN es inválido.</p>";
          }
      }
    }
  ?>
</body>
</html>
