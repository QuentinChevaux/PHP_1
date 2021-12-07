<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./index.css">

    <title>PHP</title>

</head>

<body>

    <?php

        $titre = "Titre de la Page PHP";

        echo "<h1> $titre </h1>";

        $a = 2;
        $b = 5;

        $calcul = $a + $b;

        echo "<div class = 'calcul'><p> Résultat duCalcul : $calcul </p></div>";

    ?>

    <form action="traitement.php" method="POST">

        <input type="text" placeholder="Tapez votre Nom" name='nom' autofocus />
        
        <input type="text" placeholder="Tapez votre Pseudo" name="pseudo" />

            <br />
            <br />

        <input type="password" name="mdp" placeholder="Tapez votre Mot de Passe"/>
        <input type="password" name="mdp_confirm" placeholder="Confirmez votre Mot de Passe" />

        <p> Vous êtes : </p>

        <label for="homme">Un Homme</label>
        <input type="radio" name="sexe" value="homme" id="homme" checked />

            <br />

        <label for="femme">Une Femme</label>
        <input type="radio" name="sexe" value="femme" id="femme" />

            <br />
            <br />

        <input type="range" name="range" list="range_list" min="1" max="10" step="1"/>

        <datalist id="range_list">

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

        </datalist>

            <br />
            <br />

        <label for="action">Action</label>
        <input type="checkbox" id="action" name="action">

            <br />

        <label for="comedie">Comédie</label>
        <input type="checkbox" id="comedie" name="comedie">

            <br />

        <label for="sf">Science Fiction</label>
        <input type="checkbox" id="sf" name="sf" />

            <br />
            <br />

        <select name="type_voie">

            <option value="Allée">Allée</option>
            <option value="Avenue">Avenue</option>
            <option value="Boulevard">Boulevard</option>
            <option value="Cité">Cité</option>
    
        </select>
        
            <br />
            <br />

        <input type="submit" value="Valider" />

    </form>

</body>

</html>