<?php
session_start();
if (! isset($_GET['CMD'])){
    echo "Vous êtes Déconnecter<br>";
    echo "<form action='?'>";
    echo "<input name=CMD type=hidden value='CO'>";
    echo "<input name=connexion type=submit value='Connexion'>";
    echo "</form><br>";
    echo "debug de la fonction de Base";
}
function Connexion() {
    $_SESSION['connecter'] = true;
    echo "Vous êtes connecter<br>";
    echo "<form action='?'>";
    echo "<input name=CMD type=hidden value='DECO'>";
    echo "<input name=connexion type=submit value='Deconnexion'> ";
    echo "</form><br>";
    echo "débug de la fonction connexion";
     }
// fonction qui détruit la séssion active pour la déco du l'utilisateur
function Déco(){
    $_SESSION['connecter'] = false;
    echo "Vous êtes Déconnecter<br>";
    echo "<form action='?'>";
    echo "<input name=CMD type=hidden value='CO'>";
    echo "<input name=connexion type=submit value='Connexion'>";
    echo "</form><br>";
    echo "debug de la fonction de deconnexion";
}
function resetP(){
session_destroy();
}


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