<?php
function calculNbInscrit(PDO $bdd)
{
    $req =  $bdd -> prepare('SELECT COUNT(*) as nbInscrit FROM user WHERE admin = 0 ');
    $req -> execute();
    return $req -> fetch();
}

function ip(PDO $bdd,$userIP)
{
    $req_ip_exist = $bdd ->prepare('SELECT * FROM online WHERE userIP = ?');
    $req_ip_exist ->execute(array($userIP));
    return $req_ip_exist -> rowCount();
}

function pasDejaCo(PDO $bdd,$userIP,$temps_actuel)
{
    $add_ip = $bdd ->prepare('INSERT INTO online(userIP,temps) VALUES (?,?)');
    $add_ip -> execute(array($userIP,$temps_actuel));
    return;
}

function dejaCo(PDO $bdd,$temps_actuel,$userIP)
{
    $update_ip = $bdd->prepare('UPDATE online SET temps = ? WHERE userIP = ?');
    $update_ip->execute(array($temps_actuel,$userIP));
    return;
}

function verificationTiming(PDO $bdd,$session_delete_time)
{
    $delet_ip = $bdd->prepare('DELETE FROM online WHERE temps < ?');
    $delet_ip->execute(array($session_delete_time));
    return;
}

function conteur(PDO $bdd)
{
    $show_user_nbr = $bdd->prepare('SELECT COUNT(*) AS nbCoLive FROM online');
    $show_user_nbr ->execute();
    return $show_user_nbr ->fetch();
}