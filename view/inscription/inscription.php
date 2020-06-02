
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
                echo "Login";
            }
            ?></h3>
        <form action="controller.php?function=inscription" method="post">

            <input type="text" name="prenom" id="prenom"  size="28" maxlength="20" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Prénom";
            }
            else
            {
                echo "First name";
            }
            ?>"><br/>
            <input type="text" name="nom" id="nom"  size="20" maxlength="20" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Nom";
            }
            else
            {
                echo "Last name";
            }
            ?>"><br/>
            <input type="text" name="identifiant" id="identifiant"  size="20" maxlength="20" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Identifiant";
            }
            else
            {
                echo "Username";
            }
            ?>"><br/>
            <input type="number" name="codepilote" id="codepilote"  size="20" maxlength="20" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Code pilote";
            }
            else
            {
                echo "Pilot code";
            }
            ?>"><br/>
            <input type="email" name="email" id="email" size="20" maxlength="50" placeholder="Email"><br/>
            <input type="password" name="mdp" id="mdp" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Mot de passe";
            }
            else
            {
                echo "Password";
            }
            ?>">
            <br>
            <input type="submit" value="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "S'inscrire";
            }
            else
            {
                echo "Register";
            }
            ?>"">

            <a href="controller.php?function=connexion"><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Inscription";
                }
                else
                {
                    echo "Login";
                }
                ?></a>

        </form>
    </div>
</div>



<script src="../accueil/app.js" charset="utf-8"></script>
</body>
