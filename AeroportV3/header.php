<div>
    <?php

    $username = "";
    $password = "";
    $cpt = 0;

    /* Associe la donnee a la variable */
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];


        // Lire le xml afin de trouver l'information
        $xml = simplexml_load_file("XML/user.xml") or die();

        foreach($xml->children() as $ligne)
        {
            if($ligne->email == $username && $ligne->password == $password)
            {
                echo "Bonjour ".$username;
                $cpt++;
            }
            elseif($cpt < 1)
            {
                $cpt++;
                echo "Bonjour utilisateur anonyme";
            }
        }
    }

    ?>
</div>
