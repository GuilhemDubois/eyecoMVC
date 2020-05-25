
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>


    <link rel="stylesheet" href="view/inscription/inscriptionstyle.css"/>




</head>

<body>










<?php if(isset($errors) && !empty($errors) ): ?>
    <div class="ereur">
        <h1>Remplissage du formulaire incorrect. Veuillez réessayer.</h1>
        <ul>
            <?php foreach($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>

<?php if(isset($errors) && empty($errors) ){echo "Vous êtes désormais inscrit M. " ,$_POST['nom'],"."; } ?>


<div class="inscription">
    <div class="i-form">

        <h3><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Inscription";
            }
            else
            {
                echo "Log in";
            }
            ?></h3>
        <form action="controller.php?function=inscription" method="post">

            <input type="text" name="prenom" id="prenom" placeholder="Prénom" size="28" maxlength="20"><br/>
            <input type="text" name="nom" id="nom" placeholder="Nom" size="20" maxlength="20"><br/>
            <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" size="20" maxlength="20"><br/>
            <input type="number" name="codepilote" id="codepilote" placeholder="Code Pilote" size="20" maxlength="20"><br/>
            <input type="email" name="email" id="email" placeholder="Email" size="20" maxlength="50"><br/>
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
            <br>
            <input type="submit" value="S'inscrire">

            <a href="controller.php?function=connexion">Se connecter</a>

        </form>
    </div>
</div>



<script src="../acceuil/app.js" charset="utf-8"></script>
</body>
