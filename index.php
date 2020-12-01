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
            #home {
                background-color: #fcc86f;
                border-bottom: 4px solid #c99941 !important;
                color: black;
            }
        </style>

        <!--Scripts-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <title>Bakery | Accueil</title>

    </head>
    <body>
        <?php include './partiels/top.phtml'; ?>
        <div class="main">
            <div class="present">
                <h2>Fait Avec Amour</h2>
                <img src="./images/logo.png" alt="logo">
                <p>Ceci est un texte de test de cette page. Merci de votre visite</p>
                <a href="#">Notre menu</a>
            </div>
            <div class="after-frt w-100 px-1 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm m-auto p-2">
                            <h2>Art du pain</h2>
                            <h5>Nous créons de délicieux souvenirs</h5>
                            <p>
                                Ceci est un texte de test de cette page mais il est plus 
                                long que le premier. merci pour ta visite autre fois.
                            </p>
                        </div>
                        <div class="col-sm py-3 px-2 m-auto">
                            <img src="./images/img-pain.jpg" class="w-100 rounded" alt="pain">
                        </div>
                    </div>
                </div>
            </div>
            <div class="scd w-100 pl-1 pr-5 py-5">
                <div class="container">
                    <div class="row m-auto scd-cont rounded">
                        <div class="col-sm p-0 m-auto scd-z-img h-100">
                            <img src="./images/crepe.jpg" class="w-100 h-100 m-auto rounded" alt="pain">
                        </div>
                        <div class="col-sm scd-z-txt p-4">
                            <h2>Crêpe parfaite</h2>
                            <h5>Favori de la saison</h5>
                            <p class="my-3">
                                Ceci est un texte de test de cette page mais il est plus 
                                long que le premier. merci pour ta visite autre fois.
                            </p>
                            <h3>
                                <i class="fas fa-star"></i> 
                                <i class="fas fa-star"></i> 
                                <i class="fas fa-star"></i> 
                                <i class="fas fa-star"></i> 
                                <i class="fas fa-star"></i> 
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thrd p-5">
                <div class="row">
                    <div class="col-sm thrd-z-txt m-auto px-0 py-5">
                        <h3>Chef cuisinier</h3>
                        <div class="row ch">
                            <div class="col-sm py-0 px-0 ch-name m-auto">
                                <p class="my-auto d-block">Foulen</p>
                            </div>
                            <div class="col-sm p-1 ch-img">
                                <img src="./images/chef.jpg" class="w-100 h-75 m-auto" alt="">
                            </div>
                            <div class="col-sm py-0 px-0 ch-name m-auto">
                                <p class="my-auto d-block">Ben Foulen</p>
                            </div>
                        </div>
                        <h5>"Des créations uniques pour des occasions uniques"</h5>
                    </div>
                    <div class="col-sm thrd-z-img m-auto">
                        <img src="./images/img-ts.jpg" class="w-100 m-auto rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <?php include './partiels/foot.phtml' ?>
        <a id="to-top"><i class="fas fa-arrow-circle-up"></i></a>
    </body>
</html>