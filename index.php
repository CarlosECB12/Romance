<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stilo.css">
  <title>Medidor de Romance</title>
</head>
<body>  
<div class="login-box">
<h1>Medidor de Romance</h1>
<form action="" method="post">
<div class="form">    
<div class="grupo">
<input type="text" name="nombre" id="nombre" required><span class="barra"></span>
<label for="nombre">Tu nombre:</span></label>
</div>
<br></br>
<div class="grupo">
<input type="text" name="pareja" id="pareja" required><span class="barra"></span>
<label for="pareja">Nombre de El o Ella:</label>
</div>
<br></br>
<input type="submit" name="calcular" value="Calcular">
<?php
if(isset($_POST['calcular'])) {
$nombre = $_POST['nombre'];
$pareja = $_POST['pareja'];
$romance = rand(50, 100);				
echo "<center><h4>Su romance es del : $romance%.</h4></center>";
}
?> 
</div>
</form>
</div>
</body>
</html>

