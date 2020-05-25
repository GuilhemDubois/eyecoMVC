


<head>

    <meta charset="utf-8" />
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="../footer/footerStyle.css"/>
    <link rel="stylesheet" href="motdepasseStyle.css"/>
    <link rel="stylesheet" href="../accueil/normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>


</head>

<body>


<?php include('header.php');

if(!empty($_POST) && !empty($_POST['newmdp']) && !empty($_POST['oldmdp']) && !empty($_POST['oldmdp']) ) {
    $req = $pdo->prepare('SELECT * FROM user WHERE identifiant= ? ');
    $req->execute([$_POST['identifiant']]);
    $user = $req->fetch();
    if($user==''){
        if ($_SESSION['langue'] == 'francais') {
        echo "Identifiant ou Mot de passe incorrect !";
    } else {
        echo "User or password incorrect !";
    }}
    elseif (password_verify($_POST['oldmdp'],$user->mdp)) {
        $req = $pdo->prepare('UPDATE user set mdp=? WHERE identifiant= ? ');
        $req->execute([$_POST['newmdp'],$_POST['identifiant']]);
        echo '<body onLoad="alert(\'Connectez vous, votre mdp a été modifié...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=VotreProfil.php">';
        exit();

    }else{
        if ($_SESSION['langue'] == 'francais') {
            echo "Identifiant ou Mot de passe incorrect !";
        } else {
            echo "User or password incorrect !";
        }


    }
}elseif(!empty($_POST)){
    echo'<div class="error"><p> Veuillez remplir les informations correctement !</p></div>';
}














?>

<div class="motdepasse">
    <div class="m-form">

        <h3><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Modifier le mot de passe";
            }
            else
            {
                echo "Change your password";
            }
            ?></h3>

        <form method="post">

            <input type="text" name="identifiant" id="motdepasse1" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Identifiant";
            }
            else
            {
                echo "Username";
            }
            ?>">

            <input type="password" name="oldmdp" id="motdepasse1" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Ancien mot de passe";
            }
            else
            {
                echo "Previous password";
            }
            ?>">

            <br/>

            <input type="password" name="newmdp" id="motdepasse2" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Nouveau mot de passe";
            }
            else
            {
                echo "New password";
            }
            ?>">

            <br>

            <input type="submit" value="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Modifier";
            }
            else
            {
                echo "Modify";
            }
            ?>">

            <br>
            <br>

            <a href="Inscription.php"><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "S'inscrire";
                }
                else
                {
                    echo "Sign up";
                }
                ?></a>

        </form>
    </div>
</div>


<?php include('footer.php'); ?>
<script src="../accueil/app.js" charset="utf-8"></script>

</body>
