<?php
	  define("DBHOST", "localhost");
    define("DBUSER", "user");
    define("DBPASS", "mdp");
    define("DBNAME", "tuto_php");

    $dsn="mysql:host=localhost;dbname=tuto_php";

    try {
        $servername = 'localhost';
        $user = "user";
        $pass = "mdp";
        // $dbh = new PDO('mysql:host=localhost;dbname=tuto_php', $user, $pass);
        // $requete = 'SELECT * from `utilisateurs`';
        // $dbh = null;

        $conn = new PDO("mysql:host=$servername;dbname=tuto_php", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
      }
    
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }



    // } catch (PDOException $e) {
    //     print "Erreur !: " . $e->getMessage() . "<br/>";
    //     die();
    // }


    // try{
    //     $db= new PDO($dsn, DBUSER, DBPASS);
    //     echo"vous êtes connecté";
    //     $db->exec("SET NAMES utf8");
    //     $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // }

    // catch (PDOException $e) {
    //     die("erreur:" .$e -> getMessage());
    // }

    // $sql= "SELECT * FROM `utilisateurs`";
    // $requete= $db -> query($sql);

    // $user= $requete -> fetchAll();

    // $sql = "INSERT INTO `utilisateurs` (`nom`, `prenom`, `adresse`) VALUES ('grimault', 'aurore', 'auroreg@gmail.com'";
    // $conn = null;
    // $requete= $db ->query($sql);

?>