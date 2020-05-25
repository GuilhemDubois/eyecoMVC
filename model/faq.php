<?php
function FAQ(PDO $bdd)
{
    $req = $bdd -> prepare('SELECT question, reponse FROM faq WHERE reponse is not NULL '); //requete SQL pour avoir les questions et les reponses
    $req->execute();
    return $req -> fetchAll();
}
function question(PDO $bdd,$re,$date,$question)
{
    $req = $bdd->prepare("INSERT INTO faq SET identifiant= ?, jour = ?, question = ?");
    return $req->execute([$re, $date, $question]);
}
function reponse(PDO $bdd)
{
    $req = $bdd->prepare('SELECT question,reponse,identifiant,jour,idQuestion FROM faq WHERE reponse IS NULL ');
    $req->execute();
    return $req->fetch();
}
function reponseadd(PDO $bdd,$quest)
{
    $req = $bdd->prepare("UPDATE faq SET reponse=? WHERE idQuestion=$quest ");
    return $req->execute([ $_POST['zoneQuestion']]);
}
function reponsesuppr(PDO $bdd,$quest)
{
    $req = $bdd->prepare("DELETE FROM faq WHERE idQuestion=$quest ");
    return $req->execute();
}
