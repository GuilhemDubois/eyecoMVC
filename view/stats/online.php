<?php require_once 'bdd.php';

$temps_session = 20;                    // temps d'actualisation X sec
$temps_actuel = date('U');      // date en sec (depuis l'époque Unix ('U'))
$userIP = $_SERVER['REMOTE_ADDR'];      // recup de l'IP USER


    // verification que l'utilisateur n'est pas déjà dans la BDD //
$req_ip_exist = $pdo ->prepare('SELECT * FROM online WHERE userIP = ?');
$req_ip_exist ->execute(array($userIP));
$ip_existe = $req_ip_exist -> rowCount();

                // si il n'est pas dedans
if($ip_existe == 0){
    $add_ip = $pdo ->prepare('INSERT INTO online(userIP,temps) VALUES (?,?)');
    $add_ip -> execute(array($userIP,$temps_actuel));
}
                // si il est déjà dedans
else{
    $update_ip = $pdo->prepare('UPDATE online SET temps = ? WHERE userIP = ?');
    $update_ip->execute(array($temps_actuel,$userIP));
}

$session_delete_time =  $temps_actuel - $temps_session;  //calcul du temps auquel il faut supprimer les données USER

$delet_ip = $pdo->prepare('DELETE FROM online WHERE temps < ?');
$delet_ip->execute(array($session_delete_time));

//compteur d'utilisateur actuelement sur le site
$show_user_nbr = $pdo->prepare('SELECT COUNT(*) AS nbCoLive FROM online');
$show_user_nbr ->execute();
$user_nbr = $show_user_nbr ->fetch();


$nbCoLive = $user_nbr -> nbCoLive;
?>