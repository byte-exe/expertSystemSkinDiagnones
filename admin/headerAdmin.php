<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSUD M. Natsir | Sistem Pakar</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="source/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="source/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="source/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="source/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        
    <div class="header__top">
    <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i> 0755-20003 / 0755-20827</li>
                            <li><i class="fa fa-map-marker"></i> RSUD M. Natsir, Solok</li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                        <a href=""><i class="fa fa-hospital-o"></i></a>
                        <a href=""><i class=""></i>Rumah Sakit Umum Daerah Kota Solok</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="indexAdmin.php"><img src="source/img/LOGOFK.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <?php
                                    $activePage = basename($_SERVER['PHP_SELF'], ".php");
                                ?>

                                <li><a href="listKonsultasi.php">Konsultasi</a></li>
                              
                                <li class=""><a href="#">Penentuan Penyakit</a>
                                    <ul class="dropdown">
                                        <li><a href="gejala.php">Gejala</a></li>
                                        <li><a href="penyakit.php">Penyakit</a></li>
                                        <li><a href="pengobatan.php">Pengobatan</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="#">Aturan</a>
                                    <ul class="dropdown">
                                        
                                        <li><a href="aPenyakit.php">Aturan Penyakit</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </nav>
                        <div class="header__btn">
                            <a href="login.php" class="primary-btn">Logout</a>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->