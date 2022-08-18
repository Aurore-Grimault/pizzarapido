<?php
	define("DBHOST", "localhost");
    define("DBUSER", "user");
    define("DBPASS", "mdp");
    define("DBNAME", "tuto_php");

    $dsn="mysql:dbname=tuto_php;host=localhost";


    try{
        $db= new PDO($dsn, DBUSER, DBPASS);
        echo"vous êtes connecté";
        $db->exec("SET NAMES utf8");
        $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    catch (PDOException $e) {
        die("erreur:" .$e -> getMessage());
    }

    $sql= "SELECT * FROM `utilisateurs`";
    $requete= $db -> query($sql);

    $user= $requete -> fetchAll();


// try {
//     $user = "user";
// 	$pass = "mdp";
// 	$dbh = new PDO('mysql:host=localhost;dbname=tuto_php', $user, $pass);

// 	$requete = 'SELECT * from `utilisateurs`';
	
//     foreach($dbh->query($requete) as $row) {
//         afficherLigne($row);
//         print_r($row);
//     }

//     $dbh = null;

// } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// }

// function afficherLigne($row) {
// 	print_r( $row['nom']);
// 	echo 'nom : ' .  $row['nom'];
// 	echo '<br />';
// 	echo 'prenom: ' . $row['prenom'];
// 	echo '<br />';
// }

?>