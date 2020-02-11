<div>
    <?php
    $choixUser = "";

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

