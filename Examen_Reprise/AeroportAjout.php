<! DOCTYPE html>

<html>
<div id = "Header">
    <header>
        <meta charset="UTF-8">
        <title>Ajouter un aeroports</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
</div>
<div id="Body">
    <body>
    <?php
    include "Aeroport.php";
    ?>
    <form method="post" action="AeroportVisualisation.php">
        <label>Code Aeroport :
            <input  maxlength="3" name="code">
        </label>
        <label>nom Aeroport :
            <input  name="nom">
        </label>
        <label>Ville Aeroport :
            <input  name="ville">
        </label>
        <input type="submit" name="submit" value="Ajouter Aeroport" >
    </form>
    </body>
</div>
<div id="Footer">
    <footer>

    </footer>
</div>
</html>