<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./index.css">

    <title>Page Boucle</title>

</head>

<body>

    <?php /*

        $i = 1;
        $nombre = 12;

        while ( $i < $nombre ) {

            echo " $i moutons";
            $i++;

        }

    */ ?>

    <form action="" method="POST">

        <label for="number">Entrez un Nombre : </label>
        <input type="number" id="number" name="number" />

        <input type="submit" value="Ajouter 10 à votre Chiffre">

    </form>

    <br />

        <?php

        echo "<div class = 'flex_center'>";

        if (isset($_POST["number"])) {

            $j = $_POST["number"] + 1;

            $resultat_table = 0;

            $res_iteration = 1;

            echo "<div class = 'col_1'>";

            echo "<h2>Incrementation avec Boucle While : <br /></h2>";
        
            while ( $j <= ( $_POST["number"] + 10) ) {
        
                echo "<h2>$j <br /></h2>";
        
                $j++;
        
            }

            echo "</div>";

            echo "<div class = 'col_2'>";

            echo "<h2>Incrementation avec Boucle For : <br /></h2>";

            for ( $j = $_POST["number"] + 1; $j <= $_POST["number"] + 10; $j++) {

                echo "<h2>$j <br /></h2>";

            }

            echo "</div>";

            echo "<div class = 'col_3'>";            

            echo "<h2>Calcul Table de Multiplication d'un chiffre entré : </h2><br />";

            if ( !empty($_POST["number"])) {

                for ( $res_iteration = 1; $res_iteration <= 10; $res_iteration++) {
    
                    $resultat_table = $_POST["number"] * $res_iteration;
    
                    echo "<h2> " . $_POST["number"] . " x " . $res_iteration . " = " . $resultat_table . " </h2><br />";
    
                }

            }

            echo "</div>";

            echo "</div>";

            echo "<div class='flex_around'>";

            echo "<div class='ligne_2_col_1'>";

            echo "<h2>Calcul somme Entier jusque nombre entré : </h2><br />";

            if ( !empty($_POST["number"])) {

                $resultat_table = 0;

                for ( $res_iteration = 1 ; $res_iteration <= $_POST["number"]; $res_iteration++) {
    
                    $resultat_table = $resultat_table + $res_iteration ;
    
                }

                echo "<h2> $resultat_table </h2><br />";

            }

            echo "</div>";

            echo "<div class='ligne_2_col_2'>";

            echo "<h2>Calcul Factoriel : </h2><br />";

            if ( !empty($_POST["number"])) {

                $resultat_table = 1;

                for ( $res_iteration = 1 ; $res_iteration <= $_POST["number"]; $res_iteration++) {
    
                    $resultat_table = $resultat_table * $res_iteration ;
    
                }

                echo "<h2> $resultat_table </h2><br />";

            }

                echo "</div>";

            echo "</div>";

        }

        echo "</div>";

        ?>

            <br />
            <br />

        <form action="" method="POST">

        <label for="largeur">Entrez une Largeur : </label>
        <input type="number" id="largeur" name="largeur" />

        <label for="radio_largeur">cm</label>
        <input type="radio" name="radio_largeur" value="cm"/>
        <label for="m_largeur">m</label>
        <input type="radio" name="radio_largeur" value="m"/>

        <br />
        <br />

        <label for="hauteur">Entrez une Hauteur : </label>
        <input type="number" id="hauteur" name="hauteur" />

        <label for="radio_hauteur">cm</label>
        <input type="radio" name="radio_hauteur" value="cm" />
        <label for="m_hauteur">m</label>
        <input type="radio" name="radio_hauteur" value="m" />

        <br />
        <br />

        <label for="perimetre">Périmètre</label>
        <input type="radio" name="radio" value="perimetre"/>

        <label for="surface">Surface</label>
        <input type="radio" name="radio" value="surface"/>

        <label for="radio_resultat">cm</label>
        <input type="radio" name="radio_resultat" value="cm" />
        <label for="radio_resultat">m</label>
        <input type="radio" name="radio_resultat" value="m" />

        <br />
        <br />

        <input type="submit" value="Calculer">


        </form>

            <br />
            <br />

        <?php
        
        if (isset($_POST["largeur"]) && !empty($_POST["largeur"]) && isset($_POST["hauteur"]) && !empty($_POST["hauteur"]) && isset($_POST["radio"])) {

            if (isset($_POST["radio_largeur"]) && isset($_POST["radio_hauteur"]) && isset($_POST["radio_resultat"])) {

                $largeur = 0;
                $hauteur = 0;

                if ( $_POST["radio_largeur"] == $_POST["radio_resultat"]) {

                    $largeur = $_POST["largeur"];                    

                }

                else {
                    
                    if ( $_POST["radio_resultat"] == "cm") {

                        
                        $largeur = $_POST["largeur"] * 100;   

                    }

                    else {

                        $largeur = $_POST["largeur"] / 100;

                    }

                }
                
                if ( $_POST["radio_hauteur"] == $_POST["radio_resultat"]) {

                    $hauteur = $_POST["hauteur"];                    

                }

                else {
                    
                    if ( $_POST["radio_resultat"] == "cm") {

                        $hauteur = $_POST["hauteur"] * 100;   

                    }

                    else {

                        $hauteur = $_POST["hauteur"] / 100;

                    }

                }             
        
                if ( $_POST["radio"] == "perimetre") {
        
                    $perimetre = 2 * ($largeur + $hauteur);
        
                    echo "<h2>Le Périmètre avec largeur = $largeur et hauteur = $hauteur est : $perimetre</h2>";
    
                }
    
                if ( $_POST["radio"] == "surface") {
        
                    $surface = $largeur * $hauteur;
        
                    echo "<h2>L'Aire avec largeur = $largeur et hauteur = $hauteur est : $surface</h2>";
    
                }           

            }


        }

        else {

            echo "<h2>Saisissez les Valeurs dans les Inputs</h2>";

        }
        
        ?>

        <br />
        <br />

        <h2>A L'école</h2>

            <form action="" method="POST">

            <div class="flex_center form_ecole">

                <div>
                    
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" />
    
                </div>
    
                <div>
                    
                    <label for="francais">Français</label>
                    <input type="hidden" name="francais_label" value="Français">
                    <input type="number" name="francais" id="francais"/>
    
                </div>
    
                <div>
    
                    <label for="math">Math</label>
                    <input type="hidden" name="math_label" value="Math">
                    <input type="number" name="math" />
    
                </div>
    
                <div>
                    
                    <label for="anglais">Anglais</label>
                    <input type="hidden" name="anglais_label" value="Anglais">
                    <input type="number" name="anglais" />
    
                </div>
    
                <div>
    
                    <label for="histoire-geographie">Histoire Geographie</label>
                    <input type="hidden" name="histoire-geographie_label" value="Histoire Geographie">
                    <input type="number" name="histoire-geographie" />
    
                </div>
    
                <div>
    
                    <label for="sciences">Sciences</label>
                    <input type="hidden" name="sciences_label" value="Sciences">
                    <input type="number" name="sciences" />
    
                </div>

            </div>

                <br />

                <input type="submit" value="Calculer Moyenne">

            </form>

        <?php

            if (isset($_POST["prenom"]) && isset($_POST["francais"]) && isset($_POST["math"])
            && isset($_POST["anglais"]) && isset($_POST["histoire-geographie"]) && isset($_POST["sciences"])) {

                if (!empty($_POST["prenom"]) && !empty($_POST["francais"]) && !empty($_POST["math"])
                && !empty($_POST["anglais"]) && !empty($_POST["histoire-geographie"]) && !empty($_POST["sciences"])) {

                    if ( $_POST["francais"] >= 0 && $_POST["math"] >= 0 && $_POST["anglais"] >= 0 && $_POST["histoire-geographie"] >= 0 && $_POST["sciences"] >= 0) {

                        if ( $_POST["francais"] <= 20 && $_POST["math"] <= 20 && $_POST["anglais"] <= 20 && $_POST["histoire-geographie"] <= 20 && $_POST["sciences"] <= 20) {

                            $moyenne = ( $_POST["francais"] + $_POST["math"] + $_POST["anglais"] + $_POST["histoire-geographie"] + $_POST["sciences"] ) / 5;
                        
                            echo "<h2>La moyenne de L'élève " . $_POST["prenom"] . " est : " . $moyenne . "</h2>";

                            if ( $moyenne < 10 ) {

                                $point_manquant = 10 - $moyenne;

                                echo "<h2>Il manque " . $point_manquant . " points pour atteindre la moyenne</h2>";

                            }

                            $tableau = array($_POST["francais"], $_POST["math"], $_POST["anglais"], $_POST["histoire-geographie"], $_POST["sciences"]);

                            $check_max = max( $tableau );

                            $check_min = min( $tableau );

                            $matiere = array( $_POST["francais_label"], $_POST["math_label"], $_POST["anglais_label"], $_POST["histoire-geographie_label"], $_POST["sciences_label"]);

                            $key_max = array_search($check_max, $tableau);

                            $key_min = array_search($check_min, $tableau);

                            $matiere_max = $matiere[$key_max];

                            $matiere_min = $matiere[$key_min];

                            echo "<h2>La note la plus haute est : " . $check_max  . " en " . $matiere_max . ", la note la plus basse est : " . $check_min . " en " . $matiere_min . "</h2>";

                        }

                        else {

                            echo "<h2>Une note ne peux pas être Supérieure à 20 &#128528;";

                        }

                    }

                    else {

                        echo "<h2>Une note ne peux pas être Négative &#128528;";

                    }

                }

                else {

                    echo "<h2>Veuillez saisir toutes les Valeurs</h2>";

                }

            }

        ?>

</body>
</html>