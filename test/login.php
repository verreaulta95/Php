<! DOCTYPE html>

<html>
    <header>
        <meta charset="utf-8">
        <title>Suite Login</title>
    </header>
    <body>
    <?php
    $nom = "";
    $prenom = "";
    $sexe = "";
    $bonjour = "";
    ?>

    <form method="post" action="suite.php?sexe=H">
        <label>
            Prenom : <input type="text" name="prenom" required>
        </label>
        <label>
            Nom : <input type="text" name="nom" required>
        </label>
        <label>
            Bonjour : <input type="number" name="bonjour">
        </label>
        <label>
            <input type="submit" value="envoyer">
        </label>
    </form>




    </body>
</html>