<?php 
require_once 'picturesGalery.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Efrain Construcciones</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/business-casual.css" rel="stylesheet">

        <style type="text/css">
            body {
                background: url("efrain Lisandro/Brick_wall_close-up_view.jpg") no-repeat center center fixed;
            }


            .navbar.navbar-default{
                background-color: #ffffff;
                border: none;
                opacity: 0.9;

            }

            .nav>li>a{
                padding:27px;
            }

            .nav.navbar-nav{
                /*float:right;*/
            }


            footer p{
                padding:25px 0;
                color:#666;
            }

            .brand{
                float: left;
                margin: 0;
                padding: 0;
                margin-top: -14px;
            }

            .item .active {
                width:800px;
                height: 600px;
            }       
        </style>

        <!-- COMIENZA GALERY -->
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="css/style-galery.css" />
        <!-- End WOWSlider.com HEAD section -->
        <script type="text/javascript" src="js/galery.js"></script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-25854704-1']);
            _gaq.push(['_setDomainName', '.wowslider.com']);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_setAllowHash', false]);
            if (document.cookie.match("(^|;\\s)__utma") && !/utmcsr=\(direct\)/.test(unescape(document.cookie))) {
                _gaq.push(
                        ['_setReferrerOverride', ''],
                        ['_setCampNameKey', 'aaan'],
                        ['_setCampMediumKey', 'aaam'],
                        ['_setCampSourceKey', 'aaas'],
                        ['_setCampTermKey', 'aaat'],
                        ['_setCampContentKey', 'aaac'],
                        ['_setCampCIdKey', 'aaaci']
                        )
            }

            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
        <!-- FIN COMIENZA GALERY -->
    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div style="width:40%; float: left">
                        <img class="img-responsive img-full" src="efrain Lisandro/logo-efra.png"   >  
                    </div>

                    <a class="navbar-brand" href="index.html">EFRAIN Con</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="brand"> 

                    <img src="efrain Lisandro/cuchara.png" height="73px" > 
                    <img src="efrain Lisandro/efrain2.png"  >
                </div>

                <!--         Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="about.php">Quienes Somos</a></li>
                        <li><a href="galery.php">Galeria</a></li>
                        <li><a href="contact.php">Contacto</a></li>
                    </ul>
                </div> <!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>


        <!-- GALERY ------------->
        
        
        <div id="top"></div>
        <div class="container" >
            <div class="ruled1">	
                <!-- Start WOWSlider.com BODY section -->
                <div id="wowslider-container1">
                    
                    <div class="ws_images"><ul>
                            <?php 
                            
                            $aPictures = picturesGalery::listPicture();
                            foreach ($aPictures as $picture) {
                                
                                ?>
                            <li><img src="img/galery/<?php echo $picture['nameFile']?>" alt="No se"      title="<?php echo $picture['description']?>" /></li>
                            <?php
                            }
                            ?>
<!--                            <li><img src="img/piscina3.jpg" alt="No se"      title="Maestro mayor de obra: Claudio DeMarco" /></li>
                            <li><img src="img/casa2.jpg" alt="Palms and ocean"  title="Arquitecto Oscar Carrera" id="wows1_0"/></li>
                            <li><img src="img/piscina3.jpg" alt="Boats in the bay:CSS Slideshow"      title="Boats in the bay" /></li>
                            <li><img src="img/casa2.jpg" alt="Palms and ocean: css gallery slideshow"  title="Palms and ocean" id="wows1_0"/></li>
                            <li><img src="img/piscina3.jpg" alt="Boats in the bay: CSS Slideshow"      title="Boats in the bay" /></li>
                            <li><img src="img/casa2.jpg" alt="Palms and ocean: css gallery slideshow"  title="Palms and ocean" id="wows1_0"/></li>
                            <li><img src="img/piscina3.jpg" alt="Boats in the bay: CSS Slideshow"      title="Boats in the bay" /></li>-->
                            

                        </ul></div>
                    <div class="ws_thumbs">
                        <div>
                            <?php 
                            //$aPictures = picturesGalery::listPicture();
                            foreach ($aPictures as $picture) {
                                
                                ?>
                            
                                <a href="#" title="<?php echo $picture['description']?>"><img src="img/tumb/<?php echo $picture['nameFile']?>" alt=""  /></a>
                            <?php
                            }
                            ?>
<!--                            <a href="#" title="Foto"><img src="img/piscina3.jpg" alt="" style="height:50px" /></a>
                            <a href="#" title="Palms and ocean"><img src="img/casa2.jpg" alt="" style="height:50px" /></a>
                            <a href="#" title="Boats in the bay"><img src="img/piscina3.jpg" alt="" style="height:50px" /></a>
                            <a href="#" title="Palms and ocean"><img src="img/casa2.jpg" alt="" style="height:50px" /></a>
                            <a href="#" title="Boats in the bay"><img src="img/piscina3.jpg" alt="" style="height:50px" /></a>
                            <a href="#" title="Palms and ocean"><img src="img/casa2.jpg" alt="" style="height:50px" /></a>
                            <a href="#" title="Boats in the bay"><img src="img/piscina3.jpg" alt="" style="height:50px" /></a>-->
                            
                           
                        </div>
                    </div>
                    
<!--                    <a style="display: none;" href="http://wowslider.com">Website CSS slideshow by WOWSlider.com</a>-->
                    <div class="ws_shadow"></div>
                </div>
                <script type="text/javascript" src="js/wowslider.js"></script>

                <script type="text/javascript" src="js/script-galery.js"></script>

                <!-- End WOWSlider.com BODY section -->
            </div>

            <div id="effbuttonsXX"></div> <!-- Si le saco las XX me muestra la botonera para cambiar el efecto de la galeria-->

            <p style="margin-bottom: 0;" align="right"><a class="letstalkbutton" href="licenses.html" title="Download Ajax Slider &amp; SlideShow"> </a></p>
            <style>
                .rq h1, .rq h2 {
                    color:#3a3a3a;
                    text-shadow:0 1px 0 #FFF;
                    text-transform:uppercase;
                    letter-spacing:2px;
                    margin-top:10px;
                    margin-bottom:8px;
                    font:700 15px "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial
                }
                .rq h3 a { color:#b02d15; }
                .rq h3 small {
                    font-size:11px;
                    display:block;
                    text-transform:capitalize;
                    font-weight:normal;
                }
                .rq p a { color:#2c2c2c; }
                .rq p a:hover { color:#777; }
                .rq-link { padding:20px 0; }
            </style>




        </div><!-- end of .container -->



        <!-- end of #footer-wrap -->

        <!--------------- END GALERY ------------->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; Efrain Construcciones</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JavaScript -->
        <!--<script src="js/jquery-1.10.2.js"></script>-->
        <script src="js/bootstrap.js"></script>
    </body>
</html>