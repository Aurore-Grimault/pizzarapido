<?php
	include './crud/mesFunctionsSQL.php';
	include './crud/mesFunctionsTable.php';

	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];

	} else {
		$id = $_GET["id"];
		$nom = $_GET["nom"];
		$prenom = $_GET["prenom"];
		$adresse = $_GET["adresse"];
		
	}
	
	if ($action == "CREATE") {
		createUser($id, $nom, $prenom, $adresse);

		echo "utilisateur crée <br>";
		echo "<a href='public_html/index.html'>Liste des utilisateurs</a>";
		
	}
	
	// if ($action == "UPDATE") {
	// 	updateUser($id, $nom, $prenom, $age, $adresse);
	// 	echo "user update <br>";
	// 	echo "<a href='./index.php'>Liste des utilisateurs</a>";
	// }
	// if ($action == "DELETE") {
	// 	deleteUser($id);
	// 	echo "user delete <br>";
	// 	echo "<a href='./index.php'>Liste des utilisateurs</a>";
	// }
	

	
?>