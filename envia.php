<?php
    $nom = $_POST['nom'];
    $correu = $_POST['correu'];

    $host = "localhost";
    $usuario = "jmr";
    $password = "Balmes!2019";
    $basedatos = "contactes";
    $conexion = mysqli_connect($host,$usuario,$password,$basedatos) or trigger_error(mysqli_error($conexion),E_USER_ERROR);
    mysqli_set_charset($conexion,'utf8');

    mysqli_select_db($conexion,$basedatos);
    $insertSQL= "INSERT INTO idcontactes (nom,email) VALUES ('$nom','$correu')";
    $resultat = mysqli_query($conexion,$insertSQL) or die(mysqli_error($conexion));
?>

<!DOCTYPE html>
<html lang="ca" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jordi Mesas del Rio">
    <meta name="description"
        content="Temari del curs de confecció i publicació de pàgines web, html5, css3, javaScript, php, bootstrap, jquery, despcripció dels participants y els professors">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/icono2.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estil.css">

    <title>Espai Visual</title>
</head>

<body class="d-flex flex-column h-100">

    <nav class="sticky-top">

        <div class="container-fluid d-sm-none pt-2">
            <button id="hamburger" type="button" class="btn btn-outline-light"><img src="img/menu.png" alt="hamburguesa"
                    class="img-fluid"></button>
        </div>
        <div class="d-sm-block">
            <ul class="nav nav-pills nav-fill d-flex flex-column flex-sm-row">
                <li class="nav-item bg-primary">
                    <a class="nav-link text-white" href="index.html">Inici</a>
                </li>
                <li class="nav-item bg-info">
                    <a class="nav-link text-white" href="index.html">Temari</a>
                </li>
                <li class="nav-item bg-primary">
                    <a class="nav-link text-white" href="index.html">Participants</a>
                </li>
                <li class="nav-item bg-info">
                    <a class="nav-link text-white" href="index.html">Professorat</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="flex-shrink-0 ">

        <section id="textoPhp">

            <div class="d-flex justify-content-center">

               <div class="text-center">
                <div><p>Gràcies per contactar amb nosaltres. Ara podrém enviar-te informació al teu email.</p></div>
                <div class="pt-4 m-auto"><img src="img/minions.png" alt="minions" class=" rounded img-fluid"></div>
               </div>              
               
            </div>

        </section>

    </main>

    <footer class="footer mt-auto bg-dark p-4">
        <div class="container text-white">
            <div class="row m-auto d-flex justify-content-between text-center align-items-center">
                <div class="col-sm-4">
                    <a href="https://es-es.facebook.com/"><img src="img/facebook.png" class="img-fluid" alt="Responsive image"></a>
                    <a href="https://twitter.com/?lang=es"><img src="img/twitter.png" class="img-fluid" alt="Responsive image"></a>
                    <a href="https://www.youtube.com/?gl=ES&tab=r10"><img src="img/youtube.png" class="img-fluid" alt="Responsive image"></a>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li>&copy;Jordi Mesas del Rio</li>
                        <li><a data-toggle="modal" data-target="#exampleModalScrollable">Privacitat i condicions</a></li>
                    </ul>
                </div>
                <p class="col-sm-4">
                    <a href="http://jigsaw.w3.org/css-validator/check/referer">
                        <img style="border:0;width:88px;height:31px"
                            src="http://jigsaw.w3.org/css-validator/images/vcss" alt="¡CSS Válido!" />
                    </a>
                </p>

            </div>
        </div>
    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--Inclou el cub-->
    <script src="js/cubo.js"></script>
    <script>
        includeHTML();
    </script>
    <!--Animacions del body-->
    <script src="js/animations.js"></script>
    <!--Nav hamburguer-->
    <script src="js/navHamburguerJquery.js"></script>
    <!--validació email-->
    <script src="js/bootstrap-validate.js"></script>
    <script>
        bootstrapValidate(
            '#exampleInputEmail1',
            'email: Introdueix el correu electrónic seguint el model d\'aquest exemple nom@gmail.com'
        );
    </script>


</body>

</html>
