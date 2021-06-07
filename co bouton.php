<?php
session_start();

//création de la Variable de session "connecter" sur false
if (! isset($_SESSION['connecter'])){
    $_SESSION['connecter'] = false;
}

// Condition qui compare la valeur de la variable "connecter" avec un booléen
if ($_SESSION['connecter'] == true){
    echo "<form action='co3.php'>";
    echo "<input name=CMD type=hidden value='DECO'>";
    echo "<input name=connexion type=submit value='Deconnexion'> ";
    echo "</form>";
}
else if ($_SESSION['connecter'] == false){
    echo "<form action='co3.php'>";
    echo "<input name=CMD type=hidden value='CO'>";
    echo "<input name=connexion type=submit value='Connexion'>";
    echo "</form>";
}
else {
    echo "ERREUR";
}

// Notre fonction qui gèrer le formulaire de connexion
function Connexion() {
    
    $_SESSION['connecter'] = true;
    echo "Connecter<br>";
    echo "débug de la fonction connexion";
     }
// fonction qui détruit la séssion active pour la déco du l'utilisateur
function Déco(){
    
    $_SESSION['connecter'] = false;
    echo "Deconnnecter<br>";
    echo "débug de la fonction deconnexion";
    //session_destroy();
}

    // défini la comande
    $CMD = "RIEN";

    if( count($_GET) != 0 )
    { if( ! isset($_GET['CMD']) )
        echo 'ERREUR CMD non définie' ;
      else
      { $CMD = $_GET['CMD'] ; //Appeler la commande demandée
        switch( $CMD )	
        { case 'CO' : Connexion();	break;
        case 'DECO' :	Déco();	break;
        default : echo 'ERREUR CMD inconnue '.$CMD ;
    } } }
?>