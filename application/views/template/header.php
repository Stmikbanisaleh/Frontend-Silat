<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>LAPAN</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('/assets/icon/') ?>favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/timeline.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/blog.style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/headers/header-v8.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/footers/footer-v8.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/login-signup-modal-window/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/master-slider/masterslider/style/masterslider.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/master-slider/masterslider/skins/default/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/summernote/summernote.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bootstrap/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-fixedheader/dataTables.fixedHeader.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-responsive/dataTables.responsive.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/theme-colors/') ?>blue.css" id="style_color">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/custom.css">
</head>

<body class="header-fixed header-fixed-space-v2">
    <div class="wrapper">
        <!--=== Header v8 ===-->
        <div class="header-v8 header-sticky">
            <!-- Topbar blog -->
            <div style="background:#3498db;" class="blog-topbar">
                <div class="topbar-search-block">
                    <!--
                    <div class="container">
                        <form action="">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="search-close"><i class="icon-close"></i></div>
                        </form>
                    </div>
-->
                    <br>
                    <br>
                    <br>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-8 col-xs-8">

                        </div>
                        <!-- <div class="col-sm-4 col-xs-4 clearfix">
                            <?php if ($user) { ?>
                                <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">
                                    <img height="25px" width="25px" src="http://localhost/pusispan/assets/img_user/<?= $user['image']; ?>">
                                    <li class="cd-log_reg home"><?= $user['name']; ?></li>
                                    <a class="btn btn-xs btn-default" href="<?= base_url('login/logout') ?>">Logout</a>
                                </ul>
                            <?php } else { ?>
                                <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">
                                    <li class="cd-log_reg home"><a href="<?= base_url('login'); ?>">Login</a></li>
                                </ul>
                            <?php } ?>
                        </div> -->

                        <br>
                    </div>
                    <!--/end row-->
                </div>
                <!--/end container-->
            </div>
            <!-- End Topbar blog -->

            <!-- Navbar -->
            <div class="navbar mega-menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="res-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-brand">
                            <a href="<?= base_url() ?>">
                                <img src="<?= base_url('assets/img/logo/') ?>logolapan.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!--/end responsive container-->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <div class="res-container">
                            <ul class="nav navbar-nav">
                                <?php foreach ($menu as $mn) { ?>
                                    <li class="dropdown">
                                        <?php if (strpos($mn['link'], 'http') !== false) : ?>
                                            <a target="_blank" href="<?= $mn['link']; ?>">
                                                <?= $mn['nama_menu']; ?>
                                            </a>
                                        <?php elseif ($mn['link'] == '') :  ?>
                                            <a href="#">
                                                <?= $mn['nama_menu']; ?>
                                            </a>
                                        <?php elseif ($mn['link'] != '') : ?>
                                            <a href="<?= base_url($mn['link']); ?>">
                                                <?= $mn['nama_menu']; ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($mn['punya_sub'] == 'Ya') { ?>
                                            <ul class="dropdown-menu">
                                                <?php foreach ($submenu as $smn) { ?>
                                                    <?php if ($smn['id_parent'] == $mn['id_menu']) { ?>
                                                        <?php if (strpos($smn['link'], 'http') !== false) { ?>
                                                            <li><a href="<?= $smn['link']; ?>" target="_blank"><?= $smn['nama_menu']; ?></a></li>
                                                        <?php } else { ?>
                                                            <li><a href="<?= base_url($smn['link']); ?>"><?= $smn['nama_menu']; ?></a></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                <?php  } ?>
                            </ul>
                        </div>
                        <!--/responsive container-->
                    </div>
                    <!--/navbar-collapse-->
                </div>
                <!--/end contaoner-->
            </div>
            <!-- End Navbar -->
        </div>
        <!--=== End Header v8 ===-->