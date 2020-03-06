<?php
    session_start();
    $username = "";
    $password = "";
    $connexion = false;

    $_SESSION["langue"] = $username;

    /* Associe la donnee a la variable */
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        // Lire le xml afin de trouver l'information
        $xml = simplexml_load_file("XML/user.xml") or die();

        /* Recherche de l'information dans le fichier xml */
        foreach($xml->children() as $ligne)
        {
            if($ligne->email == $username && $ligne->password == $password)
            {
                /* Associe le nom et prenom pour les afficher par la suite */
                $nom = $ligne -> nom;
                $prenom = $ligne -> prenom;
                echo "Bonjour ".$prenom." ".$nom."<br/>";
                $connexion = true;
            }
        }

        /* Redirige sur la page login si le client n'a pas de compte/pas connecter */
        if($connexion == false)
        {
            /* Lien pour la redirection */
            /* Detruit tout les informations de la session si la connexion echoue*/

            header("location: /AeroportV4/login.php");
            session_destroy();
            exit;
            //echo "Bonjour utilisateur anonyme"."<br/>";
        }
    }
    //print ($_SESSION["username"]);
?>

