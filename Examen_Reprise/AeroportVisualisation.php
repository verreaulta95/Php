<! DOCTYPE html>

<html>
<div id = "Header">
    <header>
        <meta charset="UTF-8">
        <title>Les aeroports</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
</div>
<div id="Body">
    <body>
    <?php
        include "Aeroport.php";
    ?>
    <table>
        <tr>
            <th>
                Code d'aeroport
            </th>
            <th>
                Nom d'aeroport
            </th>
            <th>
                Ville d'aeroport
            </th>
        </tr>
        <td>
            <?php
            $xml = simplexml_load_file("XMLAeroports.xml") or die();
            $code = "";

            /*if(isset($_POST["code"]) == "" || isset($_POST["nom"]) == "" || isset($_POST["ville"]) == "")
            {
                echo "Aucun aeroport a ete ajoute !";
            }*/

            if(isset($_POST["code"]))
            {
                $code = $_POST["code"];
            }
            echo $code;

            ?>
        </td>
        <td>
            <?php
            $xml = simplexml_load_file("XMLAeroports.xml") or die();
            $nom = "";
            if(isset($_POST["nom"]))
            {
                $nom = $_POST["nom"];
            }
            echo $nom;

            ?>
        </td>
        <td>
            <?php
            $xml = simplexml_load_file("XMLAeroports.xml") or die();
            $ville = "";


            if(isset($_POST["code"]) && isset($_POST["nom"]) && isset($_POST["ville"]))
            {
                $ville = $_POST["ville"];
            }
            echo $ville;

            ?>
        </td>
    </table>
    </body>
</div>
<div id="Footer">
    <footer>

    </footer>
</div>
</html>