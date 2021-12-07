<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    
        while ( $j <= ( $_POST["number"] + 10) ) {
    
            echo "$j <br />";
    
            $j++;
    
        }

    }

?>
    
</body>
</html>