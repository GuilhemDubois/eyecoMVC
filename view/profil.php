
 <link rel="stylesheet" href="view/admin/gestionloginStyle.css"/>

</head>
<script src="view/accueil/app.js" charset="utf-8"></script>
<div class="gestion">
    <div class ="g-form">

<?php
    if(isset($_SESSION['auth'])){
        $rech=$_SESSION['auth']->identifiant;

    $req = $bdd->prepare("SELECT * FROM user WHERE identifiant='$rech'");
    $req->execute();
    $alluser= $req->fetchAll();
    $ALLUSERS=array('');

    foreach($alluser as $allUSER):
        foreach($allUSER as $intermediare):
            array_push($ALLUSERS,$intermediare) ;
        endforeach;
    endforeach; ?>



        <form id='form1' name='form1' method='post' action='controller.php?function=profil'>
            <h3>Votre Profil</h3>
            <table width='420' border='0'>

                <tr>
                    <td>Nom</td>
                    <td><label>
                            <input name='nom' type='text' id='nom'  value='<?php echo $ALLUSERS[2]; ?>'/>
                        </label></td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td><label>
                            <input name='prenom' type='text' id='prenom' value='<?php echo $ALLUSERS[3]; ?>' />
                        </label></td>
                </tr>
                <tr>
                    <td>Identifiant</td>
                    <td><label>
                            <input name='identifiant' type='text' id='identifiant' value='<?php echo $ALLUSERS[8]; ?>' />
                        </label></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input name='email' type='text' id='email' value='<?php echo $ALLUSERS[4]; ?>' /></td>
                </tr>
                <tr>
                    <td>Code pilote</td>
                    <td><input name='codepilote' type='text' id='codepilote' value='<?php echo $ALLUSERS[6]; ?>' /></td>
                </tr>
                <tr>
                    <td colspan='2'><label>


                            <input name='modifier' type='submit' id='modifier' value='Modidier' />
                            <input name='supprimer' type='submit' id='supprimer' value='Supprimer' />
                        </label></td>
                </tr>
            </table>
            <p> </p>
        </form>
        <?php
    }
    elseif(!isset($_SESSION['auth']))
    {
        echo '<body onLoad=" alert(\'Vous n etes pas connecté...\') "> ';
        echo '<meta http-equiv="refresh" content="0;URL=controller.php?function=profil">';
    }


    if (isset($_POST['modifier'])){ //Bouton "modifier"

        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $identifiant=$_POST['identifiant'];
        $email=$_POST['email'];
        $codepilote=$_POST['codepilote'];
        if($nom=='' || $prenom=='' || $identifiant=='' || $email=='' || $codepilote=='')
        {

            echo '<body onLoad="alert(\'faire une recherch avant la modification ou verifiez les champs\')">';
            echo '<meta http-equiv="refresh" content="0;URL=controller.php?function=profil">';
        } else {
            $req = $bdd->prepare("UPDATE user SET nom='$nom',prenom='$prenom',identifiant='$identifiant',email='$email',codepilote='$codepilote' where identifiant ='$rech'");
            $req->execute();

            echo '<body onLoad="alert(\'Modification effectuée...\')">';
            echo '<meta http-equiv="refresh" content="0;URL=controller.php?function=profil">';
        }
    }

    if(isset($_POST['supprimer'])) //bouton "supprimer"
    {


        $req = $bdd->prepare("DELETE  FROM user  where identifiant ='$rech'");
        $req->execute();

        echo '<meta http-equiv="refresh" content="0;URL=controller.php?function=profil">';
    }

?>

    </div>
</div>