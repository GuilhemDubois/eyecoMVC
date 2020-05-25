
<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>

    <link rel="stylesheet" href="view/accueil/eyecoStyle.css"/>


</head>

<body>


<div class="accueil">
    <div class="a-title">
        <h2><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Tests psychotechniques pour pilotes de ligne";
            }
            else
            {
                echo "Psychotechnical tests for airline pilots";
            }
            ?></h2>
        <p><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Nous évaluons vos compétences grâce à une batterie de test adapté à vos besoins";
            }
            else
            {
                echo "We assess your skills using a test battery adapted to your needs";
            }
            ?>  </p>
    </div>
</div>

<div class="a-info">

</div>



<script src="app.js" charset="utf-8"></script>

</body>








