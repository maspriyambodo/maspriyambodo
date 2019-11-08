<html dir="ltr" lang="en-US">
    <head>
        <title><?= $title ?></title>
        <link rel="icon" href="https://cdn.maspriyambodo.com/images/mp,png" type="image/x-icon">
        <meta name="keywords" content="<?= $metadesc ?>">
        <meta name="description" content="<?= $metadesc ?>" />
        <meta name="author" content="maspriyambodo" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.maspriyambodo.com/style.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.maspriyambodo.com/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.maspriyambodo.com/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.maspriyambodo.com/css/responsive.css" type="text/css" />
    </head>
    <body class=stretched>
        <div id=wrapper class=clearfix>
            <header id="header" class="transparent-header full-header">
                <div id="header-wrap">
                    <div class="container clearfix">
                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                        <div id=logo>
                            <a href="<?= base_url() ?>" class=standard-logo data-dark-logo="https://cdn.maspriyambodo.com/images/mp_logo.png">
                                <img src="https://cdn.maspriyambodo.com/images/mp_logo.png">
                            </a>
                            <a href="<?= base_url() ?>" class=retina-logo data-dark-logo="https://cdn.maspriyambodo.com/images/mp_logo.png">
                                <img src="https://cdn.maspriyambodo.com/images/mp_logo.png">
                            </a>
                        </div>
                        <nav id=primary-menu class=dark>
                            <ul>
                                <li>
                                    <a href="#" data-scrollto="#slider">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-scrollto="#about">
                                        <div>About</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-scrollto="#services">
                                        <div>Services</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-scrollto="#project">
                                        <div>Offer Project</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-scrollto="#contact">
                                        <div>Contact</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://blog.maspriyambodo.com/" target="_blank">
                                        <div>blog</div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <section id=slider class="slider-element slider-parallax swiper_wrapper full-screen clearfix" data-autoplay="5000" data-speed="650" data-loop="true">
                <div class="slider-parallax-inner">
                    <div class="swiper-container swiper-parent">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide dark" style="background-position-y:100%; background-position:center;background-size:100%;background-image:url(https://cdn.maspriyambodo.com/images/slider/swiper/1.jpg)">
                            </div>
                            <div class="swiper-slide dark" style="background-position-y:100%; background-position:center;background-size:100%;background-image:url(https://cdn.maspriyambodo.com/images/slider/swiper/2.jpg)">
                            </div>
                            <div class="swiper-slide dark" style="background-position-y:100%; background-position:center;background-size:100%;background-image:url(https://cdn.maspriyambodo.com/images/slider/swiper/3.jpg)">
                            </div>
                            <div class="swiper-slide dark" style="background-position-y:100%; background-position:center;background-size:100%;background-image:url(https://cdn.maspriyambodo.com/images/slider/swiper/4.jpg)">
                            </div>
                        </div>
                    </div>
                    <a href=# data-scrollto=#content data-offset=100 class="dark one-page-arrow">
                        <i class="icon-angle-down infinite animated fadeInDown"></i>
                    </a>
                </div>
            </section>
            <section id=content>
                <div class=content-wrap>
                    <?= $content; ?>
                </div>
            </section>
            <div id="gotoTop" class="icon-angle-up"></div>
            <footer id="footer" class="dark">
                <div id="copyrights">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <p>&copy; <?= date("Y"); ?> All Rights Reserved by Priyambodo.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <i class="icon-envelope2"></i> info@maspriyambodo.co.id
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <i class="icon-comments"></i> +62-896-2013-2007
                                    <br><i class="icon-comments"></i> +62-812-8230-9100
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="https://www.facebook.com/nohackeron" data-toggle="tooltip" target="_new" data-original-title="Facebook"
                               class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook2"></i>
                            </a>

                            <a href="https://www.instagram.com/priyambodoss/" data-toggle="tooltip" data-original-title="Instagram"
                               class="social-icon si-small si-borderless si-instapaper" target="_new">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram2"></i>
                            </a>

                            <a href="https://github.com/maspriyambodo" data-toggle="tooltip" data-original-title="Github"
                               class="social-icon si-small si-borderless si-github" target="_new">
                                <i class="icon-github"></i>
                                <i class="icon-github2"></i>
                            </a>

                            <a href="https://www.linkedin.com/in/mas-priyambodo-b80948119" data-toggle="tooltip" data-original-title="Linkedin"
                               class="social-icon si-small si-borderless si-linkedin" target="_new">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin2"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </footer>
            <script src="https://cdn.maspriyambodo.com/js/jquery.js"></script>
            <script src="https://cdn.maspriyambodo.com/js/plugins.js"></script>
            <script src="https://cdn.maspriyambodo.com/js/functions.js"></script>
            <script>
                $(document).ready(function () {
                    $('body').bind('copy paste', function (e) {
                        e.preventDefault();
                        return false;
                    });

                });
            </script>
        </div>
    </body>
</html>