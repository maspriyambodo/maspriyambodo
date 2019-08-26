</div>
</section>
<div id="gotoTop" class="icon-angle-up"></div>
<footer id="footer" class="dark">
    <div id="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <p>Copyrights &copy; <?= date("Y"); ?> All Rights Reserved by Priyambodo.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="icon-envelope2"></i> info@maspriyambodo.com
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="icon-headphones"></i> +62-896-2013-2007
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
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/plugins.js'); ?>"></script>
<script src="<?= base_url('assets/js/functions.js'); ?>"></script>
<script src="<?= base_url('assets/js/prettify.js'); ?>" type="text/javascript"></script>
<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
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