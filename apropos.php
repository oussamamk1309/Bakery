<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Styles-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
        <link rel="stylesheet" href="css/top-foot-styles.css">
        <link rel="stylesheet" href="css/main-styles.css">
        <link rel="stylesheet" href="css/media-screen.css">
        <style>
            #about {
                background-color: #fcc86f;
                border-bottom: 4px solid #c99941 !important;
                color: black;
            }
        </style>

        <!--Scripts-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <title>Bakery | A propos</title>

    </head>
    <body>
        <?php include './partiels/top.phtml' ?>
        <div class="main shadow">
            <div class="top-main">
                <h2>Trouvez-nous!</h2>
                <p>Nous sommes à vos services.</p>
            </div>
            <div class="container p-5">
                <div class="row">
                    <div class="col-sm m-auto text-center">
                        <h2 class="mb-5">Nous sommes les meilleurs</h2>
                        <p>Ceci un texte pour décrire nos services et nos compétances.</p>
                        <p><i class="fas fa-map-marker-alt"></i> 2036 LA SOUKRA, ARIANA, Tunisie</p>
                    </div>
                    <div class="col-sm m-auto">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.033528653369!2d10.184824314781627!3d36.86561627171534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDUxJzU2LjIiTiAxMMKwMTEnMTMuMyJF!5e0!3m2!1sfr!2stn!4v1604897128593!5m2!1sfr!2stn" class="rounded shadow m-auto w-100" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php include './partiels/foot.phtml' ?>
        <a id="to-top"><i class="fas fa-arrow-circle-up"></i></a>
    </body>
</html>