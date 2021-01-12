<?php
session_start();

if (isset($_SESSION['usuario'])) {
     include "header.php"; 
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HD SERVICIOS INTEGRALES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/logo/favicon.png">
    <script src="https://kit.fontawesome.com/970484c8e1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="gestor/librerias/datatable/dataTables.bootstrap4.min.css">

	<!-- CSS here -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../assets/css/slicknav.css">
    <link rel="stylesheet" href="../../assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="../../assets/css/gijgo.css">
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <link rel="stylesheet" href="../../assets/css/animated-headline.css">
	<link rel="stylesheet" href="../../assets/css/magnific-popup.css">
	<link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../../assets/css/themify-icons.css">
	<link rel="stylesheet" href="../../assets/css/slick.css">
	<link rel="stylesheet" href="../../assets/css/nice-select.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    
</head>
<body>
    <!-- Icono de LOAD al incio de la pagina -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../../assets/img/logo/loader.png" alt="logo empresa">
                </div>
            </div>
        </div>
    </div>
    <!-- Icono de LOAD al incio de la pagina -->

    <main>
        <!--INCIO configuración cabecera -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>BIENVENIDOS<br>COMERCIALES</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIN configuración cabecera -->

                <!-- CONFIGURACIÓN EMPRESAS DE ENERGÍA -->
        <section class="popular-work-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Titulos Comercializadoras -->
                        <div class="section-tittle text-center mb-70">
                            <br><br><span>Comercializadoras</span>
                            <h2>Trabajamos con los líderes de la industria</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-col-lg-3 col-md-3 col-sm-3">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/acsol.jpg" alt="">
                            <div class="img-cap">
                                <h4>ACSOL ENERGÍA</h4>
                                <p>Ponemos a disposición del cliente el mejor equipo comercial y los mejores precios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-col-lg-3 col-md-3 col-sm-3">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/aldro.jpg" alt="">
                            <div class="img-cap">
                                <h4>ALDRO ENERGÍA</h4>
                                <p>Tendremos una relación cercana, con total transparencia y confianza.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-col-lg-3 col-md-3 col-sm-3">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/audax.jpg" alt="">
                            <div class="img-cap">
                                <h4>AUDAX ENERGÍA</h4>
                                <p>Nuestro compromiso es ofrecer un trato cercano, un asesoramiento personalizado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-col-lg-3 col-md-3 col-sm-3">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/futura.jpg" alt="">
                            <div class="img-cap">
                                <h4>FUTURA ENERGÍA</h4>
                                <p>Formamos un grupo de profesionales con una larga experiencia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-col-lg-3 col-md-3 col-sm-3">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/kipin.jpg" alt="">
                            <div class="img-cap">
                                <h4>KIPIN ENERGY</h4>
                                <p>Nuestra vocación es clara e inequívoca, cuidar y preservar el medio ambiente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-col-lg-3 col-md-3 col-sm-3">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/nace.jpg" alt="">
                            <div class="img-cap">
                                <h4>NACE ENERGÍA</h4>
                                <p>Somos una de las comercializadoras a nivel nacional en Energía Verde.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-col-lg-3 col-md-3 col-sm-3">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/nexus.jpg" alt="">
                            <div class="img-cap">
                                <h4>NEXUS ENERGÍA</h4>
                                <p>Nexus Energía es la 5ª compañía energética líder en representación fotovoltaica.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-col-lg-3 col-md-3 col-sm-3">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/total.jpg" alt="">
                            <div class="img-cap">
                                <h4>TOTAL ENERGÍA</h4>
                                <p>Aprovechamos nuestras raíces para ofrecer un servicio como líderes del mercado de gas y electricidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-col-lg-2 col-md-2 col-sm-2"></div>
                        <div class=" col-xl-col-lg-4 col-md-4 col-sm-4">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/petronieves.jpg" alt="">
                            <div class="img-cap">
                                <h4>NACE ENERGÍA</h4>
                                <p>Somos una de las comercializadoras a nivel nacional en Energía Verde.</p>
                            </div>
                        </div>
                    </div>
                        <div class=" col-xl-col-lg-4 col-md-4 col-sm-4">
                        <div class="single-cat mb-110">
                            <img src="../../assets/img/aliados/petronieves.jpg" alt="">
                            <div class="img-cap">
                                <h4>NACE ENERGÍA</h4>
                                <p>Somos una de las comercializadoras a nivel nacional en Energía Verde.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-col-lg-2 col-md-2 col-sm-2"></div>
                </div><br>
            </div>
        </section>
        <!--FIN CONFIGURACIÓN EMPRESAS DE ENERGÍA -->
        
        <div>
            <a class="btn btn-danger ntm-lg" href="../Registro.php">Para registrar a un nuevo usuario pincha ¡AQUI!</a>
        </div>
    </main>

  
    
    <footer>
        <!-- INICIO Configuración Footer-->
        <div class="footer-area footer-padding section-bg" data-background="../../assets/img/gallery/section_bg03.jpg">
            <div class="container">
                <!-- Footer Top -->
                <div class="footer-top">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="../../assets/img/logo/logo_menu.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>MENÚ</h4>
                                    <ul>
                                        <li><a href="../about.html">Quienes Somos</a></li>
                                        <li><a href="../servicios.html"> Nuestros Servicios</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=+34602457923">WhatsApp</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Nuestros Productos</h4>
                                    <ul>
                                        <li><a href="#">Electricidad</a></li>
                                        <li><a href="#">Gas</a></li>
                                        <li><a href="#">Fotovoltaica</a></li>
                                        <li><a href="#">Contadores Inteligentes</a></li>
                                        <li><a href="#">Baterías de Condensadores</a></li>
                                        <li><a href="#">Asesoramiento Personalizado</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Otros</h4>
                                    <ul>
                                        <li><a href="#">Cookies</a></li>
                                        <li><a href="#">Políticas de Privacidad</a></li>
                                        <li><a href="#">Contáctanos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 col-md-7">
                            <div class="footer-copy-right">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | By BY_DMATT and Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN Configuración Footer -->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="../../gestor/librerias/datatable/jquery.dataTables.min.js"></script>
    <script src="../../gestor/librerias/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../../gestor/librerias/bootstrap4/jquery-3.5.1.min.js"></script>
    <script src="../../gestor/librerias/bootstrap4/popper.min.js"></script>
    <script src="../../gestor/librerias/bootstrap4/bootstrap.min.js"></script>
    <script src="../../../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/animated.headline.js"></script>
    <script src="../../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="../../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="../../assets/js/jquery.nice-select.min.js"></script>
    <script src="../../assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="../../assets/js/jquery.counterup.min.js"></script>
    <script src="../../assets/js/waypoints.min.js"></script>
    <script src="../../assets/js/jquery.countdown.min.js"></script>
    <script src="../../assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="../../assets/js/contact.js"></script>
    <script src="../../assets/js/jquery.form.js"></script>
    <script src="../../assets/js/jquery.validate.min.js"></script>
    <script src="../../assets/js/mail-script.js"></script>
    <script src="../../assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/main.js"></script>
    
    </body>
</html>

<?php
     include "footer.php";
}else {
    header("location:../index.php");
}
?>