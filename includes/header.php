<?php 
session_start();
include 'admin/config.php';
  
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>Ochaka - Multipurpose eCommerce HTML Template</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="Themesflat Ochaka - A modern and elegant Multipurpose eCommerce HTML Template, perfect for online stores selling rings, necklaces, watches, and other accessories. SEO-optimized, fast-loading, and fully customizable.">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="icon/icomoon/style.css">
    <!-- css -->
    <link rel="stylesheet" href="../sibforms.com/forms/end-form/build/sib-styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.svg">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.svg">

    <style>
        .box-nav-menu .menu-item{
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-caret-up"></span>
    </button>
    <!-- preload -->
    <div class="preload preload-container" id="preload">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <!-- Top Bar-->
        <div class="tf-topbar bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="topbar-left">
                            <h6 class="text-up text-white fw-normal text-line-clamp-1">Up to 50% off Lorem ipsum dolor
                                sit amet, consectetur
                                adipiscing elit</h6>
                            <div class="group-btn">
                                <a href="product.php" class="tf-btn-line style-white letter-space-0">Men</a>
                                <a href="product.php" class="tf-btn-line style-white letter-space-0">Women</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <ul class="topbar-right topbar-option-list">
                            <li class="h6">
                                <a href="about-us.php" class="text-white link">Help & FAQs</a>
                            </li>
                            <li class="br-line"></li>
                            <li class="h6">
                                <a href="product.php" class="text-white link">Factory</a>
                            </li>
                            <li class="br-line d-none d-xl-inline-flex"></li>
                            <li class="tf-currencies d-none d-xl-block">
                                <select class="tf-dropdown-select style-default color-white type-currencies">
                                    <option selected data-thumbnail="images/country/us.png">USD</option>
                                    <option data-thumbnail="images/country/vie.png">VND</option>
                                </select>
                            </li>
                            <li class="br-line d-none d-xl-inline-flex"></li>
                            <li class="tf-languages d-none d-xl-block">
                                <select class="tf-dropdown-select style-default color-white type-languages">
                                    <option>English</option>
                                    <option>العربية</option>
                                    <option>简体中文</option>
                                    <option>اردو</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
        <!-- Header -->
        <header class="tf-header header-fix header-abs-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 col-3 d-xl-none">
                        <a href="#mobileMenu" data-bs-toggle="offcanvas" class="btn-mobile-menu">
                            <span></span>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 text-center text-xl-start">
                        <a href="index.php" class="logo-site justify-content-center justify-content-xl-start">
                            <img src="images/logo/logo.svg" alt="Logo">
                        </a>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <nav class="box-navigation">
                            <ul class="box-nav-menu">
                                <li class="menu-item">
                                    <a href="index.php" class="item-link">HOME</a>
                                </li>
                                <?php 
                                $g_data = $db->query("SELECT * FROM `gender`");
                                while ($row = $g_data->fetch_object()) {

                                    ?>
                                <li class="menu-item">
                                    <a href="javascript:void(0)" class="item-link"><?= $row->gender?></a>
                                </li>
                                <?php }?>
                                
                                <li class="menu-item">
                                    <a href="product.php" class="item-link">SHOP<i class="icon icon-caret-down"></i></a>
                                    <div class="sub-menu mega-menu mega-home">
                                        <div class="container">
                                            <div class="row-demo">
                                                <?php 
                                                    $c_data = $db->query("SELECT * FROM `product_categories`");
                                                    while ($row = $c_data->fetch_object()) {
                                                    ?>
                                                <div class="demo-item">
                                                    <a href="index.php" class="demo-img">
                                                        <img src="admin/uploads/category/<?= $row->pc_image?>" alt="Demo">
                                                    </a>
                                                    <a href="index.php" class="demo-name"><?= $row->pc_name?></a>
                                                </div>
                                                 <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.php" class="item-link">About us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="javascript:void(0)" class="item-link">FAQs</a>
                                </li>
                               
                                <li class="menu-item position-relative">
                                    <a href="javascript:void(0)" class="item-link">BLOG</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <ul class="nav-icon-list">
                            <li class="d-none d-lg-flex">
                                <?php if (isset($_SESSION['u_id'])): ?>
                                    <?php
                                  
                                    $user_query = $db->query("SELECT * FROM `user` WHERE `u_id` = '" . $_SESSION['u_id'] . "'");
                                    $user_data = $user_query->fetch_object();
                                   
                                    ?>
                                    <div class="dropdown">
                                        <a class="nav-icon-item link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="admin/uploads/profiles/<?= $user_data->image ; ?> " alt="Profile" class="profile-avatar" style="width: 24px; height: 24px; border-radius: 50%; object-fit: cover;">
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="account-page.php">My Account</a></li>
                                            <li><a class="dropdown-item" href="admin/manage/manage-user.php?submit=logout">Logout</a></li>
                                        </ul>
                                    </div>
                                <?php else: ?>
                                    <a class="nav-icon-item link" href="login.php"><i class="icon icon-user"></i></a>
                                <?php endif; ?>
                            </li>
                            <li class="d-none d-md-flex">
                                <a class="nav-icon-item link" href="#search" data-bs-toggle="modal">
                                    <i class="icon icon-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="d-none d-sm-flex">
                                <a class="nav-icon-item link" href="wishlist.php"><i class="icon icon-heart"></i></a>
                            </li>
                            <li class="shop-cart" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart">
                                <a class="nav-icon-item link" href="#shoppingCart" data-bs-toggle="offcanvas">
                                    <i class="icon icon-shopping-cart-simple"></i>
                                </a>
                              
                                <?php
                               
                                $cart_count = $db->query("SELECT COUNT(*) AS `total_cart` FROM `cart` ")->fetch_object();
                                ?>
                                <span class="count"><?=  $cart_count->total_cart??'0';?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->