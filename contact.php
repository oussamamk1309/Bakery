<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Styles-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
        <link rel="stylesheet" href="css/top-foot-styles.css">
        <link rel="stylesheet" href="css/contact-styles.css">
        <link rel="stylesheet" href="css/main-styles.css">
        <link rel="stylesheet" href="css/media-screen.css">
        <style>
            #contact {
                background-color: #fcc86f;
                border-bottom: 4px solid #c99941 !important;
                color: black;
            }
        </style>

        <!--Scripts-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <title>Bakery | Contactez-nous</title>

    </head>
    <body>
        <?php include './partiels/top.phtml' ?>
        <div class="main shadow">
            <div class="top-main">
                <h2>Contactez-nous!</h2>
                <p>Nous sommes à vos services.</p>
            </div>
            <div class="container p-5">
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="">Nom :</label>
                            <input type="text" placeholder="Votre nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Prénom :</label>
                            <input type="text" placeholder="Votre prénom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email :</label>
                            <input type="email" placeholder="Votre email" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="">Message :</label>
                            <textarea class="form-control" rows="8" placeholder="Votre message"></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-info btn-block">Envoyer</button>
                <h1 class="text-center my-5">Ou</h1>
                <div class="text-center">
                    <p><i class="fas fa-envelope"></i> boulangerie100@exemple.co</p>
                    <p><i class="fas fa-phone"></i> +216 15 789 428</p>
                    <p><i class="fab fa-facebook-square"></i> Bakery in FB</p>
                </div>
            </div>
        </div>
        <?php include './partiels/foot.phtml' ?>
        <a id="to-top"><i class="fas fa-arrow-circle-up"></i></a>
    </body>
</html>