<?php


function inscription(PDO $bdd, array $valeur)
{
    $req = $bdd->prepare("INSERT INTO user SET prenom= ?, nom = ?, identifiant = ?, email = ?, mdp = ?, codepilote = ?");
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
    $req->execute([htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['identifiant']), htmlspecialchars($_POST['email']), $mdp, htmlspecialchars($_POST['codepilote'])]);

}
function testid(PDO $bdd, array $valeur)
{
    $req = $bdd->prepare('SELECT id_user FROM user WHERE identifiant= ? ');
    $req->execute([htmlspecialchars($_POST['identifiant'])]);
    return $req->fetch();
}
function testcodepilote(PDO $bdd, array $valeur)
{
    $req = $bdd->prepare('SELECT id_user FROM user WHERE codepilote= ? ');
    $req->execute([htmlspecialchars($_POST['codepilote'])]);
    return $req->fetch();
}
