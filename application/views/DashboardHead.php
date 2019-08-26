<!DOCTYPE html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="icon" href="<?= base_url('assets/images/Logo/ico.png'); ?>" type="image/ico" />
        <title>
            <?= $title ?>
        </title>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap4.min.css' rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/daterangepicker.min.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/gentelella/1.4.0/css/custom.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/flat/green.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
        <style type="text/css">.back-to-top{background-color:#555;position:fixed;bottom:20%;right:-1px;float:right;margin:0 -0px 0 0;border:1px solid #ddd;width:40px;height:40px;padding:10px;cursor:pointer;opacity:.4}</style>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?= base_url('Dashboard'); ?>" class="site_title">
                                <img src="<?= base_url('assets/images/Logo/smallLogo.png'); ?>"/>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="<?= base_url($this->session->userdata('gambar')); ?>" class="img-circle profile_img img-rounded">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2 class="text-uppercase"><?= $this->session->userdata('nama'); ?></h2>
                            </div>
                        </div>
                        <br />
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a class="text-uppercase"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('Customerlist/index'); ?>" class="text-uppercase">Customer</a></li>
                                            <li><a href="<?= base_url('Pwdmgr/index'); ?>" class="text-uppercase">password manager</a></li>
                                            <li><a href="<?= base_url('Visitors/index'); ?>" class="text-uppercase">visitors</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="text-uppercase"><i class="fa fa-inbox"></i> mail <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('Mail/index'); ?>" class="text-uppercase">new</a></li>
                                            <li><a href="<?= base_url('Mail/Inbox'); ?>" class="text-uppercase">inbox</a></li>
                                            <li><a href="<?= base_url('Mail/Sent'); ?>" class="text-uppercase">sent</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="text-uppercase"><i class="fa fa-bar-chart" aria-hidden="true"></i> report <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('Reports/Daily'); ?>" class="text-uppercase">daily</a></li>
                                            <li><a href="<?= base_url('Reports/Monthly'); ?>" class="text-uppercase">monthly</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="text-uppercase" href='<?= base_url('Backupdb/index'); ?>'><i class="fa fa-cloud-download"></i> backup database</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="text-uppercase user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?= base_url($this->session->userdata('gambar')); ?>"><?= $this->session->userdata('nama'); ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li>
                                            <a href="<?php
                                            if ($Content == "Profile") {
                                                echo '#';
                                            } else {
                                                echo base_url('Profiles/index');
                                            }
                                            ?>"> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Settings/index'); ?>">
                                                Settings
                                            </a>
                                        </li>
                                        <li><a href="<?= base_url('Dashboard/Logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="#" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">
                                            <?= $ProjectOffer->num_rows() ?>
                                        </span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <?php
                                        foreach ($ProjectOffer->result() as $ProjectOffer) {
                                            echo '<li>
                                            <a href="' . base_url("Readprojectoffer/DetailProject/") . $ProjectOffer->id . '">
                                            <span>' . $ProjectOffer->name_user . '</span>
                                            <span class="time">' . $ProjectOffer->tgl . '</span>
                                            </span>
                                            <span class="message" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                ' . $ProjectOffer->pesan_user . '
                                        </span>
                                        </a>
                                </li>';
                                        }
                                        ?>
                                        <li>
                                            <div class="text-center">
                                                <a href="<?= base_url('Readprojectoffer/index'); ?>">
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right_col" role="main">