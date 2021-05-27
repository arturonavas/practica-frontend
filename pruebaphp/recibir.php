<head>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recibido php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
<div class="top">FORMULARIO</div>

<?php
//nombre
  $nombre = $_POST['nombre'];
  echo 'Bienvenid@ '. $nombre;
//edad
  $edad = $_POST['edad'];
  echo ' tu edad es '. $edad;

?>

<?php if($edad <= 17): ?>

  <script>alert ('Eres menor de 18 <?php echo $nombre ?>, no puedes pasar')
  history.go(-1)
  </script>

<?php elseif($edad >= 60): ?>
  <?php 
  echo "<br>";
  echo "Eres muy viejo, ya puedes cobrar pensión";
  echo "<br>";
  echo "<br>";
  echo '<img src="imagenes\1.png" alt="" srcset="">';
  ?>

<?php elseif($edad >= 18): ?>
  <?php 
  echo "<br>"; 
  echo "Eres mayor de 18, puedes pasar ";
  ?>

<?php endif; ?>
</body>