<head>

    <meta charset="utf-8" />
    <title>Statistiques</title>

    <link rel="stylesheet" href="view/FAQ/FAQ.css"/>



</head>




<div class="statistiques">
    <div class="f-title">
        <h2>Bienvenue sur les Statistiques</h2>
    </div>
</div>

<body>
<br><br><br><br><br><br><br><br>
<h2>
<?php
include('model/stats.php');
$valeur = calculNbInscrit($bdd);
$nbInscrit = $valeur -> nbInscrit;
echo  'il y a actuelement ' . $nbInscrit[0] . ' inscrit (non administrateur) sur le site' ;
?></h2>
<br><br><br><br><br><br><br><br>




</body>




