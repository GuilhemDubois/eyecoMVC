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

        <div class="julian"> <a><img src="../../../Infinite-measure/Infinite-measure/images/julian.jpg" alt="Julian" title="Julian Serain"/></a> </div>
        <div class="etienne"> <a><img src="../../../Infinite-measure/Infinite-measure/images/etienne.jpg" alt="Etienne" title="Etienne Roure"/></a> </div>
        <div class="louis"> <a><img src="../../../Infinite-measure/Infinite-measure/images/louis.jpg" alt="Louis" title="Louis Lauer"/></a> </div>
        <div class="guilhem"> <a><img src="../../../Infinite-measure/Infinite-measure/images/guilhem.jpg" alt="Guilhem" title="Guilhem Dubois"/></a> </div>
        <div class="benoit">  <a><img src="../../../Infinite-measure/Infinite-measure/images/benoit.jpg" alt="Benoit" title="Benoit Gourlin"/></a> </div>
        <div class="philippe"> <a><img src="../../../Infinite-measure/Infinite-measure/images/philippe.jpg" alt="Philippe" title="Philippe Saraiva"/></a> </div>

    </div>
    <div class="ap-text">
        <p><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.";
            }
            else
            {
                echo "J'ai fait un an de latin et j'étais obligé";
            }
            ?></p>

    </div>


    <script src="../acceuil/app.js" charset="utf-8"></script>
</body>