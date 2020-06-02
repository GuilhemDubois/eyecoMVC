<head>

    <meta charset="utf-8" />
    <title>FAQ</title>

    <link rel="stylesheet" href="view/FAQ/FAQ.css"/>

</head>

<body>



    <div class="faq">
        <div class="f-title">
            <h2><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "BIENVENUE SUR LA FAQ";
                }
                else
                {
                    echo "FREQUENTLY ASKED QUESTIONS";
                }
                ?></h2>
        </div>
    </div>



<section>

    <?php if(isset($_SESSION['auth'])): ?>
        <?php $admi=$_SESSION['auth']->admin  /*TEST authentifier*/?>
        <?php if($admi==1): /* Test admin */ ?>
            <a class = "askquest" href = "controller.php?function=reponse" title = "Repondre Question">Repondre Question</a>
        <?php endif; ?>
        <?php if($admi==0): /* Test non admin */ ?>
            <a class = "askquest" href = "controller.php?function=question" title = "Poser Question">Poser Question</a>
        <?php endif; ?>

    <?php endif; ?>

    <?php if(!isset($_SESSION['auth'])):  ?>
        <a class = "askquest" href = "controller.php?function=connexion" title = "Poser Question">Poser Question</a>
    <?php endif; ?>


    <div class="f-container">
        <div class="f-accordion">

            <!-- Affichage des questions et des reponses -->

            <?php foreach  ($allQuesEtRep as $valeur):
                $questionUneParUne = $valeur -> question;
                $reponseUneParUne = $valeur -> reponse;?>



            <div class="f-accordion-item" id="question1">
                <a class="f-accordion-link" href="#question1">
                    <?php
                    echo $questionUneParUne;        //afficher la question
                    ?>
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>

                </a>
                <div class="f-answer">
                    <p>
                        <?php
                        echo $reponseUneParUne;    //afficher la reponse a la question
                        ?>
                    </p>

                </div>

        </div>

            <?php endforeach;?>
    </div>
</section>



</body>

</html>

<script src="view/accueil/app.js" charset="utf-8"></script>

</body>

