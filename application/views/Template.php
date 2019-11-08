<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="<?= base_url('favicon.ico'); ?>" type="image/ico" />
        <title class="text-uppercase"><?= $title ?></title>
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('node_modules/nprogress/nprogress.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/datatables.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/css/animate.css'); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?= base_url('assets/css/custom.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/prettify.css'); ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body class="nav nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="clearfix"></div>
                        <div class="profile clearfix">
                            <div class="profile_pic"> <img src="<?= base_url($this->session->userdata('gambar')); ?>" class="img-circle profile_img img-rounded"> </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2 class="text-uppercase"><?= $this->session->userdata('nama'); ?></h2>
                                <?php
                                if ($this->session->userdata('hakakses') == 1) {
                                    echo 'ADMIN';
                                } elseif ($this->session->userdata('hakakses') == 2) {
                                    echo 'CUSTOMER';
                                } elseif ($this->session->userdata('hakakses') == 3) {
                                    echo 'DIREKTUR';
                                } else {
                                    echo 'CUSTOMER';
                                }
                                ?>
                            </div>
                        </div>
                        <br/>
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <!--====================================================================================-->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <ul class="nav side-menu">
                                        <li>
                                            <a href="<?= base_url('Admin/Dashboard/index'); ?>"><i class="fa fa-dashboard"></i> DASHBOARD</a>
                                        </li>
                                        <li>
                                            <a class="text-uppercase"><i class="fa fa-database"></i> Master <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu" style="display: none;">
                                                <li>
                                                    <a href="<?= base_url('Admin/Hosting/index/'); ?>" class="text-uppercase">Hosting</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('Admin/Pwdmgr/index/'); ?>" class="text-uppercase">password manager</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="text-uppercase"><i class="fa fa-home"></i> Transact <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu" style="display: none;">
                                                <li>
                                                    <a href="<?= base_url('Admin/Customer/index/'); ?>" class="text-uppercase">Customer</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--====================================================================================-->
                        </div>
                    </div>
                </div>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle"><a id="menu_toggle" style="color:#d50000;"><i class="fa fa-bars"></i></a></div>

                            <ul class="nav navbar-nav navbar-right"> 
                                <li class=""> 
                                    <a href="javascript:;" class="user-profile dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false"> 
                                        <img src="<?= base_url($this->session->userdata('gambar')); ?>"><?= $this->session->userdata('nama') ?> 
                                        <span class=" fa fa-angle-down">
                                        </span> 
                                    </a> 
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li>
                                            <a href="<?= base_url('Auth/Logout'); ?>">
                                                <i class="fa fa-sign-out pull-right">
                                                </i> Log Out
                                            </a>
                                            <a href="<?= base_url('Auth/askldl'); ?>">
                                                <i class="fa fa-key pull-right">
                                                </i> Change Password
                                            </a>
                                        </li> 
                                    </ul> 
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right_col hidden" role="main" style="min-height:0px ! important;">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="text-uppercase"><?= $formtitle; ?></h2>
                            <div class="clearfix" style="clear:both;margin:0px;"></div>
                        </div>
                        <div class="x_content clearfix" style="clear:both;margin:0px;display:block;">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="pull-right"> Copyrights © <?= date("Y") ?> All Rights Reserved by <a href="#" target="_new">maspriyambodo.co.id</a> </div>
                <div class="clearfix"></div>
            </footer>
            <div class="back-to-top" data-placement="top" data-toggle="tooltip" id="back-top" title="" data-original-title="Back to Top"><i class="fa fa-chevron-up"></i></div>
            <script src="<?= base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/fastclick.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/nprogress.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/moment.min.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/custom.min.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/datatables.min.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/pdfmake.min.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/vfs_fonts.js'); ?>" type="text/javascript"></script>
            <script src="<?= base_url('assets/js/prettify.js'); ?>" type="text/javascript"></script>
    </body>
</html>