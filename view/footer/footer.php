<link rel="stylesheet" type="text/css" href="view/footer/footerStyle.css">
<footer role="footer">

    <div class="inner-footer">

        <div class="footer-items">
            <h1>Contact</h1>
            <div class="border"></div>
            <ul>
                <li><i class="fas fa-map-marker-alt" aria-hidden="true"></i> 28 rue de la Paix</li>
                <li><i class="fas fa-map-marker-alt" aria-hidden="true"></i> 75006 PARIS</li>
                <li><i class="fas fa-phone-square-alt" aria-hidden="true"></i> 01 32 24 05 18</li>
                <li href="#"><i class="fas fa-envelope" aria-hidden="true"></i> contact@eyeco.com</li>

            </ul>
        </div>

        <div class="footer-items">
            <h1><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "AUTRES PAGES";
                }
                else
                {
                    echo "OTHER PAGES";
                }
                ?></h1>
            <div class="border"></div>
            <ul>
                <a href="controller.php?function=acceuil"><li><?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "Accueil";
                        }
                        else
                        {
                            echo "HOME";
                        }
                        ?></li></a>
                <a href="controller.php?function=test"><li>TEST</li></a>

                <a href="controller.php?function=NousConnaitre"><li><?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "A propos";
                        }
                        else
                        {
                            echo "ABOUT US";
                        }
                        ?></li></a>
            </ul>
        </div>

        <div class="footer-items">
            <h1><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Des questions ?";
                }
                else
                {
                    echo "Question ?";
                }
                ?></h1>
            <div class="border"></div>
            <ul>
                <a href="controller.php?function=FAQ"><li><?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "Consulter notre FAQ";
                        }
                        else
                        {
                            echo "Consult our FAQ";
                        }
                        ?></li></a>

            </ul>
        </div>

        <div class="footer-logo">
            <img src="images/infinitemeasures.png" class="f-logo" alt="logo"/>
        </div>
    </div>

    <div class="footer-bottom">
        Copyright 2020 | All rights reserved |
        <a href="../mentionlegale/mentionlegales.php">CGU</a>
    </div>



</footer>