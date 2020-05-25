<?php
function test(PDO $bdd, $re)
{
    $req = $bdd->prepare("SELECT MAX(id_Test) FROM `test` WHERE identifiant='$re'");
    $req->execute();
    return $req->fetch();
}
function test2(PDO $bdd, $re,$i)
{
    $req = $bdd->prepare("SELECT MAX(id_Test_composant) FROM `test` WHERE id_Test='$i' AND identifiant='$re' ");
    $req->execute();
    return $req->fetch();
}
function test3(PDO $bdd, $re,$i,$y)
{
    $req = $bdd->prepare("SELECT type,score,date  FROM `test` WHERE id_Test_composant='$y' AND identifiant='$re' AND id_Test='$i' ");
    $req->execute();
    return $req->fetch();
}


