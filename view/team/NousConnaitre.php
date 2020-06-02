<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>

    <link rel="stylesheet" href="view/team/NousConnaitreStyle.css"/>

</head>

<body>



    <div class="apropos">
        <div id="ap-title">
            <h2><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Une équipe d'ingénieur à votre écoute";
                }
                else
                {
                    echo "An engineering team at your service";
                }
                ?></h2>
        </div>
    </div>

    <div class="ap-photos">

        <div class="julian"> <a><img src="images/julian.jpg" alt="Julian" title="Julian Serain"/></a> </div>
        <div class="etienne"> <a><img src="images/etienne.jpg" alt="Etienne" title="Etienne Roure"/></a> </div>
        <div class="louis"> <a><img src="images/louis.jpg" alt="Louis" title="Louis Lauer"/></a> </div>
        <div class="guilhem"> <a><img src="images/guilhem.jpg" alt="Guilhem" title="Guilhem Dubois"/></a> </div>
        <div class="benoit">  <a><img src="images/benoit.jpg" alt="Benoit" title="Benoit Gourlin"/></a> </div>
        <div class="philippe"> <a><img src="images/philippe.jpg" alt="Philippe" title="Philippe Saraiva"/></a> </div>

    </div>
    <div class="ap-text">
        <p><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Le métier de l’ingénieur consiste à poser, étudier et résoudre de manière performante et innovante des problèmes souvent complexes de création, de conception, de réalisation, de mise en œuvre et de contrôle de produits, de systèmes ou de services.- éventuellement leur financement et leur commercialisation - au sein d’une organisation compétitive. Il intègre les préoccupations de protection de l’homme, de la vie et de l’environnement, et plus généralement du bien-être collectif. À ces fins, l’ingénieur doit posséder un ensemble de savoirs et de savoir-faire techniques, économiques, sociaux, environnementaux et humains adaptés à ses missions, reposant sur une solide culture scientifique et leur permettant d’apporter une vision globale à tout projet.";
            }
            else
            {
                echo "An engineer uses science, technology and math to solve problems. We can see engineering everywhere in the world around us, improving the ways we work, travel, communicate, stay healthy, and entertain. Today, the field of engineering offers more career choices than any other discipline! In the past, there were four major engineering branches: mechanical, chemical, civil and electrical. Today, the number of available engineering degrees are vast. There are now six major branches of engineering: mechanical, chemical, civil, electrical, management, and geotechnical, and under each branch there are hundreds of different subcategories.";
            }
            ?></p>

    </div>

    <script src="view/accueil/app.js" charset="utf-8"></script>
</body>