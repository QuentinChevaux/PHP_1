<?php

    if (isset($_POST["nom"])){

        echo "Votre nom est : " . $_POST["nom"] . "<br />";

    }

    if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {

        echo "Votre Pseudo est : " . $_POST["pseudo"]. "<br />";

    }

    else {

        echo "Saisissez un Pseudo <br /> ";

    }

    if (isset($_POST["mdp"]) && !empty($_POST["mdp"]) && isset($_POST["mdp_confirm"]) && !empty($_POST["mdp_confirm"])) {

        if ($_POST["mdp"] == $_POST["mdp_confirm"]) {

            echo "Les mots de passes sont identiques <br />";

        }

        else {

            echo "Les Mots de Passe sont Différents ! <br /> ";

        }

    }

    else {

        echo "Saisir tous les Mots de Passe ! <br />";

    }

    if (isset($_POST["sexe"])) {

        if ($_POST["sexe"] == "homme") {

            echo "Sexe : Homme <br />";

        }

        else {

            echo "Sexe : Femme <br />";

        }

    }

    if (isset($_POST["range"]) && !empty($_POST["range"])) {

        echo "Numéro = " . $_POST["range"] . "<br />";

    }

    echo "Les films Cochés : <ul>";

        if ( isset($_POST["action"])) { 
                
            if ($_POST["action"] == "on" ) {

                echo "<li>Action</li>";
    
            }

        }

        if  (isset($_POST["comedie"])) {

            if ($_POST["comedie"] == "on" ) {

                echo "<li>Comedie</li>";
    
            }

        }
            
        if (isset($_POST["sf"])) {

            if ($_POST["sf"] == "on" ) {

                echo "<li>Science Fiction</li>";
    
            }

        }

    echo "</ul>";

    if ( isset($_POST["type_voie"]) && !empty($_POST["type_voie"])) {

        echo "Vous avez Selectionné : " . $_POST["type_voie"];

    }

    if ( isset($_POST["number"]) && !empty ($_POST["number"])) {

        if ($_POST["number"] >= 1 && $_POST["number"] <= 3) {

            $retour = "Oui";

        }

        else {
    
            $retour = "Non";
    
        }

    }

    else {

        $retour = "Rien";

    }

    header("location: index.php?retour=".$retour);

?>    

<br />
<br />

<a href="index.php">Retour</a>