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

            echo "Saisissez les Valeurs dans les Inputs";

        }
        
        ?>

</body>
</html>