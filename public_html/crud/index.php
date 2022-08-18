<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP</title>
    </head>

    <body>
    
	<?php

        class Pizza{
            public function choisirPizza(){
                echo "choisissez votre pizza";
            }
        }

        $obj = new Pizza();
        $obj->choisirPizza(); 

		include './mesFunctionsSQL.php';
		include './mesFunctionsTable.php';

		// include './mesFunctions.php';
		// include './crud/bddConnexion.php';
		// $headers = getHeaderTable();
		// $users = getAllUsers();
		// afficherTableau($users, $headers);

	?>

	<a href='../crud/formulaireGET.php' >Créer un compte</a> 
    </body>
</html>

