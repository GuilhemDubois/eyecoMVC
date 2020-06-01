<?php
session_start();
include('model\bdd.php');
if (!isset($_GET['function']) || empty($_GET['function'])) {
    $function = "accueil";
} else {
    $function = htmlspecialchars($_GET['function']);

}
switch ($function) {
    case 'inscription':

        if (!empty($_POST)) {
            include('model/inscription.php');
            $errors = array();

            if (empty($_POST['prenom']) || !preg_match('/^[a-zA-Z_]+$/', $_POST['prenom'])) {
                $errors['prenom'] = "Prénom invalide.";
            }

            if (empty($_POST['nom']) || !preg_match('/^[a-zA-Z_]+$/', $_POST['nom'])) {
                $errors['nom'] = "Nom invalide.";
            }

            if (empty($_POST['identifiant']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['identifiant'])) {
                $errors['identifiant'] = "Identifiant invalide.";
            } else {
                $testexist = testid($bdd,$_POST);
                if ($testexist) {
                    $errors['identifiant'] = 'Cet identifiant existe déjà !';
                }
            }

            if (empty($_POST['email'])) {
                $errors['email'] = "Entrez une adresse email correct.";
            }

            if (empty($_POST['mdp'])) {
                $errors['mdp'] = "Entrez un mot de passe correct.";
            }

            if (empty($_POST['codepilote']) || !preg_match('/^[0-9_]+$/', $_POST['codepilote'])) {
                $errors['codepilote'] = "Code pilote incorrect.";
            } else {
                $tesexist = testcodepilote($bdd,$_POST);
                if ($tesexist) {
                    $errors['codepilote'] = 'Ce code pilote existe déjà';
                }
            }


            if (empty($errors)) {

                inscription($bdd,$_POST);

            }

        }
        $vue="inscription\inscription";
        break;



    case 'connexion':
        if(!empty($_POST) && !empty($_POST['identifiant']) && !empty($_POST['mdp'])) {
            include('model/connexion.php');
    $user =connexion($bdd,$_POST);
    if($user==''){
        if ($_SESSION['langue'] == 'francais') {
            echo "Identifiant ou Mot de passe incorrect !";
        } else {
            echo "User or password incorrect !";
        }}
    if (password_verify(htmlspecialchars($_POST['mdp']),$user->mdp)) {
        $_SESSION['auth'] = $user;
        var_dump($_SESSION['auth']);
        header('Location: controller.php?function=accueil');
        exit();
    }else{
        if ($_SESSION['langue'] == 'francais') {
            echo "Identifiant ou Mot de passe incorrect !";
        } else {
            echo "User or password incorrect !";
        }


    }
     }elseif(!empty($_POST)){
    echo'<div class="error"><p> Veuillez remplir les informations correctement !</p></div>';
      }

        $vue="connexion\VotreProfil";
        $css="accueil\styleAccueil";




        break;

    case 'accueil':
        $vue="accueil/eyeco";
        break;

    case 'deconnexion':
        $vue="connexion/logout";
        break;

    case 'test':
        $vue="test/Test";
        break;

    case 'NousConnaitre':
        $vue="team/NousConnaitre";
        break;

    case 'Resultats' :
        $vue="test/Resultats";
        break;


    case 'FAQ':
        include('model/faq.php');
        $allQuesEtRep = FAQ($bdd);
        $vue="FAQ/FAQ";
        break;

    case 'question';
        $date = date("y-m-d");
        $re=$_SESSION['auth']->identifiant;
        $vue='FAQ/question';
        include('model/faq.php');

        if(!empty($_POST)) {
            question($bdd, $re, $date, $_POST['zoneQuestion']);
            $vue='FAQ/FAQ';
        }

        break;


        case 'reponse':
         include('model/faq.php');
         $questionEtSaRep = reponse($bdd);
         if(!empty($questionEtSaRep)){
             $listQuestions=array('');

             foreach($questionEtSaRep as $questionPuisSaRep): array_push($listQuestions,$questionPuisSaRep) ;
             endforeach;
         }

         if( !empty($_POST) && isset($_POST['zoneQuestion']) ) {
             reponseadd($bdd,$listQuestions[5]);
             $questionEtSaRep = reponse($bdd);

         }
         if( !empty($_POST) && isset($_POST['Supprimer']) ) {
             reponsesuppr($bdd,$listQuestions[5]);
             $questionEtSaRep = reponse($bdd);
     }
         $vue='FAQ/reponse';
         break;

    case 'gestionlogin':

        $vue="admin/gestionlogin";
        break;

    case 'gestionResultat':

        $vue="admin/gestionResultat";
        break;

    case 'mentionlegales':

        $vue="mentionlegale/mentionlegales";
        break;

    case 'stats':

        $vue="stats/statistique";
        break;

    default:
        // si aucune fonction ne correspond au paramètre function passé en GET
        $vue = "error404";

}

require('view/header/header.php');
require('view/' . $vue . '.php');
require('view/footer/footer.php');
