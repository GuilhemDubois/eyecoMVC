

<html>

<head>
    <meta charset="utf-8" />
    <title>  <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "PAGE D'ACCEUIL";

        }
        else
        {
            echo "HOME";

        }
        ?></title>

    <link rel="stylesheet" href="view/test/ResultatsStyle.css"/>


</head>


<body>

<div class="faq">
    <div class="f-title">
        <h2>Votre historique</h2>
    </div>
</div>

<?php include('model/test.php');
if(!isset($_SESSION['auth'])){  echo '<body onLoad="alert(\'Connectez vous...\')">';
    echo '<meta http-equiv="refresh" content="0;URL=controller?function=connexion">';
}else{




$re=$_SESSION['auth']->identifiant; /*re variable de l'user rechercher*/

$nbtests = test($bdd,$re);

foreach ($nbtests as $name => $value) {
    $nbtest = $value;
}  /* selectionne le nombre de test effectuer*/
    if ($nbtest==''){ echo "<section><div class='f-container'><div class='f-accordion'><div class=\"f-accordion-item\" id=\"question1\">
            <a class=\"f-accordion-link\" href=\"#question1\"> Vous n'avez pas de test effectué !</a></div></div></div></section>"; }
    ?>
<section>
<div class="f-container">
<div class="f-accordion">
<?php
for ($i = 1; $i <= $nbtest; $i++) {
    $nbtestcomposants=test2($bdd,$re,$i); ?>

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
            $composant=test3($bdd,$re,$i,$y);
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
    <script src="view/accueil/app.js" charset="utf-8"></script>
<?php } ?>
</body>


</html>
