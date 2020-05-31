<?php
function connexion(PDO $bdd, array $valeur)
{
    $req = $bdd->prepare('SELECT * FROM user WHERE identifiant= ? ');
    $req->execute([htmlspecialchars($_POST['identifiant'])]);
    return $req->fetch();
}