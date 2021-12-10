<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./index.css">
    <title>Chaine</title>
</head>
<body>

    <form action="" method="POST">

        <input type="text" name="input_1" />
        <input type="text" name="input_2" />
        <input type="text" name="input_3" />

        <input type="submit" value="Chercher la chaine de caractère la plus longue" />

    </form>

    <?php 

        if (isset($_POST["input_1"]) && isset($_POST["input_2"]) && isset($_POST["input_3"])) {

            $taille_input_1 = strlen($_POST["input_1"]);
            $taille_input_2 = strlen($_POST["input_2"]);
            $taille_input_3 = strlen($_POST["input_3"]);

            if ( $taille_input_1 > $taille_input_2 && $taille_input_1 > $taille_input_3) {

                echo "<h2>L'input 1 est le plus long , " . " '" . $_POST["input_1"] . "' " . "</h2>";

            }

            else if ($taille_input_2 > $taille_input_1 && $taille_input_2 > $taille_input_3) {

                echo "<h2>L'input 2 est le plus long , " . " '" . $_POST["input_2"] . "' " . "</h2>";
            }

            else if ($taille_input_3 > $taille_input_1 && $taille_input_3 > $taille_input_2) {

                echo "<h2>L'input 3 est le plus long , " . " '" . $_POST["input_3"] . "' " . "</h2>";

            }

        }

    ?>
    
        <br />
        <br />

    <form action="" method="POST">

        <label for="original">Entrez une phrase</label>
        <input type="text" name="original" />

        <label for="replace_what">Saisir le texte à Remplacer</label>
        <input type="text" name="replace_what" />

        <label for="replace_with_what">Remplacer par quoi ?</label>
        <input type="text" name="replace_with_what" />

            <br />
            <br />

        <input type="submit" value="Changer le texte" />

    </form>

    <?php

        if (isset($_POST["original"]) && isset($_POST["replace_what"]) && isset($_POST["replace_with_what"])) {

            $chaine = $_POST["original"];
    
            $chaine_remplace = str_replace($_POST["replace_what"], $_POST["replace_with_what"], $chaine);
    
            echo "<h2>Phrase " . " '" . $chaine . "' " . " à été remplacé en : " . $chaine_remplace;

        }

    ?>

    
        <br />
        <br />

    <form action="" method="POST">

        <label for="chaine_depart">Entrez une phrase</label>
        <input type="text" name="chaine_depart" />

        <label for="letter_to_count">Saisir une Lettre à compter</label>
        <input type="text" name="letter_to_count" />

            <br />
            <br />

        <input type="submit" value="Changer le texte" />

    </form>

    <?php

        if (isset($_POST["chaine_depart"]) && isset($_POST["letter_to_count"])) {

            $chaine_depart = $_POST["chaine_depart"];

            $letter_to_count = $_POST["letter_to_count"];

            $position = strpos($chaine_depart, $letter_to_count);

            $nombre_de_fois_vu = 0;
    
                while ( $position != 0 || substr($chaine_depart, 0, 1) == $letter_to_count) {

                    $chaine_depart = substr($chaine_depart, $position + 1 );

                    $position = strpos($chaine_depart, $letter_to_count);

                    $nombre_de_fois_vu++;
                    
                }

            echo "<h2>$nombre_de_fois_vu</h2>";

        }

    ?>
    
    <br />
        <br />

    <form action="" method="POST">

        <label for="texte">Entrez une phrase</label>
        <input type="text" name="texte" />

        <label for="mettre_en_majuscule">Saisir une Lettre à mettre en Majuscule</label>
        <input type="text" name="mettre_en_majuscule" />

            <br />
            <br />

        <input type="submit" value="Changer le texte" />

    </form>

    <?php

        if (isset($_POST["texte"]) && isset($_POST["mettre_en_majuscule"])) {

            $chaine_depart = $_POST["texte"];

            $mettre_en_majuscule = $_POST["mettre_en_majuscule"];

            $majuscule = strtoupper($mettre_en_majuscule);

            $chaine_change = str_replace($mettre_en_majuscule, $majuscule, $chaine_depart);

            echo "<h2>La chaine : " . " '" . $chaine_depart . "' " . " à été changée en : " . $chaine_change . "</h2>";           

        }

    ?>


</body>
</html>
