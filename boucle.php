<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./index.css">

    <title>Document</title>

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

        echo "<div class = 'flex'>";

        if (isset($_POST["number"])) {

            $j = $_POST["number"] + 1;

            $resultat_table = "";

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

            for ( $res_iteration = 1; $res_iteration <= 10; $res_iteration++) {

                $resultat_table = $_POST["number"] * $res_iteration;

                echo "<h2> " . $_POST["number"] . " x " . $res_iteration . " = " . $resultat_table . " </h2><br />";

            }

            echo "</div>";

        }

        echo "</div>";

        ?>
    
</body>
</html>