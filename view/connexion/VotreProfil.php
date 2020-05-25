<link rel="stylesheet" type="text/css" href="view/connexion/styleAccueil.css">
<div class="connexion">
    <div class="c-form">

        <h3><?php $_SESSION['langue'] ='francais'; if ($_SESSION['langue'] == 'francais')
            {
                echo "Connexion";
            }
            else
            {
                echo "Log in";
            }
            ?></h3>
        <form action="#" method="post">

            <input type="text" name="identifiant" id="identifiant" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Identifiant";
            }
            else
            {
                echo "Username";
            }
            ?>"><br/>


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
                echo "Se connecter";
            }
            else
            {
                echo "Connexion";
            }
            ?>">
            <a href="motdepasse.php"><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Mot de passe oublié ?";
                }
                else
                {
                    echo "Password forget ?";
                }
                ?></a><br><br>
            <a href="controller.php?function=inscription"><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "S'inscrire";
                }
                else
                {
                    echo "Inscription";
                }
                ?></a>

        </form>
    </div>
</div>



