<header id="header" class="transparent-header full-header dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <div id=logo>
                <a href="<?= base_url() ?>" class=standard-logo data-dark-logo="<?= base_url('assets/images/Logo/logo.png') ?>">
                    <img src="<?= base_url('assets/images/Logo/logo.png') ?>">
                </a>
                <a href="<?= base_url() ?>" class=retina-logo data-dark-logo="<?= base_url('assets/images/Logo/logo.png') ?>">
                    <img src="<?= base_url('assets/images/Logo/logo.png') ?>">
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
                </ul>
            </nav>
        </div>
    </div>
</header>
<section id=slider class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
    <div class="slider-parallax-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image:url(<?= base_url('assets/images/Slider/1.jpg'); ?>)">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h1>
                                <a href="" class="typewrite" data-period="2000" style="color:black;"
                                   data-type='[ "Hi, Im Priyambodo.", "I am Design & Build :", "Web Application.", "Corporate Website."]'>
                                    <span class="wrap"></span>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href=# data-scrollto=#content data-offset=100 class="dark one-page-arrow">
            <i class="icon-angle-down infinite animated fadeInDown"></i>
        </a>
    </div>
</section>
<script type="text/javascript">
    var TxtType = function (el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function () {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function () {
            that.tick();
        }, delta);
    };

    window.onload = function () {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>