
<!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
    <link rel="icon" type="image/png" sizes="32x32" href="/the_favicon/favicon-32x32.png?v=zX7n49rwEM">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Harvard </title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">                          
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/owl.carousel.css">         
            <link rel="stylesheet" href="css/jquery-ui.css">            
            <link rel="stylesheet" href="css/main.css">
            <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-16x16.png">
        </head>
        <body>  
        <?php include "topo.php";?>        


    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Tela de cadastrados
                    </h1>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-courses Area -->
    <section class="popular-courses-area section-gap courses-page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Tela de Cadastrados</h1>

                    </div>
                </div>
            </div>
            <body>
    <h1>
        <center>Tabela<center>
    </h1>

   
    <?php

require './classes/Professor.php';
$professor = new Professor();
$listaDeProfessor = $professor->listar();

?>

<table class="table table-sm table-dark">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>


    <tbody>

        <?php foreach ($listaDeProfessor as $p) { ?>
            <tr>
                <td><?php echo $p['codprof']; ?></td>

                <td>
                    <a href="editarProfessor.php?codprof=<?php echo $p['codprof']; ?>">
                        <?php echo utf8_encode($p['nomprof']); ?>
                    </a>
                </td>
                <td><?php echo $p['descprof']; ?></td>

                    <td>
                        <a href="eliminarProfessor.php?codprof=<?php echo $p ['codprof'];?>">
                        Eliminar
                        </a>
                    </td>

            </tr>
        <?php } ?>

    </tbody>
</table>
    <a href="#" class="primary-btn text-uppercase" style="text-align:center">Voltar ao cadastro</a>

   


</body>
        </div>
    </section>
  

<?php include 'rodape.php'?>

            <!-- End footer Area -->
        
        
            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="js/easing.min.js"></script>
            <script src="js/hoverIntent.js"></script>
            <script src="js/superfish.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/jquery.tabs.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/mail-script.js"></script>
            <script src="js/main.js"></script>
        </body>
        
        </html>