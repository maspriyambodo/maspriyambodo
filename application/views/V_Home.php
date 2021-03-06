<div class="container clearfix" id="about">
    <div class="row clearfix">
        <div class=col-xl-5>
            <div class="heading-block topmargin">
                <h1>Hi, i`m Priyambodo</h1> </div>
            <p class=lead>
                Create a website that you are gonna be proud of. Be it Business, Portfolio, Agency, Photography, eCommerce & much more. 
            </p>
            <p class="text-justify">
                Penjualan merupakan tombak utama dari suatu usaha. Laporan penjualan menjadi bagian dari penjualan yang digunakan untuk menyampaikan informasi perkembangan maupun penurunan. Apabila informasi yang disajikan tersaji dengan terinci maka akan menghasilkan data yang sangat membantu pengambilan keputusan usaha secara akurat. Informasi yang tersaji secara sederhana juga dapat berdampak efisien saat melakukan pelaporan sehingga memudahkan dalam penyampaiannya.
            </p>
        </div>
        <div class=col-xl-7>
            <div style=position:relative;margin-bottom:-60px class=ohidden data-height-xl=426 data-height-lg=567 data-height-md=470 data-height-md=287 data-height-xs=183> <img src="https://cdn.maspriyambodo.com/images/slider/front.webp" style=position:absolute;top:0;left:0 data-animate=fadeInUp data-delay=100> </div>
        </div>
    </div>
    <p class="text-justify">
        migrasikan sistem anda menjadi lebih terbaru dan memudahkan pembaruan.
        dengan menggunakan sistem terbaru dan dukungan yang lebih unggul membuat lebih mudah dalam melakukan pembaruan sistem tanpa bergantung dengan siapapun, karena sistem yang handal adalah yang dapat dimengerti dengan mudah oleh yang mempunyai pengalaman pada bidangnya tanpa harus bergantung dengan seorang saja.
        setiap saat, kapanpun, dimanapun dapat dengan mudah melanjutkan pekerjaan yang sudah ada. dalam setiap kasus adalah dimana ketika ingin melakukan pembaruan sangatlah sulit untuk mencari seseorang yang baru yang dapat memahami suatu pekerjaan, yang pada akhirnya hanyalah bergantung pada seorang yang telah membuatnya karena hanya dia dan tuhan yang memahami pekerjaan itu.
        dalam suatu sistem bertujuan untuk mempermudah bukanlah untuk membuat lebih sulit pekerjaan, untuk apa dibangun sebuah sistem jika tidak dapat dikerjakan dengan mudah.
    </p>
</div>
<div style="clear:both;margin:80px 0"></div>
<div class="row bottommargin-lg common-height" id="services">
    <div class="col-lg-4 dark col-padding ohidden" style="background-color:#1abc9c;height:356.8px;">
        <div>
            <h3 class=uppercase style=font-weight:600>Strategy</h3>
            <p style=line-height:1.8> I collaborate with clients and peers to nurture and transform ideas into well thought out design specs. After all, that's where the majority of amazing user experiences start. </p> <i class="icon-bulb bgicon"></i> </div>
    </div>
    <div class="col-lg-4 dark col-padding ohidden" style=background-color:#34495e;height:356.8px>
        <div>
            <h3 class=uppercase style=font-weight:600>UI / UX</h3>
            <p style=line-height:1.8> I sketch and wireframe interfaces focusing on content structure, intuitive UI patterns and simple interactions. I'm a minimalist who truly believes that less is more. </p> <i class="icon-cog bgicon"></i> </div>
    </div>
    <div class="col-lg-4 dark col-padding ohidden" style=background-color:#e74c3c;height:356.8px>
        <div>
            <h3 class=uppercase style=font-weight:600>Code</h3>
            <p style=line-height:1.8> I design in the browser with HTML(5), CSS(3) and a touch of JavaScript. I love coding things from scratch, but I can work with front-end frameworks like Bootstrap too. </p> <i class="icon-thumbs-up bgicon"></i> </div>
    </div>
</div>
<div style="clear:both;margin:15px 0"></div>
<div class="section parallax dark nomargin noborder skrollable skrollable-before" id="project"
     style="padding:150px 0;background-image:url(https://cdn.maspriyambodo.com/images/slider/swiper/3.jpg);background-position:0 300px" 
     data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div class="container center clearfix">
        <div class=emphasis-title>
            <h2 style=color:black> Want to work together ? </h2>
            <p style=font-size:20px;color:black> I'm currently accepting new projects and would love to hear about yours.
                <br>Please take a few minutes to tell me about it. </p>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">GET STARTED</button>
    </div>
</div>
<div style="clear:both;margin:25px 0"></div>
<div class="container clearfix" id="contact">
    <?php echo form_open(base_url('Home/SubmitMessage')); ?>
    <div class="col_one_third">
        <label>Name <small>*</small></label>
        <input type="text" name="nametxt" value="" class="sm-form-control" placeholder="Full Name" required=""/>
    </div>

    <div class="col_one_third">
        <label>Email <small>*</small></label>
        <input type="email" name="mailtxt" value="" class="sm-form-control" placeholder="Email address" required=""/>
    </div>

    <div class="col_one_third col_last">
        <label>Phone</label>
        <input type="tel" name="teltxt" value="" class="sm-form-control" placeholder="Phone number" required=""/>
    </div>

    <div class="clear"></div>

    <div class="col_two_third">
        <label>Subject <small>*</small></label>
        <input type="text" name="subtxt" value="" class="sm-form-control" placeholder="Message title" required=""/>
    </div>
    <div class="col_one_third col_last">
        <label>Website</label>
        <input type="url" name="urltxt" value="" class="sm-form-control" placeholder="Website" />
    </div>
    <div class="clear"></div>

    <div class="col_full">
        <label>Message <small>*</small></label>
        <textarea class="sm-form-control" name="msgtxt" rows="6" cols="30" required=""></textarea>
    </div>
    <div id="image_captcha" title="the code use case sensitive" class="col_one_third" onclick="refreshCaptcha()">
        <?= $images ?>
        <a style="margin:0px 10px;" title="Refresh Code">
            <img src="https://cdn.maspriyambodo.com/images/preloader-dark.gif" style="width:20px;height:20px;"/>
        </a>
    </div>
    <div style="clear:both;margin:10px 0px;"></div>
    <div class="col_one_third">
        <input type="text" name="captchatxt" value="" class="sm-form-control" placeholder="Enter the code" required=""/>
    </div>
    <div style="clear:both;margin:10px 0px;"></div>
    <div class="col_full">
        <button class="button button-3d nomargin" type="submit" name="btnsub" value="submit">Send Message</button>
    </div>
    <?php echo form_close(); ?>
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase text-success">Offering Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Home/SendMessage/'); ?>" method="POST" accept-charset="utf-8">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-uppercase">Full Name <small class="text-danger">*</small></label>
                                <input type="text" name="nametxt" class="form-control" required="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">Phone <small class="text-danger">*</small></label>
                                <input type="text" name="ph" class="form-control" required="" autocomplete="off" onkeypress="return isNumber(event)" minlength="9">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-uppercase">Email <small class="text-danger">*</small></label>
                                <input type="email" name="emailtxt" class="form-control" required="" autocomplete="off" placeholder="name@company.com">
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">website <small class="text-danger">*</small></label>
                                <input type="url" name="website" class="form-control" required="" autocomplete="off" placeholder="https://www.yourcompany.com">
                            </div>
                        </div>
                    </div>
                    <textarea name="messagetxt" type="text" class="sm-form-control" placeholder="Tell me about your project... what is it? Why are you doing it? What do you hope to accomplish? How can I help? Timeline and budget details are also appreciated. *" required=""></textarea>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="btnsub" class="btn btn-default btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function refreshCaptcha() {
        $.ajax({
            url: "<?= base_url('Home/RefreshCaptcha'); ?>",
            type: 'GET',
            async: true,
            success: function (data) {
                $("#image_captcha").html(data.image + data.loader);
            },
            error: function () {
                alert('something error');
            }
        });
    }
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>