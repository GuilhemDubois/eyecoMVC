<!DOCTYPE html>

<html>
<head>
    <!-- En-tête de la page -->


    <meta charset="utf-8" /> <!-- Doctype : il s'agit d'une page HTML -->
    <title>Nous contacter</title> <!-- Titre de la page -->
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="../footer/footerStyle.css"/>
    <link rel="stylesheet" href="mailStyle.css"/>

</head>

<body>


<?php include('header.php'); ?>


<?php include('footer.php'); ?>



<p id="pres">

    Faites-nous part de vos retours :

</p>



<form method="post" action="../../model/bdd.php" id="formulaire">

<textarea id="email" name="email" rows="15" cols="60">

</textarea>

    <input class="envoyermail" type="submit" value="Envoyer" />

</form>

<!DOCTYPE html>

<html>



</html>