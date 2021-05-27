<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="top">FORMULARIO</div>  
<form class="formulario" action="recibir.php" method="post">
      <h2 class="nombre">Nombre</h2>
      <input type="text" class="nombre-input" name="nombre" required> 
      <br><br>
      <h2 class="edad">Edad</h2>
      <input class="edad-input" name="edad" type="number" min="1" max="99" required> <br> <br>
      <input class="boton" type="submit" value="Enviar">
    </form>
</body>
</html>