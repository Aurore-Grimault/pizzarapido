<?php

	$id= $_GET["id"];
	$nom = $_GET["nom"];
	$prenom = $_GET["prenom"];
	$adresse = $_GET["adresse"];

	echo 'Bonjour ' . $nom . '  -  '.$prenom. '!';

	$servername = "localhost";
	$username = "user";
	$password = "mdp";
	$dbname = "tuto_php";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $sql = "INSERT INTO utilisateurs (`id`, `nom`, `prenom`, `adresse`)
	    VALUES ('$id', '$nom', '$prenom', '$adresse')";
	    
	    $conn->exec($sql);

	    echo $_GET ('Vous êtes bien connectés');

	} catch(PDOException $e){
	    echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;

?>