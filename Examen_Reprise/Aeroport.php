<! DOCTYPE html>


<html>
<div id = "Header">
    <header>
        <meta charset="UTF-8">
        <title>Les aeroports</title>
    </header>
</div>
<div id="Body">
    <body>
    <h1>Les Aéroports</h1>
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

            foreach ($xml -> children() as $Aeroport)
            {
                echo $Aeroport->CodeAeroport."<br/>";
            }

            ?>
        </td>
        <td>
            <?php
            $xml = simplexml_load_file("XMLAeroports.xml") or die();

            foreach ($xml -> children() as $Aeroport)
            {
                echo $Aeroport->NomAeroport."<br/>";
            }

            ?>
        </td>
        <td>
            <?php
            $xml = simplexml_load_file("XMLAeroports.xml") or die();

            foreach ($xml -> children() as $Aeroport)
            {
                echo $Aeroport->VilleAeroport."<br/>";
            }

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