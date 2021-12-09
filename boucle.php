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

        if (isset($_POST["number"])) {

            $j = $_POST["number"] + 1;

            echo "<h2>Incrementation avec Boucle While : <br /></h2>";
        
            while ( $j <= ( $_POST["number"] + 10) ) {
        
                echo "<h2>$j <br /></h2>";
        
                $j++;
        
            }

            echo "<br /><h2>Incrementation avec Boucle For : <br /></h2>";

            for ( $j = $_POST["number"] + 1; $j <= $_POST["number"] + 10; $j++) {

                echo "<h2>$j <br /></h2>";

            }

        }

        ?>
    
</body>
</html>