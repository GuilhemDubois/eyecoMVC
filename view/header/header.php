
<?php include('public/testlangue.php');
$adresse = $_SERVER['PHP_SELF'];
$i = 0;
foreach($_GET as $cle => $valeur){
    $adresse .= ($i == 0 ? '?' : '&').$cle.($valeur ? '='.$valeur : '');
    $i++;
}
$_SESSION["location"] = $adresse;
?>

<meta charset="UTF-8">


<link rel="stylesheet" type="text/css" href="view/header/headerStyle.css">
<link rel="stylesheet" type="text/css" href="view/accueil/normalize.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<header>

    <nav class="menu" role="navigation">

        <div class="inner">


            <div class="m-nav-toggle">
                    <span class="m-toggle-icon">

                    </span>
            </div>

            <div class="m-left-logo">
                <a href="controller.php?function=accueil"><img src="images/logopetitpetit.png"/></a>
            </div>

            <div class="m-left">
                <h1 class="logo">Eyeco</h1>
            </div>

            <div class="m-right">
                <a href="controller.php?function=accueil" class="m-link"><i class="fas fa-home"></i> <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Accueil ";
                    }
                    else
                    {
                        echo "Home";
                    }
                    ?></a>

                <a href="controller.php?function=test" class="m-link"><i class="fas fa-chart-line"></i> Tests</a>


                <?php if ((isset($_SESSION['auth']) && ($_SESSION['auth']->admin==1)) )
                { ?>
                    <a href="controller.php?function=gestionResultat" class="m-link"><i class="fas fa-edit"></i>

                        <?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "Vue Résulats";
                        }
                        else
                        {
                            echo "Vew Results";
                        }
                        ?></a>
                <?php      }
                else
                { ?>
                <a href="controller.php?function=Resultats" class="m-link"><i class="fas fa-tachometer-alt"></i> <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Vos Résultats";
                    }
                    else
                    {
                        echo "Your Results";
                    }
                    ?></a> <?php } ?>

                <?php if ((isset($_SESSION['auth']) && ($_SESSION['auth']->admin==1)) )
                { ?>
                    <a href="controller.php?function=gestionlogin" class="m-link"><i class="fas fa-edit"></i>

                        <?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "Gestion Login";
                        }
                        else
                        {
                            echo "Vew Login";
                        }
                        ?></a>
                <?php      }
                else
                { ?>
                    <a href="controller.php?function=NousConnaitre" class="m-link"><i class="far fa-question-circle"></i><?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "A Propos";
                        }
                        else
                        {
                            echo "About Us";
                        }
                        ?></a>
                <?php } ?>




                <?php if (isset($_SESSION['auth']) )
                { ?>
                    <a href="controller.php?function=deconnexion" class="m-link"><i class="fas fa-user-check"></i>
                        <style>
                            .fa-user-check{
                                color: darkgreen;
                            }
                        </style>
                        <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Deconnexion";
                    }
                    else
                    {
                        echo "logout";
                    }
                    ?></a>
         <?php      }
                else
                { ?>
                    <a href="controller.php?function=connexion" class="m-link"><i class="fas fa-user-slash"></i> <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Connexion";
                    }
                    else
                    {
                        echo "login";
                    }
                    ?></a>
                <?php } ?>



                <a href="public/changelangue.php" class="m-link"><i class="fa fa-refresh fa-spin"></i> <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Langues";
                    }
                    else
                    {
                        echo "Languages";
                    }
                    ?></a>
            </div>


        </div>

    </nav>

</header>




