<! DOCTYPE html>
<meta charset ="utf-8">
<title>Alex's Airline</title>
<link href="CSS/Styles.css" rel="stylesheet" type="text/css">
<div>
    <?php
    $COOKIE ="";

    if(isset($_COOKIE["utilisateur"]))
    {
        echo "Bienvenu chez Alex's AirLine : ".$_COOKIE["utilisateur"];
    }
    ?>
</div>
<html>
    <div id="headerPart2">
        <header>
            <div>
                <?php
                    include 'header.php';
                ?>
            </div>
            <h3>header</h3>
        </header>
    </div>
    <body>
    <div id="bodyPart2">
        <div id="block1">
            <?php
            include 'menu.php';
            ?>
        </div>
        <div id="block2">
            <h1><strong>Contenu en developpement</strong></h1>
        </div>
    </div>
    </body>
    <div class="footer">
        <footer>
            <?php
            include 'footer.php';
            ?>
        </footer>
    </div>
</html>