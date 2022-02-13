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
                        Nossos Professores
                    </h1>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-courses Area -->
    <section class="popular-course-area section-gap" style="
    padding: 0;
">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        
                    </div>
                </div>
            </div>

            <section class="popular-course-area section-gap" style="
    padding-top: 0;
">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Nosso Professores</h1>
                                <p class="mb-10">Logo abaixo você pode evr nossos treês melhores professores da Instituição</p>
                                
                            </div>
                        </div>
                    </div>  
                    <center>                
                    <div class="row">
                        <div class="active-popular-carusel">
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="img/leo.JPG" alt="">
                                    </div>
                                                                        
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Professor Contabilidade
                                        </h4>
                                    </a>
                                    <p>
                                        Leonardo Stedile é o professor de contabilidade mais requisitado no Brasil, Doutorado com PHD na universidade milenar do SENAI.
                                    </p>
                                </div>
                            </div>  
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="img/jeske.jpg" alt="">
                                    </div>
                                                                    
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Professor de Edudação Fisica
                                        </h4>
                                    </a>
                                    <p>
                                        Guilherme Jeske é o professor de Educação fisica Doutordo em PHD pelo SENAI que treinou grandes nomes do esporte como Neymar e Cristiano Ronaldo.
                                    </p>
                                </div>
                            </div>  
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="img/joao.jpg" alt="">
                                    </div>
                                                                    
                                </div>
                                <div class="details">

                                    <a href="#">
                                        <h4>
                                            Professor de recursos Humanos
                                        </h4>
                                    </a>
                                    <p>
                                        João da Crus é o professor de recursos humanos Doutorado pelo Senai, responsavel pelo treinamento de todo os funcionarios da Google.
                                    </p>
                                </div>
                            </div>  
                                                        
                        </div>
                    </div>
                </center>   
                </div>  
            </section>
        </div>
    </section>

    <?php


if (isset($_POST ['nomprof'])) {

    require './classes/Professor.php';

    $prof = new Professor();
    $prof->inserir($_POST['nomprof'], $_POST ['descprof']);

}
?>

<?php if(isset($_POST['nomprof'])) {?>
    <script>
        alert('Professor inserido com sucesso!');
    </script>
<?php }?>

<section class="search-course-area relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 search-course-left">
                            <h1 class="text-white">
                                Ficou interresado em trabalhar na <br> Harvard University?
                            </h1>
                            <p>
                                cadastre-se ao lado e venha ser um dos nossos funcionários em Harvard University o melhor lcoal para trabalhar em todo o Brasil!
                            </p>
                            <div class="row details-content">
                                <div class="col single-detials">
                                    <span class="lnr lnr-graduation-hat"></span>
                                    <a href="#"><h4>Vagas de emprego </h4></a>        
                                    <p>
                                        Encontre a sua melhor vaga de emprego, com muita ou pouca exigência     
                                    </p>                        
                                </div>
                                <div class="col single-detials">
                                    <span class="lnr lnr-license"></span>
                                    <a href="#"><h4>profissionais</h4></a>       
                                    <p>
                                       Venha trabalhar com os melhores profissionais do mercado acadêmico
                                    </p>                        
                                </div>                              
                            </div>
                        </div>

                        
                        <div class="col-lg-4 col-md-6 search-course-right section-gap">
                            <form class="form-wrap" action="professor.php" method="post">
                                <h4 class="text-white pb-20 text-center mb-30">Para virar Aluno preencha</h4>       
                                <input type="text" name="nomprof" id="nomprof"  placeholder="Coloque seu nome"  style="width: 100%;">           

                                
                                <input type="text" name="descprof" id="descprof" style="width:100%;"  placeholder="Coloque sua formação profissional " id="descprof">

                                <button type="submit" class="primary-btn text-uppercase">Cadastrar</button>
                                
                                
                                <a href="professorCadastrado.php" class="primary-btn text-uppercase" style="
    text-align: center;
">VER CANDIDATOS</a>
                                
                               
                            </form>
                    
                        </div>
                    </div>
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
        