<! DOCTYPE html>
<html>

    <header>
        <meta charset="utf-8">
        <title>test</title>
    </header>
    <body>
            <?php
            $nom = "";
            $prenom = "";
            $sexe = "";
            $bonjour = "Je te dis bonjour quand meme !";
            $temp = "";

            if(isset($_POST["nom"]) && isset($_POST["prenom"]))
            {
                /* ASSOCIE LA DONNEE AU GET CORRESPONDANT */
				
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
				/* Verifie le sexe de l'utilisateur */
				
                if(isset($_GET["sexe"]))
                {
                    $sexe = $_GET["sexe"];

                    switch($sexe)
                    {
                        case "H": $sexe = " M. "; break;
                        case "F": $sexe = " Mme. "; break;
                        default : $sexe = " "; break;
                    }

                }
                else
                {
                    echo "Vous avez un nom mais pas de sexe !";
                }
            }

            if(isset($_POST["bonjour"]))
            {
                $temp = $_POST["bonjour"];
                if($temp == 1)
                {
                    $bonjour = "BONJOUR !";
                }
                elseif($temp > 1)
                {
                    $bonjour="UN seul bonjour est suffisant !";
                }
            }

            /* Affichage */
            echo $bonjour.$sexe.$prenom." ".$nom;
            echo "<p> Voici vos informations meme si vous ne les avez pas demander : </p>";
            echo "<p> Voici le prenom : ".$prenom." </p>";
            echo "<p> Voici le nom : " .$nom . "</p>";



            ?>
    </body>

</html>