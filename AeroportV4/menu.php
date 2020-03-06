<?php
    $choixUser = "";
    $francais = "";
    $anglais = "";

    $xml = simplexml_load_file("XML/menu.xml") or die();

    foreach($xml -> children() as $jeu)
    {
        echo $jeu->jeuFr."<br/>";
        echo $jeu->jeuAng."<br/>";
        echo $jeu->lien."<br/>";
    }
?>


