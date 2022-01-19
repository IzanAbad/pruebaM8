<?php
session_start();

$nom = "";

if(isset($_REQUEST['nom'])){

$nom = $_REQUEST['nom'];
$_SESSION['nom'] = $nom;

}
if(isset($_SESSION['nom'])){

	
	
	$nom = $_SESSION['nom'];
}
?>


<?php
		
		

		if(empty($nom)){

			echo "No hi ha cap nom a la sessio<br>";
			echo "ets a la pagina 2";
			echo '<p><a href="index.php">Anar a la pagina 1</a></p>';

		}
		else{

			echo "Hola $nom<br>";
			echo "ets a la pagina 2";
			echo '<p><a href="index.php">Anar a la pagina 1</a></p>';
		}
	
	




	 ?>
