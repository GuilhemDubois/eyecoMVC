<?php

$temps_session = 20;                    // temps d'actualisation X sec
$temps_actuel = date('U');      // date en sec (depuis l'époque Unix ('U'))
$userIP = $_SERVER['REMOTE_ADDR'];      // recup de l'IP USER


    // verification que l'utilisateur n'est pas déjà dans la BDD //
$ip_existe = ip($bdd,$userIP);

if($ip_existe == 0){
    pasDejaCo($bdd,$userIP,$temps_actuel);      // si il n'est pas dedans
}

else{
    dejaCo($bdd,$temps_actuel,$userIP);         // si il est déjà dedans
}

$session_delete_time =  $temps_actuel - $temps_session;  //calcul du temps auquel il faut supprimer les données USER

verificationTiming($bdd,$session_delete_time);



$user_nbr= conteur($bdd);           //compteur d'utilisateur actuelement sur le site

