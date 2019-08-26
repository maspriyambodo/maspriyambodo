<html>
    <head>
        <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>
            <?= $title ?>
        </title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i|Poppins:300,400,500,600,700"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://themes.semicolonweb.com/html/canvas/style.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css" type="text/css" />
        <link rel="stylesheet" href="https://themes.semicolonweb.com/html/canvas/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('assets/css/font-icons.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" type="text/css" />
        <link rel="stylesheet" href="https://themes.semicolonweb.com/html/canvas/css/responsive.css" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/gentelella/1.4.0/css/custom.min.css" rel="stylesheet">
    </head>
    <body class="login">
        <div class=login_wrapper>
            <div class="animated fadeInUp">
                <section class="login_content">
                    <form method="post" action="#">
                        <h1>Login Administrator</h1>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <input type=text id="unametxt" name=unametxt class=form-control placeholder=Username autocomplete=off required /> 
                            <div class="clearfix"></div>
                            <p id="unamep" class="text-danger" style="display:none;">This field is required.</p>
                        </div>
                        <div class="form-group">
                            <input type=password name=pwdtxt class=form-control placeholder=Password required />
                            <p id="pwdp" class="text-danger" style="display:none;">This field is required.</p>
                        </div>
                        <div class="form-group">
                            <p id="errormsg" class="text-danger text-uppercase errormsg" style="display:none;">sorry, you entered the wrong code</p>
                        </div>
                        <div class="form-group">
                            <button type="button" onclick="login()" name="loginbtn" class="btn btn-success">LOGIN</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div> <a href="<?= base_url(); ?>" target=_new> <img src="<?= base_url('assets/images/Logo/smallLogo.png'); ?>"/> </a>
                                <div style="clear:both;margin:10px 0"></div>
                                <p>
                                    © <?= date("Y"); ?> All Rights Reserved. Maspriyambodo
                                </p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <script>
            function login() {
                var d, c;
                d = $("input[name=unametxt]").val();
                c = $("input[name=pwdtxt]").val();
                if ($("input[name=unametxt]").val() === "") {
                    $("#unamep").show("slow");
                } else {
                    if ($("input[name=pwdtxt]").val() === "") {
                        $("#pwdp").show("slow");
                    } else {
                        $.ajax({url: "<?= base_url('Login/Masuk'); ?>",
                            type: "POST",
                            dataType: "JSON",
                            data: {unametxt: d, pwdtxt: c},
                            success: function (data) {
                                if (data.status === "success") {
                                    window.location.href = "<?= base_url('Dashboard/index'); ?>";
                                } else {
                                    $("#errormsg").show("slow");
                                }

                            }});
                    }
                }
                return false;
            }
        </script>
        <script src="https://themes.semicolonweb.com/html/canvas/js/jquery.js"></script>
        <script src="https://themes.semicolonweb.com/html/canvas/js/plugins.js"></script>
        <script src="https://themes.semicolonweb.com/html/canvas/js/functions.js"></script>
    </body>
</html>