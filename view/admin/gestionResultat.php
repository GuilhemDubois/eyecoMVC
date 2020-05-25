<?php include('testlangue.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>

<html>
<head>
    <meta charset="utf-8" />
    <title>  <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "Résultats";

        }
        else
        {
            echo "Results";

        }
        ?></title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="../footer/footerStyle.css"/>
    <link rel="stylesheet" href="../test/ResultatsStyle.css"/>
    <link rel="stylesheet" href="../acceuil/normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>



</head>




<?php include('header.php'); $admin=$_SESSION['auth']->admin;
if($admin==0){echo '<body onLoad=" alert(\'Vous n avez pas le droit d acceder à cette page...\') "> ';
    echo '<meta http-equiv="refresh" content="0;URL=eyeco.php">';}
?>




    <div class="faq">
        <div class="f-title">

<table width="630" align="left" bgcolor="#CCCCCC">
    <tr >


        <th width="248">Identifiant</th>


    </tr>
    <?php  $req = $pdo->prepare("SELECT identifiant FROM user ");
    $req->execute();
    $alluser= $req->fetchAll();
    $var=1;
    foreach($alluser as $allUSER):
        $identifiant=$allUSER->identifiant;
        if ($var==0){ ?>

            <tr >
                <td width="248"> <?php echo $identifiant ?></td>
            </tr>
            <?php 	$var=1;
        }else{ ?>

            <tr bgcolor="#FFCCCC">
                <td width="248"><?php echo $identifiant ?></td>
            </tr><undefined></undefined>
            <?php 	$var=0;
        }
    endforeach;
    ?>

    <form name='form1' method='post' action='gestionResultat.php'>


        <td width='169' bgcolor='#CCFF00'>

            <input name='recherche' type='text' id='rechercher'  />
            <input name='rechercher' type='submit' id='rechercher' value='Rechercher' />
        </td>
    </form>
</table>
            <?php

            if(isset($_POST['recherche'])){ echo 'Historique de ',$_POST['recherche']; }?>
   </div>
    </div>
<?php

if(isset($_POST['recherche'])){
$rech=$_POST['recherche']; ?>





<?php




$req = $pdo->prepare("SELECT MAX(id_Test) FROM `test` WHERE identifiant='$rech'");
 $req->execute();
$nbtests = $req->fetch();


foreach ($nbtests as $name => $value) {
    $nbtest = $value;
}  /* selectionne le nombre de test effectuer*/
    if ($nbtest==''){ echo '<body onLoad=" alert(\'Client introuvable ou pas d historique...\') "> ';
        echo '<meta http-equiv="refresh" content="0;URL=gestionResultat.php">'; }
    ?>
<section>
<div class="f-container">
<div class="f-accordion">
<?php
for ($i = 1; $i <= $nbtest; $i++) {
    $req = $pdo->prepare("SELECT MAX(id_Test_composant) FROM `test` WHERE id_Test='$i' AND identifiant='$rech' ");
    $req->execute();
    $nbtestcomposants=$req->fetch(); ?>

        <div class="f-accordion-item" id="question1">
            <a class="f-accordion-link" href="#question1">
                <?php echo 'Test n° ',$i ?>






    <table width="630" align="left" bgcolor="#CCCCCC">

    <tr>

        <th>TEST</th>
        <th>NOTE</th>


    </tr>
    <?php
    foreach ($nbtestcomposants as $name => $value) {
        $nbtestcomposant = $value;
    }  /* selectionne le nombre de composant de test effectuer*/

        for ($y = 1; $y <= $nbtestcomposant; $y++) {
            $req = $pdo->prepare("SELECT type,score,date  FROM `test` WHERE id_Test_composant='$y' AND identifiant='$rech' AND id_Test='$i' ");
            $req->execute();
            $composant=$req->fetch();
            $type=$composant->type;
            $score=$composant->score;
            $date=$composant->date;
            ?>
            <tr>

                <td ><?php echo $type ?></td>
                <td ><?php echo $score ?></td>


            </tr>


      <?php  }  ?>


    </table> <div><?php echo $date; ?> </div> </a></div>


        <?php } ?>
</div>
</section>

<?php } ?>



<?php include('footer.php');?>


