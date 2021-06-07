<?php
session_start();

/*//création de la Variable de session "connecter" sur false
if (! isset($_SESSION['connecter'])){
    $_SESSION['connecter'] = false;
}

//fonction principale du programme
function main(){
// Condition qui compare la valeur de la variable "connecter" avec un booléen
if ($_SESSION['connecter'] == true){
    Connexion();
}
else if ($_SESSION['connecter'] == false){
    Déco();
}
else {
    resetP();
}
}*/

// Notre fonction qui gèrer le formulaire de connexion
function Connexion() {
    $_SESSION['connecter'] = true;
    echo "Vous êtes connecter<br>";
    echo "<form action='co3.php'>";
    echo "<input name=CMD type=hidden value='DECO'>";
    echo "<input name=connexion type=submit value='Deconnexion'> ";
    echo "</form><br>";
    //echo "débug de la fonction connexion";
     }
// fonction qui détruit la séssion active pour la déco du l'utilisateur
function Déco(){
    $_SESSION['connecter'] = false;
    echo "Vous êtes Déconnecter<br>";
    echo "<form action='co3.php'>";
    echo "<input name=CMD type=hidden value='CO'>";
    echo "<input name=connexion type=submit value='Connexion'>";
    echo "</form><br>";
    header('Location: co3.2.php');
    //echo "debug de la fonction de deconnexion";
}
function resetP(){
session_destroy();
header('Location: co3.2.php');
}

  // défini la commande vide
    $CMD = "RIEN";

    if( count($_GET) != 0 )
    { if( ! isset($_GET['CMD']) )
        echo 'ERREUR CMD non définie' ;
      else
      { $CMD = $_GET['CMD'] ; //Appeler la commande demandée
        switch( $CMD )	
        { case 'CO' : Connexion();	break;
        case 'DECO' :	Déco();	break;
        case 'RESET':  resetP(); break;
        default : echo 'ERREUR CMD inconnue '.$CMD ;
    } } }
?>