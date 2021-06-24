<?php
if (count($_GET['CMD'] == 0)){
    echo "ça fonctionne";
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