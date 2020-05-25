<head>

    <meta charset="utf-8" />
    <title>Statistiques</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="../footer/footerStyle.css"/>
    <link rel="stylesheet" href="FAQ.css"/>
    <link rel="stylesheet" href="../acceuil/normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>


<?php include('header.php'); ?>

<div class="statistiques">
    <div class="f-title">
        <h2>Bienvenue sur les Statistiques</h2>
    </div>
</div>

<body>

<?php $req =  $pdo -> prepare('SELECT COUNT(*) as nbInscrit FROM user WHERE admin = 0 ');
$req -> execute();
$valeur = $req -> fetch();


$nbInscrit = $valeur -> nbInscrit;
echo  'il y a actuelement ' . $nbInscrit[0] . ' inscrit (non administrateur) sur le site' ;
?>





</body>



<?php include('footer.php');?>
