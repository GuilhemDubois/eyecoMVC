<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Rep aux questions</title>

    <link rel="stylesheet" href="view/FAQ/FAQ.css"/>
    <link rel="stylesheet" href="view/FAQ/question.css"/>
</head>


<body>

<br><br><br><br><br><br>



<?php if($questionEtSaRep==false):  ?>
    <h1> Il n'y a aucune question à répondre </h1>
<?php endif; ?>

<?php if($questionEtSaRep!=false):  ?>


<div class="Question">
    <h1 class="titreFAQ">FAQ :</h1>
        <?php
            $listQuestions=array(''); ?>

            <?php foreach($questionEtSaRep as $questionPuisSaRep): array_push($listQuestions,$questionPuisSaRep) ;?>
        <?php endforeach;?>


            <div class="questionEtReponse">


                Question de <?php echo $listQuestions[3],' le ', $listQuestions[4]?><br>
                <?php echo $listQuestions[1]; ?><br>
                <?php echo $listQuestions[2]; ?><br><br><br><br>


            </div>
</div>

    <div id="formulaire">
        <form method="post" action="controller.php?function=reponse">
            <p>
                <label for="zoneQuestion" id="entete"> Réponse à la question :</label>
                <textarea name="zoneQuestion" type="text" id="zoneQuestion" placeholder="Votre réponse"></textarea>
                <input type="submit" name="envoyer" id="envoyer">
            </p>

        </form>

    </div>

    <div id="formulaire">
        <form method="post" action="controller.php?function=reponse">
            <p>
                  <label>Supprimer</label>
                <input type="submit" name="Supprimer" id="envoyers">
            </p>

        </form>

    </div>

<?php endif; ?>


















</body>
</html>