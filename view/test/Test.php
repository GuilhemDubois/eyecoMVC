<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>

    <link rel="stylesheet" href="view/test/LesTestsStyle.css"/>



</head>

<body>




    <div class="test">
        <div class="t-title">
            <h2><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Déroulement des tests psychotechniques";
                }
                else
                {
                    echo "Conduct of psychotechnical tests";
                }
                ?></h2>
        </div>

    </div>
    <div id="t-button">
        <button  class="button-commencer"><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "COMMENCER";
            }
            else
            {
                echo "START";
            }
            ?></button>

    </div>


    <script src="view/accueil/app.js" charset="utf-8"></script>

</body>