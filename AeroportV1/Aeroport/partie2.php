<! DOCTYPE html>

<html>

    <div id="headerPart2">
        <header>
            <meta charset ="utf-8">
            <title>Aeroport part 2</title>
            <link href="CSS/Styles.css" rel="stylesheet" type="text/css">
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
            <h3>header</h3>
        </header>
    </div>
    <div id="bodyPart2">
        <body>
            <div id="block1">
                <?php
                $xml = simplexml_load_file("XML/menu.xml") or die();
                echo $xml->Jeu[0]->jeuFr;
                foreach($xml -> children() as $jeu)
                {
                    echo $jeu->jeuFr."<br/>";
                    echo $jeu->jeuAng."<br/>";
                    echo $jeu->lien."<br/>";
                }
                ?>
            </div>
            <div id="block2">
                <h1><strong>Contenu en developpement</strong></h1>
            </div>
        </body>
    </div>
    <div class="footer">
        <footer>
            <p><strong>Footer</strong></p>
            <p><strong>Fait par :</strong> Alex Verreault</p>
            <p><strong>Contactez-nous :</strong> veral1533317@etu.cegepjonquiere.ca</p>
        </footer>
    </div>


</html>