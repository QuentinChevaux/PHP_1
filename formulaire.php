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

        <label for="nb">Saisir un Nombre :</label>
        <input type="number" id="nb" name="nb" />

        <input type="submit" value="Valider" />

    </form>

    <?php

        if (!empty($message)) {

            echo $message;

        }

    ?>
    
</body>
</html>