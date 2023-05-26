<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/rubic.css">

</head>
<body style="background-color:rgb(0, 2, 15)">
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="index.html"><strong class="text-primary">Dash</strong><span class="text-light">Home</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#features">Resumen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#about">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                <br>
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">
        
        <?php
        $connection = new SQLite3("productos.db");
        $query = "SELECT modelo FROM products";
        $result = $connection->query($query);
        echo "<p style=\"text-align: center;color: white;\"><strong> MY NAME BORAT NICE TO MEET</strong></p>";
        foreach ($result as &$nombre) {
            echo " <p style=\"text-align: center;color: white;\"><strong>{$nombre}</strong></p>";
            echo "<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5\">
            <figure class=\"effect-ming tm-video-item\">
                <img src=\"assets/cruiser.png\" alt=\"Image\" class=\"img-fluid\">
                <figcaption class=\"d-flex align-items-center justify-content-center\">
                    <h2>{$nombre}</h2>
                    <a href=\"cruiser.html\">View more</a>
                </figcaption>                    
            </figure>
            <div class=\"d-flex justify-content-between tm-text-gray\">
            </div>
            <p style=\"text-align: center;color: white;\"><strong>{$nombre}</strong></p>
        </div>";
        }
        
        ?>       
        </div>
        
    </div>     
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>