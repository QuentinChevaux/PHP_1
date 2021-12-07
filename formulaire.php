<?php

    if (isset($_POST["number"])) {

        if ($_POST["number"] < 10 ) {

            $message = "Plus grand";

        }

        else if ($_POST["number"] > 20) {

            $message = "Plus petit";

        }

        else {

            $message = "Nombre entre 10 et 20";

        }

    }

    else {

        $message = "";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulaire</title>
</head>
<body>

    <form action="" method="POST">

        <label for="number">Saisir un Nombre :</label>
        <input type="number" id="number" name="number" />

        <input type="submit" value="Valider" />

    </form>

    <?php

        if (!empty($message)) {

            echo $message;

        }

    ?>
    
</body>
</html>