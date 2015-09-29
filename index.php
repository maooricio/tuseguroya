<?php
    error_reporting(0);
    
    include ('panel/conexion.php');
    
    $__SECCIONES = array(
        "home"                      => "Home",
        "politicas_privacidad"      => "Políticas de privacidad",
        "servicios"                 => "Servicios",
        "aseguradoras"              => "Aseguradoras",
        "blog"                      => "Blog",
        "promociones"               => "Promociones",
        "contacto"                  => "Contacto",
        "login"                     => "Inicio de sesión / Registro",
    );

    if(!$__SECCIONES[$_GET['s']])
    {
        $__SEC = "home";
    }
    else
    {
        $__SEC = $_GET['s'];
    }

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TU SEGURO YA - <?php echo $__SECCIONES[$__SEC]; ?></title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="css/personalizado.css">
    <script src="js/modernizr.js"></script>

    <link rel="stylesheet" href="css/schemes/bright-turquoise.css"/> </head>
</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="?s=home">
                                <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" style="max-width: 190px;" />
                            </a>
                        </div>
                        <div class="col-md-5" style="padding-top: 4px;">
                            <div class="col-md-5">
                                <div id="telefono_head"><i class="fa fa-phone-square"></i> 0800 - 345 - 0601</div>
                            </div>
                            <div class="col-md-7">
                            <form class="main-header-search">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding-top: 4px;">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar" style="display: none;">
                                        <a href="user-profile.html">
                                            <img class="origin round" src="img/40x40.png" alt="Image Alternative text" title="AMaze" />Hi, John</a>
                                    </li>
                                    <li><a href="?s=login">Iniciar sesión</a></li>
                                    <li><a href="?s=login">Registrarse</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li <?php if(($__SEC == "home") || ($__SEC == "")) { ?> class="active" <?php } ?>><a href="?s=home">INICIO</a></li>
                        <li <?php if($__SEC == "politicas_privacidad") { ?> class="active" <?php } ?>><a href="?s=politicas_privacidad">POLÍTICA DE PRIVACIDAD</a></li>
                        <li <?php if($__SEC == "servicios") { ?> class="active" <?php } ?>><a href="?s=servicios">SERVICIOS</a></li>
                        <li <?php if($__SEC == "aseguradoras") { ?> class="active" <?php } ?>><a href="?s=aseguradoras">ASEGURADORAS</a></li>
                        <li <?php if($__SEC == "blog") { ?> class="active" <?php } ?>><a href="?s=blog">BLOG</a></li>
                        <li <?php if($__SEC == "promociones") { ?> class="active" <?php } ?>><a href="?s=promociones">PROMOCIONES / NOVEDADES</a></li>
                        <li <?php if($__SEC == "contacto") { ?> class="active" <?php } ?>><a href="?s=contacto">CONTACTO</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <?php @require_once("secciones/$__SEC.php"); ?>
        <div class="clear"></div>

        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="?s=home">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Seguínos</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-youtube box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Ingresa tu correo electrónico</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*No enviamos spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Suscribirse">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
                            <li><a href="?s=politicas_privacidad">Política de privacidad</a>
                            </li>
                            <li><a href="?s=servicios">Servicios</a>
                            </li>
                            <li><a href="?s=aseguradoras">Aseguradoras</a>
                            </li>
                            <li><a href="?s=blog">Blog</a>
                            </li>
                            <li><a href="?s=promociones">Promociones / Novedades</a>
                            </li>
                            <li><a href="?s=contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Alguna duda?</h4>
                        <h4 class="text-color">0800 - 345 - 0601</h4>
                        <h4><a href="mailto:info@tuseguroya.com.ar" class="text-color">info@tuseguroya.com.ar</a></h4>
                    </div>

                </div>
            </div>
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>
    </div>
</body>

</html>


