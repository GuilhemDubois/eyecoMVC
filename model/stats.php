<?php
function statss(PDO $bdd)
{
    $req =  $bdd -> prepare('SELECT COUNT(*) as nbInscrit FROM user WHERE admin = 0 ');
    $req -> execute();
    return $req -> fetch();
}