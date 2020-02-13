<?php
    session_start();

    $cookie_name = "utilisateur";
    $cookie_value = "";

    /*  Nombre de secondes dans une journee = 86400
        Si on veut rajouter des journees : 86400 * nombre de jours
    */

    $expire = time() + 86400*7;
    setcookie($cookie_name,$cookie_value,$expire);
?>

<! DOCTYPE html>
<html>
    <div id="header">
        <header>
            <meta charset="utf-8">
            <title id="Titre">Alex's Airline</title>
            <link rel="stylesheet" type="text/css" href="CSS/Styles.css">
            <p><strong>Header</strong></p>
        </header>
    </div>
    <div id="body">
        <body>
            <div>
                <h1 id="Airline">Alex's Airline</h1>
            </div>
            <form method="post" action="partie2.php">
                <label for="name">
                    <input type="text" id="name" placeholder="Username" name="username" required>
                </label>
                <label for="password">
                    <input type="password" id="password" placeholder="Password" name="password" required>
                </label>
                <label for="langue">
                    <select id="liste">
                        <option name="francais" id="francais">francais</option>
                        <option name="anglais" id="anglais" >anglais</option>
                    </select>
                </label>
                <div class="inscription">
                    <label for="inscription">
                        <input type="button"  value="S'inscrire" name="inscription">
                    </label>
                    <label for="connexion">
                        <input type="submit" id="connexion" value="Se connecter" name="connexion">
                    </label>
                </div>

            </form>
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