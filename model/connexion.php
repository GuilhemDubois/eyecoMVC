<?php
function connexion(PDO $bdd, array $valeur)
{
    $req = $bdd->prepare('SELECT * FROM user WHERE identifiant= ? ');
    $req->execute([$_POST['identifiant']]);
    return $req->fetch();
}