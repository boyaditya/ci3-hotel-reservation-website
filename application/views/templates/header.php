<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/logo-black.png">
    <title><?= $judul ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <?php if ($this->session->userdata('email')) { ?>
                    <a href="<?= base_url() ?><?= ($this->session->userdata('role_id') == 1) ? 'admin' : 'user' ?>" style="color: black;">
                        <img src="<?= base_url() ?>assets/img/profile/<?= $user['image'] ?>">
                        My Account <i class=" fa fa-angle-down"></i>
                    </a>
                    <div class="flag-dropdown">
                        <ul>
                            <li><a href="<?= base_url() ?>auth/logout">Logout</a></li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <img src="<?= base_url() ?>assets/img/profile/default.jpg">
                    Login / Register <i class=" fa fa-angle-down"></i>
                    <div class="flag-dropdown">
                        <ul>
                            <li><a href="<?= base_url() ?>auth">Login</a></li>
                            <li><a href="<?= base_url() ?>auth/registration">Register</a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <a href="<?= base_url() ?>booking/index/<?= time(); ?>/<?= time() + 86400 ?>" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="<?= base_url() ?>home">Home</a></li>
                <li><a href="<?= base_url() ?>#about">About Us</a></li>
                <li><a href="<?= base_url() ?>#service">Services</a></li>
                <li><a href="<?= base_url() ?>rooms">Rooms</a>
                    <ul class="dropdown">
                        <?php foreach ($rooms as $room) { ?>
                            <li><a href="<?= base_url() ?>rooms/details/<?= $room['id_jenis_kamar'] ?>/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>"><?= $room['jenis_kamar'] ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="<?= base_url() ?>#ratings">Ratings</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+62) 812 345 678</li>
            <li><i class="fa fa-envelope"></i> luxehotel@luxe.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (+62) 812 345 678</li>
                            <li><i class="fa fa-envelope"></i> luxehotel@luxe.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="<?= base_url() ?>booking/index/<?= time(); ?>/<?= time() + 86400 ?>" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <?php if ($this->session->userdata('email')) { ?>
                                    <a href="<?= base_url() ?><?= ($this->session->userdata('role_id') == 1) ? 'admin' : 'user' ?>" style="color: black;">
                                        <img src="<?= base_url() ?>assets/img/profile/<?= $user['image'] ?>">
                                        My Account <i class=" fa fa-angle-down"></i>
                                    </a>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a href="<?= base_url() ?>auth/logout">Logout</a></li>
                                        </ul>
                                    </div>
                                <?php } else { ?>
                                    <img src="<?= base_url() ?>assets/img/profile/default.jpg">
                                    Login / Register <i class=" fa fa-angle-down"></i>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a href="<?= base_url() ?>auth">Login</a></li>
                                            <li><a href="<?= base_url() ?>auth/registration">Register</a></li>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="<?= base_url() ?>home">
                                <img src="<?= base_url() ?>assets/img/logo.png" width="60px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="<?= base_url() ?>home">Home</a></li>
                                    <li><a href="<?= base_url() ?>#about">About Us</a></li>
                                    <li><a href="<?= base_url() ?>#service">Services</a></li>
                                    <li><a href="<?= base_url() ?>rooms">Rooms</a>
                                        <ul class="dropdown">
                                            <?php foreach ($rooms as $room) { ?>
                                                <li><a href="<?= base_url() ?>rooms/details/<?= $room['id_jenis_kamar'] ?>/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>"><?= $room['jenis_kamar'] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url() ?>#ratings">Ratings</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->