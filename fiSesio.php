<?php
session_start();

session_destroy();
header("location: index.php");


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<h3>Has sortit de la sesio</h3>
 	<p><a href="index.php">Tornar a la pagina 1</a></p>
 </body>
 </html>
