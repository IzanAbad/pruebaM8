<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=">
<title>Document</title>
</head>
<body>

<?php
		
if(isset($_SESSION['nom'])){


		echo "hola ";
		echo $_SESSION['nom'];
		echo "<br><a href='iniciNom.php'>Anar a la pagina 2</a>";
		echo "<a href='fiSesio.php'><br>Sortir</a>";
}
else{
	?>


	<form action="iniciNom.php" method="SESSION">

		<label for="nom">Entra el nom</label><br>
		<input type="text" name="nom" id="nom" autofocus>
		<input type="submit"  value="Enviar">


	</form>
<?php } ?>
</body>
</html>
