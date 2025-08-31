<?php include 'includes/header.php'; ?>

        <!-- Banner Slider -->
        <div class="tf-slideshow type-abs tf-btn-swiper-main hover-sw-nav">
            <div dir="ltr" class="swiper tf-swiper sw-slide-show slider_effect_fade" data-auto="true" data-loop="true" data-effect="fade"
                data-delay="3000">
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-2">
                            <div class="sld_image">
                                <img src="images/slider/slider-19.jpg" data-src="images/slider/slider-19.jpg" alt="" class="lazyload ani-zoom">
                            </div>
                            <div class="sld_content text-center">
                                <div class="container">
                                    <div class="content-sld_wrap">
                                        <p class="sub-title_sld h6 text-primary fade-item fade-item-1">
                                            SALE OFF 50%
                                        </p>
                                        <h1 class="title_sld text-display fade-item fade-item-2">
                                            Modern & Minimalistic
                                        </h1>
                                        <p class="sub-text_sld h5 text-black fade-item fade-item-3">
                                            Ad nisi irure officia nulla culpa culpa laborum Lorem. <br class="d-none d-sm-block">
                                            Ad dolore cillum non commodo ad non non.
                                        </p>
                                        <div class="fade-item fade-item-4">
                                            <a href="product.php" class="tf-btn animate-btn fw-normal">
                                                Shop now
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-2">
                            <div class="sld_image">
                                <img src="images/slider/slider-20.jpg" data-src="images/slider/slider-20.jpg" alt="" class="lazyload ani-zoom">
                            </div>
                            <div class="sld_content text-center">
                                <div class="container">
                                    <div class="content-sld_wrap">
                                        <p class="sub-title_sld h6 text-primary fade-item fade-item-1">
                                            SALE OFF 45%
                                        </p>
                                        <h1 class="title_sld text-display fade-item fade-item-2">
                                            Clean & Contemporary
                                        </h1>
                                        <p class="sub-text_sld h5 text-black fade-item fade-item-3">
                                            A modern take on minimalism with clean lines and crisp silhouettes. <br class="d-none d-sm-block">
                                            Designed to bring clarity and ease to your everyday wardrobe.
                                        </p>
                                        <div class="fade-item fade-item-4">
                                            <a href="product.php" class="tf-btn animate-btn fw-normal">
                                                Shop now
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-2">
                            <div class="sld_image">
                                <img src="images/slider/slider-21.jpg" data-src="images/slider/slider-21.jpg" alt="" class="lazyload ani-zoom">
                            </div>
                            <div class="sld_content text-center">
                                <div class="container">
                                    <div class="content-sld_wrap">
                                        <p class="sub-title_sld h6 text-primary fade-item fade-item-1">
                                            SALE OFF 30%
                                        </p>
                                        <h1 class="title_sld text-display fade-item fade-item-2">
                                            Sleek & Structured
                                        </h1>
                                        <p class="sub-text_sld h5 text-black fade-item fade-item-3">
                                            Defined cuts meet architectural form in this bold, balanced edit. <br class="d-none d-sm-block">
                                            Each piece offers a strong presence with refined simplicity.
                                        </p>
                                        <div class="fade-item fade-item-4">
                                            <a href="product.php" class="tf-btn animate-btn fw-normal">
                                                Shop now
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dot-default tf-sw-pagination"></div>
            </div>
            <div class="tf-sw-nav nav-prev-swiper">
                <i class="icon icon-caret-left"></i>
            </div>
            <div class="tf-sw-nav nav-next-swiper">
                <i class="icon icon-caret-right"></i>
            </div>
        </div>
        <!-- /Banner Slider -->
        <!-- Category -->
        <section class="flat-spacing">
            <div class="container">
                <div class="sect-title text-center wow fadeInUp">
                    <h1 class="title mb-8">Shop By Category</h1>
                    <p class="s-subtitle h6">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="6" data-tablet="4" data-mobile-sm="3" data-mobile="2"
                    data-space-lg="48" data-space-md="32" data-space="12" data-pagination="2" data-pagination-sm="3" data-pagination-md="4"
                    data-pagination-lg="6">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                         <?php 
                            $sub_data = $db->query("SELECT * FROM `product_subcategory` ORDER BY `psc_id` DESC LIMIT 10");
                            while($sub_value = $sub_data->fetch_object()){
                                $psc_id = $sub_value->psc_id;
                                $product_value = $db->query("SELECT COUNT(*) total_product FROM `product` WHERE `psc_id` = '$psc_id'");
                                $product_value = $product_value->fetch_object();
                                $total_product = $product_value->total_product;
                         ?>
                        <div class="swiper-slide">
                            <a href="product.php" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="admin/uploads/category/<?= $sub_value->psc_image;?>" data-src="images/category/cate-18.jpg" alt="">
                                </div>
                                <p class="collection_name h5 link">
                                    <?= $sub_value->psc_name?> <span class="count text-main-2">(<?= $total_product;?>)</span>
                                </p>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Category -->
        <!-- New Product -->
        <section class="flat-spacing pt-0 tf-pag-swiper">
            <div class="container">
                <div class="sect-title text-center wow fadeInUp">
                    <h1 class="s-title mb-8">New Product</h1>
                    <p class="s-subtitle h6">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="tf-btn-swiper-main pst-3">
                    <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                        data-space-lg="48" data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                        data-pagination-lg="4">
                        <div class="swiper-wrapper">
                            <!-- Product 1 -->
                              <?php 
                            $p_data = $db->query("SELECT * FROM `product` ORDER BY `id` DESC LIMIT 10");
                                while($product = $p_data->fetch_object()){
                                   
                             ?>
                            
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper d-flex">
                                        <a href="product-detail.php?product=<?= $product->slug?>" class="product-img">
                                            <img class="lazyload img-product" src="admin/uploads/products/<?= $product->product_image;?>"
                                                data-src="admin/uploads/products/<?= $product->product_image;?>" alt="Product">
                                            <img class="lazyload img-hover" src="images/products/decor/product-2.jpg"
                                                data-src="images/products/decor/product-2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                 <span class="icon icon-shopping-cart-simple"></span>
                                                    <span class="tooltip" >Add to cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">   
                                                <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-product_info">
                                        <a href="product-detail.php" class="name-product h4 link"><?=$product->product_name; ?></a>
                                        <div class="price-wrap mb-0">
                                            <span class="price-old h6 fw-normal"> ₹ <?=$product->product_market_price; ?></span>
                                            <span class="price-new h6">₹ <?=$product->product_selling_price; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
 
                        </div>
                    </div>
                    <div class="tf-sw-nav style-2 nav-prev-swiper d-xl-flex">
                        <i class="icon icon-caret-left"></i>
                    </div>
                    <div class="tf-sw-nav style-2 nav-next-swiper d-xl-flex">
                        <i class="icon icon-caret-right"></i>
                    </div>
                </div>
                <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
            </div>
        </section>
        <!-- /New Product -->
        <!-- Box Image -->
        <section class="themesFlat">
            <div class="container-full-2">
                <div class="tf-grid-layout lg-col-2 gap-0">
                    <div class="box-image_V04 hover-img">
                        <a href="product.php" class="box-image_image img-style">
                            <img src="images/section/box-image-6.jpg" data-src="images/section/box-image-6.jpg" alt="" class="lazyload">
                        </a>
                        <div class="box-image_content align-items-center text-center">
                            <span class="sub-text h6 text-primary">SALE OFF 50%</span>
                            <h2 class="title type-semibold">
                                <a href="product.php" class="link">
                                    Wall Shelves For Bathroom
                                </a>
                            </h2>
                            <p class="sub-title h6">Keep your bathroom neat and tidy with wall shelves.</p>
                            <a href="product.php" class="tf-btn animate-btn">
                                Shop now
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="box-image_V04 hover-img">
                        <a href="product.php" class="box-image_image img-style">
                            <img src="images/section/box-image-7.jpg" data-src="images/section/box-image-7.jpg" alt="" class="lazyload">
                        </a>
                        <div class="box-image_content align-items-center text-center">
                            <span class="sub-text h6 text-primary">SALE OFF 50%</span>
                            <h2 class="title type-semibold">
                                <a href="product.php" class="link">
                                    Smart Storage With Style
                                </a>
                            </h2>
                            <p class="sub-title h6">Durable and stylish, these shelves resist moisture. </p>
                            <a href="product.php" class="tf-btn animate-btn">
                                Shop now
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Box Image -->
        <!-- Trending -->
        <section class="flat-spacing flat-animate-tab">
            <div class="container">
                <div class="sect-title wow fadeInUp">
                    <h1 class="title text-center mb-24">Trending Shop</h1>
                    <ul class="tab-product_list" role="tablist">
                        <li class="nav-tab-item" role="presentation">
                            <a href="#new-arr" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab fw-normal active">
                                NEW ARRIVALS
                            </a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#best-seller" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab fw-normal">
                                Best seller
                            </a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#on-sale" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab fw-normal">
                                On sale
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="tab-content">
                    <div class="tab-pane active show" id="new-arr" role="tabpanel">
                        <div class="tf-pag-swiper tf-btn-swiper-main pst-3">
                            <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                                data-space-lg="48" data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2"
                                data-pagination-md="3" data-pagination-lg="4">
                                <div class="swiper-wrapper">
                                    <!-- Product 1 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-9.jpg"
                                                        data-src="images/products/decor/product-9.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-10.jpg"
                                                        data-src="images/products/decor/product-10.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Set Of 3 Ceramic Vase</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$109,99</span>
                                                    <span class="price-new h6">$89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 2 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-11.jpg"
                                                        data-src="images/products/decor/product-11.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-12.jpg"
                                                        data-src="images/products/decor/product-12.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Steel Bathroom Storage Box</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$99,99</span>
                                                    <span class="price-new h6">$79,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 3 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-13.jpg"
                                                        data-src="images/products/decor/product-13.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-14.jpg"
                                                        data-src="images/products/decor/product-14.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Candle Heater With Timer</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$79,99</span>
                                                    <span class="price-new h6">$59,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 4 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-15.jpg"
                                                        data-src="images/products/decor/product-15.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-16.jpg"
                                                        data-src="images/products/decor/product-16.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Black Metal Flower Wall Art</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$199,99</span>
                                                    <span class="price-new h6">$159,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 1 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-1.jpg"
                                                        data-src="images/products/decor/product-1.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-2.jpg"
                                                        data-src="images/products/decor/product-2.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Set Of 3 Ceramic Vase</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$109,99</span>
                                                    <span class="price-new h6">$89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-sw-nav style-2 nav-prev-swiper d-xl-flex">
                                <i class="icon icon-caret-left"></i>
                            </div>
                            <div class="tf-sw-nav style-2 nav-next-swiper d-xl-flex">
                                <i class="icon icon-caret-right"></i>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="best-seller" role="tabpanel">
                        <div class="tf-pag-swiper tf-btn-swiper-main pst-3">
                            <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                                data-space-lg="48" data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2"
                                data-pagination-md="3" data-pagination-lg="4">
                                <div class="swiper-wrapper">
                                    <!-- Product 4 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-15.jpg"
                                                        data-src="images/products/decor/product-15.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-16.jpg"
                                                        data-src="images/products/decor/product-16.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Black Metal Flower Wall Art</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$199,99</span>
                                                    <span class="price-new h6">$159,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 1 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-9.jpg"
                                                        data-src="images/products/decor/product-9.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-10.jpg"
                                                        data-src="images/products/decor/product-10.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Set Of 3 Ceramic Vase</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$109,99</span>
                                                    <span class="price-new h6">$89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Product 3 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-13.jpg"
                                                        data-src="images/products/decor/product-13.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-14.jpg"
                                                        data-src="images/products/decor/product-14.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Candle Heater With Timer</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$79,99</span>
                                                    <span class="price-new h6">$59,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 2 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-11.jpg"
                                                        data-src="images/products/decor/product-11.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-12.jpg"
                                                        data-src="images/products/decor/product-12.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Steel Bathroom Storage Box</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$99,99</span>
                                                    <span class="price-new h6">$79,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 1 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-1.jpg"
                                                        data-src="images/products/decor/product-1.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-2.jpg"
                                                        data-src="images/products/decor/product-2.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Set Of 3 Ceramic Vase</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$109,99</span>
                                                    <span class="price-new h6">$89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-sw-nav style-2 nav-prev-swiper d-xl-flex">
                                <i class="icon icon-caret-left"></i>
                            </div>
                            <div class="tf-sw-nav style-2 nav-next-swiper d-xl-flex">
                                <i class="icon icon-caret-right"></i>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="on-sale" role="tabpanel">
                        <div class="tf-pag-swiper tf-btn-swiper-main pst-3">
                            <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                                data-space-lg="48" data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2"
                                data-pagination-md="3" data-pagination-lg="4">
                                <div class="swiper-wrapper">
                                    <!-- Product 3 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-13.jpg"
                                                        data-src="images/products/decor/product-13.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-14.jpg"
                                                        data-src="images/products/decor/product-14.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Candle Heater With Timer</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$79,99</span>
                                                    <span class="price-new h6">$59,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 1 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-9.jpg"
                                                        data-src="images/products/decor/product-9.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-10.jpg"
                                                        data-src="images/products/decor/product-10.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Set Of 3 Ceramic Vase</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$109,99</span>
                                                    <span class="price-new h6">$89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Product 4 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-15.jpg"
                                                        data-src="images/products/decor/product-15.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-16.jpg"
                                                        data-src="images/products/decor/product-16.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Black Metal Flower Wall Art</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$199,99</span>
                                                    <span class="price-new h6">$159,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 2 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-11.jpg"
                                                        data-src="images/products/decor/product-11.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-12.jpg"
                                                        data-src="images/products/decor/product-12.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Steel Bathroom Storage Box</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$99,99</span>
                                                    <span class="price-new h6">$79,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product 1 -->
                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product_wrapper d-flex">
                                                <a href="product-detail.php" class="product-img">
                                                    <img class="lazyload img-product" src="images/products/decor/product-1.jpg"
                                                        data-src="images/products/decor/product-1.jpg" alt="Product">
                                                    <img class="lazyload img-hover" src="images/products/decor/product-2.jpg"
                                                        data-src="images/products/decor/product-2.jpg" alt="Product">
                                                </a>
                                                <ul class="product-action_list">
                                                    <li>
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-shopping-cart-simple"></span>
                                                            <span class="tooltip">Add to cart</span>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Compare</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick view</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-product_info">
                                                <a href="product-detail.php" class="name-product h4 link">Set Of 3 Ceramic Vase</a>
                                                <div class="price-wrap mb-0">
                                                    <span class="price-old h6 fw-normal">$109,99</span>
                                                    <span class="price-new h6">$89,99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-sw-nav style-2 nav-prev-swiper d-xl-flex">
                                <i class="icon icon-caret-left"></i>
                            </div>
                            <div class="tf-sw-nav style-2 nav-next-swiper d-xl-flex">
                                <i class="icon icon-caret-right"></i>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Trending -->
        <!-- Shop The Look -->
        <section class="flat-spacing pt-0 tf-lookbook-hover">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-lookbook wrap-lookbook_hover">
                            <img class="lazyload img-banner" src="images/banner/banner-lookbook-2.jpg" data-src="images/banner/banner-lookbook-2.jpg"
                                alt="Banners">
                            <div class="lookbook-item position3">
                                <div class="dropdown dropup-center dropdown-custom dropstart">
                                    <div role="dialog" class="tf-pin-btn bundle-pin-item swiper-button" data-slide="0" id="pin1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                    </div>
                                    <div class="dropdown-menu p-0 d-lg-none">
                                        <div class="lookbook-product style-row">
                                            <div class="content">
                                                <span class="tag">Textitle</span>
                                                <h6 class="name-prd">
                                                    <a href="product-detail.php" class="link">
                                                        Handcrafted Ceramic Vase
                                                    </a>
                                                </h6>
                                                <div class="price-wrap">
                                                    <span class="price-new h6">$99,99</span>
                                                    <span class="text-third h6">In Stock</span>
                                                </div>
                                            </div>
                                            <a href="product-detail.php" class="image">
                                                <img class="lazyload" src="images/products/decor/product-21.jpg"
                                                    data-src="images/products/decor/product-21.jpg" alt="Product">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lookbook-item position4">
                                <div class="dropdown dropup-center dropdown-custom">
                                    <div role="dialog" class="tf-pin-btn bundle-pin-item swiper-button" data-slide="1" id="pin2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span></span>
                                    </div>
                                    <div class="dropdown-menu p-0 d-lg-none">
                                        <div class="lookbook-product style-row">
                                            <div class="content">
                                                <span class="tag">Table</span>
                                                <h6 class="name-prd">
                                                    <a href="product-detail.php" class="link">
                                                        Artisan Woven Wall
                                                    </a>
                                                </h6>
                                                <div class="price-wrap">
                                                    <span class="price-new h6">$99,99</span>
                                                    <span class="text-third h6">In Stock</span>
                                                </div>
                                            </div>
                                            <a href="product-detail.php" class="image">
                                                <img class="lazyload" src="images/products/decor/product-22.jpg"
                                                    data-src="images/products/decor/product-22.jpg" alt="Product">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-lg-0 pt-30">
                            <div class="sect-title wow fadeInUp">
                                <h1 class="s-title mb-8">Shop This Look</h1>
                                <p class="s-subtitle h6">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div dir="ltr" class="swiper tf-sw-lookbook tf-sw-lookbook bundle-hover-wrap" data-preview="2" data-tablet="2"
                                data-mobile="2" data-space-lg="48" data-space-md="24" data-space="16" data-pagination="1" data-pagination-md="1"
                                data-pagination-lg="1">
                                <div class="swiper-wrapper">
                                    <!-- item 1 -->
                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp">
                                            <div class="card-product bundle-hover-item pin1">
                                                <div class="card-product_wrapper d-flex">
                                                    <a href="product-detail.php" class="product-img">
                                                        <img class="lazyload img-product" src="images/products/decor/product-17.jpg"
                                                            data-src="images/products/decor/product-17.jpg" alt="Product">
                                                        <img class="lazyload img-hover" src="images/products/decor/product-18.jpg"
                                                            data-src="images/products/decor/product-18.jpg" alt="Product">
                                                    </a>
                                                    <ul class="product-action_list">
                                                        <li>
                                                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                                class="hover-tooltip tooltip-left box-icon">
                                                                <span class="icon icon-shopping-cart-simple"></span>
                                                                <span class="tooltip">Add to cart</span>
                                                            </a>
                                                        </li>
                                                        <li class="wishlist">
                                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                                <span class="icon icon-heart"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li class="compare">
                                                            <a href="#compare" data-bs-toggle="offcanvas"
                                                                class="hover-tooltip tooltip-left box-icon ">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Compare</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick view</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-product_info d-flex flex-column">
                                                    <a href="product-detail.php" class="name-product h4 link">Easter Decorations</a>
                                                    <div class="price-wrap mb-0">
                                                        <span class="price-old h6 fw-normal">$119,99</span>
                                                        <span class="price-new h6">$84,99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item 2 -->
                                    <div class="swiper-slide">
                                        <div class="wow fadeInUp">
                                            <div class="card-product bundle-hover-item pin2">
                                                <div class="card-product_wrapper d-flex">
                                                    <a href="product-detail.php" class="product-img">
                                                        <img class="lazyload img-product" src="images/products/decor/product-19.jpg"
                                                            data-src="images/products/decor/product-19.jpg" alt="Product">
                                                        <img class="lazyload img-hover" src="images/products/decor/product-20.jpg"
                                                            data-src="images/products/decor/product-20.jpg" alt="Product">
                                                    </a>
                                                    <ul class="product-action_list">
                                                        <li>
                                                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                                class="hover-tooltip tooltip-left box-icon">
                                                                <span class="icon icon-shopping-cart-simple"></span>
                                                                <span class="tooltip">Add to cart</span>
                                                            </a>
                                                        </li>
                                                        <li class="wishlist">
                                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                                <span class="icon icon-heart"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li class="compare">
                                                            <a href="#compare" data-bs-toggle="offcanvas"
                                                                class="hover-tooltip tooltip-left box-icon ">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Compare</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick view</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-product_info d-flex flex-column">
                                                    <a href="product-detail.php" class="name-product h4 link">Gnome Garden Statue</a>
                                                    <div class="price-wrap mb-0">
                                                        <span class="price-old h6 fw-normal">$99,99</span>
                                                        <span class="price-new h6">$59,99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-dot-default sw-pagination-lookbook"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Shop The Look -->
        <!-- Testimonial -->
        <section class="flat-spacing pt-0">
            <div class="tf-sw-thumbs tes_thumb">
                <div class="container">
                    <div class="s-banner-tes">
                        <div class="col-left">
                            <h1 class="s-title sect-title wow fadeInUp">Customer Reviews</h1>
                            <div dir="ltr" class="swiper sw-thumb sw-tes-thumb wow fadeInUp">
                                <div class="swiper-wrapper">
                                    <!-- item 1 -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-V03">
                                            <div class="tes_icon">
                                                <i class="icon icon-block-quote"></i>
                                            </div>
                                            <div class="d-grid">
                                                <h4 class="tes_title">Dedicated service</h4>
                                                <p class="tes_text h4">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit enim sit amet nisi
                                                    tincidunt,
                                                    in malesuada magna faucibus. Pellentesque eget finibus nunc. Aenean porta aliquam efficitur.
                                                </p>
                                                <div class="tes_author">
                                                    <p class="author-name h4">Guy Hawkins</p>
                                                    <i class="author-verified icon-check-circle"></i>
                                                </div>
                                                <div class="rate_wrap">
                                                    <i class="icon-star text-star"></i>
                                                    <i class="icon-star text-star"></i>
                                                    <i class="icon-star text-star"></i>
                                                    <i class="icon-star text-star"></i>
                                                    <i class="icon-star text-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item 2 -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-V03">
                                            <div class="tes_icon">
                                                <i class="icon icon-block-quote"></i>
                                            </div>
                                            <div class="d-grid">
                                                <h4 class="tes_title">Best Product Quality</h4>
                                                <p class="tes_text h4">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit enim sit amet nisi
                                                    tincidunt,
                                                    in malesuada magna faucibus. Pellentesque eget finibus nunc. Aenean porta aliquam efficitur.
                                                </p>
                                                <div class="tes_author">
                                                    <p class="author-name h4">Mas Shin</p>
                                                    <i class="author-verified icon-check-circle"></i>
                                                </div>
                                                <div class="rate_wrap">
                                                    <i class="icon-star text-star"></i>
                                                    <i class="icon-star text-star"></i>
                                                    <i class="icon-star text-star"></i>
                                                    <i class="icon-star text-star"></i>
                                                    <i class="icon-star text-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item 3 -->
                                </div>
                            </div>
                            <div class="group-btn-slider wow fadeInUp">
                                <div class="tf-sw-nav style-2 type-small  nav-prev-swiper">
                                    <i class="icon icon-caret-left"></i>
                                </div>
                                <div class="tf-sw-nav style-2 type-small nav-next-swiper">
                                    <i class="icon icon-caret-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-right">
                            <div class="s-image overflow-hidden">
                                <img class="ani-zoom lazyload" src="images/section/s-img-1.jpg" data-src="images/section/s-img-1.jpg" alt="">
                            </div>
                            <div dir="ltr" class="swiper sw-main-thumb sw-tes wow fadeInUp">
                                <div class="swiper-wrapper">
                                    <!-- item 1 -->
                                    <div class="swiper-slide">
                                        <div class="product-thumbs">
                                            <div class="image">
                                                <img class="lazyload" src="images/testimonial/thumb-1.jpg" data-src="images/testimonial/thumb-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="content">
                                                <a href="product-detail.php" class="link h4 name text-black">
                                                    Decorative Dried Flowers
                                                </a>
                                                <p class="h6 price text-black">$69,99</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- item 2 -->
                                    <div class="swiper-slide">
                                        <div class="product-thumbs">
                                            <div class="image">
                                                <img class="lazyload" src="images/testimonial/thumb-2.jpg" data-src="images/testimonial/thumb-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="content">
                                                <a href="product-detail.php" class="link h4 name text-black">
                                                    Decorative Dried Flowers
                                                </a>
                                                <p class="h6 price text-black">$69,99</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- item 3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
        <!-- Box Icon -->
        <div class="themesFlat">
            <div class="container">
                <div class="flat-spacing pt-0">
                    <span class="br-line d-flex"></span>
                </div>
                <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="97"
                    data-space-md="33" data-space="13" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="box-icon_V01 wow fadeInLeft">
                                <span class="icon">
                                    <i class="icon-package"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">30 days return</h4>
                                    <p class="text">30 day money back guarantee</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">

                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.1s">
                                <span class="icon">
                                    <i class="icon-calender"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">3 year warranty</h4>
                                    <p class="text">Manufacturer's defect</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">

                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.3s">
                                <span class="icon">
                                    <i class="icon-boat"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">Free shipping</h4>
                                    <p class="text">Free Shipping for orders over $150</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.4s">
                                <span class="icon">
                                    <i class="icon-headset"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">Online support</h4>
                                    <p class="text">24 hours a day, 7 days a week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </div>
        <!-- /Box Icon -->
        <!-- Blog -->
        <section class="flat-spacing">
            <div class="container">
                <div class="sect-title text-center wow fadeInUp">
                    <h1 class="s-title mb-8">Our Blog</h1>
                    <p class="s-subtitle h6">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div dir="ltr" class="swiper tf-swiper" data-preview="3" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="48"
                    data-space-md="32" data-space="12" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="3">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft" data-wow-delay="0.1s">
                                <a href="product.php" class="entry_image img-style4">
                                    <img src="images/blog/blog-8.jpg" data-src="images/blog/blog-8.jpg" alt="Blog" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="product.php" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="product.php" class="entry_name link h4">
                                        Recycle Home Decor Items
                                    </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna faucibus. Pellentesque eget finibus
                                        nunc.
                                    </p>
                                    <a href="product.php" class="tf-btn-line">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft" data-wow-delay="0.2s">
                                <a href="product.php" class="entry_image img-style4">
                                    <img src="images/blog/blog-9.jpg" data-src="images/blog/blog-9.jpg" alt="Blog" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="blog-grid.php" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="product.php" class="entry_name link h4">
                                        10 Unique Decorating Ideas With Vases
                                    </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna faucibus. Pellentesque eget finibus
                                        nunc.
                                    </p>
                                    <a href="product.php" class="tf-btn-line">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft" data-wow-delay="0.3s">
                                <a href="product.php" class="entry_image img-style4">
                                    <img src="images/blog/blog-10.jpg" data-src="images/blog/blog-10.jpg" alt="Blog" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="product.php" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="product.php" class="entry_name link h4">
                                        5 Natural Decorative Items
                                    </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna faucibus. Pellentesque eget finibus
                                        nunc.
                                    </p>
                                    <a href="product.php" class="tf-btn-line">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Blog -->
        <!-- Gallery -->
        <section class="themesFlat">
            <div class="container">
                <div class="sect-title text-center wow fadeInUp">
                    <h1 class="title mb-8">Shop Instagram</h1>
                    <p class="s-subtitle h6">Follow our Instagram channel to get a <span class="fw-bold">50% discount</span> on your first order.</p>
                </div>
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="5" data-tablet="4" data-mobile-sm="3" data-mobile="2"
                    data-space="0" data-pagination="2" data-pagination-sm="3" data-pagination-md="4" data-pagination-lg="5">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img class="lazyload" src="images/gallery/gallery-19.jpg" data-src="images/gallery/gallery-19.jpg" alt="">
                                </div>
                                <a href="product-detail.php" class="box-icon hover-tooltip">
                                    <span class="icon icon-instagram-logo"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img class="lazyload" src="images/gallery/gallery-20.jpg" data-src="images/gallery/gallery-20.jpg" alt="">
                                </div>
                                <a href="product-detail.php" class="box-icon hover-tooltip">
                                    <span class="icon icon-instagram-logo"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img class="lazyload" src="images/gallery/gallery-21.jpg" data-src="images/gallery/gallery-21.jpg" alt="">
                                </div>
                                <a href="product-detail.php" class="box-icon hover-tooltip">
                                    <span class="icon icon-instagram-logo"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img class="lazyload" src="images/gallery/gallery-22.jpg" data-src="images/gallery/gallery-22.jpg" alt="">
                                </div>
                                <a href="product-detail.php" class="box-icon hover-tooltip">
                                    <span class="icon icon-instagram-logo"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img class="lazyload" src="images/gallery/gallery-23.jpg" data-src="images/gallery/gallery-23.jpg" alt="">
                                </div>
                                <a href="product-detail.php" class="box-icon hover-tooltip">
                                    <span class="icon icon-instagram-logo"></span>
                                    <span class="tooltip">View product</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Gallery -->
       
    </div>

    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close-popup" data-bs-dismiss="offcanvas">
            <i class="icon-close"></i>
        </span>
        <div class="canvas-header">
            <p class="text-logo-mb">Ochaka.</p>
            <a href="login.php" class="tf-btn type-small style-2">
                Login
                <i class="icon icon-user"></i>
            </a>
            <span class="br-line"></span>
        </div>
        <div class="canvas-body">
            <div class="mb-content-top">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation"></ul>
            </div>
            <div class="group-btn">
                <a href="wishlist.php" class="tf-btn type-small style-2">
                    Wishlist
                    <i class="icon icon-heart"></i>
                </a>
                <div data-bs-dismiss="offcanvas">
                    <a href="#search" data-bs-toggle="modal" class="tf-btn type-small style-2">
                        Search
                        <i class="icon icon-magnifying-glass"></i>
                    </a>
                </div>
            </div>
            <div class="flow-us-wrap">
                <h5 class="title">Follow us on</h5>
                <ul class="tf-social-icon">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" class="social-facebook">
                            <span class="icon"><i class="icon-fb"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" class="social-instagram">
                            <span class="icon"><i class="icon-instagram-logo"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/" target="_blank" class="social-x">
                            <span class="icon"><i class="icon-x"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/" target="_blank" class="social-tiktok">
                            <span class="icon"><i class="icon-tiktok"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="payment-wrap">
                <h5 class="title">Payment:</h5>
                <ul class="payment-method-list">
                    <li><img src="images/payment/visa.png" alt="Payment"></li>
                    <li><img src="images/payment/master-card.png" alt="Payment"></li>
                    <li><img src="images/payment/amex.png" alt="Payment"></li>
                    <li><img src="images/payment/discover.png" alt="Payment"></li>
                    <li><img src="images/payment/paypal.png" alt="Payment"></li>
                </ul>
            </div>
        </div>
        <div class="canvas-footer">
            <div class="tf-currencies">
                <select class="tf-dropdown-select style-default type-currencies">
                    <option selected data-thumbnail="images/country/us.png">USD</option>
                    <option data-thumbnail="images/country/vie.png">VND</option>
                </select>
            </div>
            <span class="br-line"></span>
            <div class="tf-languages">
                <select class="tf-dropdown-select style-default type-languages">
                    <option>English</option>
                    <option>العربية</option>
                    <option>简体中文</option>
                    <option>اردو</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /Mobile Menu -->

    <!-- Toolbar -->
    <div class="tf-toolbar-bottom">
        <div class="toolbar-item">
            <a href="product.php">
                <span class="toolbar-icon">
                    <i class="icon icon-storefront"></i>
                </span>
                <span class="toolbar-label">Shop</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#search" data-bs-toggle="modal">
                <span class="toolbar-icon">
                    <i class="icon icon-magnifying-glass"></i>
                </span>
                <span class="toolbar-label">Search</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="account-page.php">
                <span class="toolbar-icon">
                    <i class="icon icon-user"></i>
                </span>
                <span class="toolbar-label">Account</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wishlist.php">
                <span class="toolbar-icon">
                    <i class="icon icon-heart"></i>
                    <span class="toolbar-count">7</span>
                </span>
                <span class="toolbar-label">Wishlist</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="view-cart.php">
                <span class="toolbar-icon">
                    <i class="icon icon-shopping-cart-simple"></i>
                    <span class="toolbar-count">24</span>
                </span>
                <span class="toolbar-label">Cart</span>
            </a>
        </div>
    </div>
    <!-- /Toolbar -->

    <!-- Size Guide -->
    <div class="modal modalCentered fade modal-size-guide" id="size-guide">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content widget-tabs style-2">
                <div class="header">
                    <ul class="widget-menu-tab">
                        <li class="item-title active">
                            <span class="inner h3">Size </span>
                        </li>
                        <li class="item-title">
                            <span class="inner h3">Size Guide</span>
                        </li>
                    </ul>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="widget-content-tab">
                        <div class="widget-content-inner active">
                            <div class="tab-size">
                                <div>
                                    <div class="widget-size mb-24">
                                        <div class="box-title-size">
                                            <div class="title-size h6 text-black">Height</div>
                                            <div class="number-size text-small">
                                                <span class="max-size">100</span>
                                                <span class="">Cm</span>
                                            </div>
                                        </div>
                                        <div class="range-input">
                                            <div class="tow-bar-block">
                                                <div class="progress-size" style="width: 50%;"></div>
                                            </div>
                                            <input type="range" min="0" max="200" value="100" class="range-max">
                                        </div>
                                    </div>
                                    <div class="widget-size">
                                        <div class="box-title-size">
                                            <div class="title-size h6 text-black">Weight</div>
                                            <div class="number-size text-small">
                                                <span class="max-size">50</span>
                                                <span class="">Kg</span>
                                            </div>
                                        </div>
                                        <div class="range-input">
                                            <div class="tow-bar-block">
                                                <div class="progress-size" style="width: 50%;"></div>
                                            </div>
                                            <input type="range" min="0" max="100" value="50" class="range-max">
                                        </div>
                                    </div>
                                </div>
                                <div class="size-button-wrap choose-option-list">
                                    <div class="size-button-item choose-option-item">
                                        <h6 class="text">Thin</h6>
                                    </div>
                                    <div class="size-button-item choose-option-item select-option">
                                        <h6 class="text">Normal</h6>
                                    </div>
                                    <div class="size-button-item choose-option-item">
                                        <h6 class="text">Plump</h6>
                                    </div>
                                </div>
                                <div class="suggests">
                                    <h4 class="">Suggests for you:</h4>
                                    <div class="suggests-list">
                                        <a href="#" class="suggests-item link h6">L - shirt</a>
                                        <a href="#" class="suggests-item link h6">XL - Pant</a>
                                        <a href="#" class="suggests-item link h6">31 - Jeans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner overflow-auto text-nowrap">
                            <table class="tab-sizeguide-table">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>US</th>
                                        <th>Bust</th>
                                        <th>Waist</th>
                                        <th>Low Hip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>XS</td>
                                        <td>2</td>
                                        <td>32</td>
                                        <td>24 - 25</td>
                                        <td>33 - 34</td>
                                    </tr>
                                    <tr>
                                        <td>S</td>
                                        <td>4</td>
                                        <td>26 - 27</td>
                                        <td>34 - 35</td>
                                        <td>35 - 26</td>
                                    </tr>
                                    <tr>
                                        <td>M</td>
                                        <td>6</td>
                                        <td>28 - 29</td>
                                        <td>36 - 37</td>
                                        <td>38 - 40</td>
                                    </tr>
                                    <tr>
                                        <td>L</td>
                                        <td>8</td>
                                        <td>30 - 31</td>
                                        <td>38 - 29</td>
                                        <td>42 - 44</td>
                                    </tr>
                                    <tr>
                                        <td>XL</td>
                                        <td>10</td>
                                        <td>32 - 33</td>
                                        <td>40 - 41</td>
                                        <td>45 - 47</td>
                                    </tr>
                                    <tr>
                                        <td>XXL</td>
                                        <td>12</td>
                                        <td>34 - 35</td>
                                        <td>42 - 43</td>
                                        <td>48 - 50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Size Guide -->
    <!-- Compare -->
    <div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
        <div class="canvas-wrapper">
            <div class="canvas-body">
                <div class="container">
                    <div class="tf-compare-list main-list-clear wrap-empty_text">
                        <div class="tf-compare-head">
                            <h4 class="title">Compare products</h4>
                        </div>
                        <div class="tf-compare-offcanvas list-empty">
                            <p class="box-text_empty h6 text-main">Your Compare is curently empty</p>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.php">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/decor/product-1.jpg"
                                        src="images/products/decor/product-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.php">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/decor/product-3.jpg"
                                        src="images/products/decor/product-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.php">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/decor/product-5.jpg"
                                        src="images/products/decor/product-5.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tf-compare-buttons">
                            <a href="view-cart.php" class="tf-btn animate-btn d-inline-flex bg-dark-2 justify-content-center">
                                Compare
                            </a>
                            <div class="tf-btn btn-white animate-btn animate-dark line clear-list-empty tf-compare-button-clear-all">
                                Clear All
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Compare -->
    <!-- Quick View -->
    <div class="modal modalCentered fade modal-quick-view" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content align-items-md-center">
                <i class="icon icon-close icon-close-popup" data-bs-dismiss="modal"></i>
                <div class="tf-product-media-wrap tf-btn-swiper-item">
                    <div dir="ltr" class="swiper tf-single-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-size="XS" data-color="beige">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/decor/product-1.jpg" src="images/products/decor/product-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="L" data-color="pink">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/decor/product-3.jpg" src="images/products/decor/product-3.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="M" data-color="green">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/decor/product-4.jpg" src="images/products/decor/product-4.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="S" data-color="blue">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/decor/product-5.jpg" src="images/products/decor/product-5.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-product-info-wrap">
                    <div class="tf-product-info-inner tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <a href="product-detail.php" class="link product-info-name fw-medium h1">
                                Casual Round Neck T-Shirt
                            </a>
                            <div class="product-info-meta">
                                <div class="rating">
                                    <div class="d-flex gap-4">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                    </div>
                                    <div class="reviews text-main">(3.671 review)</div>
                                </div>
                                <div class="people-add text-primary">
                                    <i class="icon icon-shopping-cart-simple"></i>
                                    <span class="h6">9 people just added this product to their cart</span>
                                </div>
                            </div>
                            <div class="product-info-price">
                                <div class="price-wrap">
                                    <span class="price-new price-on-sale h2">$ 14.99</span>
                                    <span class="price-old compare-at-price h6">$ 24.99</span>
                                    <p class="badges-on-sale h6 fw-semibold">
                                        <span class="number-sale" data-person-sale="29">
                                            -29 %
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <p class="product-infor-sub text-main h6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo dolor, consectetur vel metus vitae,
                                tincidunt finibus dui fusce tellus enim.
                            </p>
                        </div>
                        <div class="tf-product-total-quantity w-100">
                            <div class="group-btn">
                                <div class="wg-quantity">
                                    <button class="btn-quantity btn-decrease">
                                        <i class="icon icon-minus"></i>
                                    </button>
                                    <input class="quantity-product" type="text" name="number" value="1">
                                    <button class="btn-quantity btn-increase">
                                        <i class="icon icon-plus"></i>
                                    </button>
                                </div>
                                <p class="h6 d-none d-sm-block">
                                    15 products available
                                </p>
                                <button type="button" class="d-sm-none hover-tooltip box-icon btn-add-wishlist flex-sm-shrink-0">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </button>
                                <a href="#compare" data-bs-toggle="offcanvas" class="d-sm-none hover-tooltip tooltip-top box-icon flex-sm-shrink-0">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </div>
                            <div class="group-btn flex-sm-nowrap">
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn btn-add-to-cart">
                                    ADD TO CART
                                    <i class="icon icon-shopping-cart-simple"></i>
                                </a>
                                <button type="button" class="d-none d-sm-flex hover-tooltip box-icon btn-add-wishlist flex-sm-shrink-0">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </button>
                                <a href="#compare" data-bs-toggle="offcanvas"
                                    class="d-none d-sm-flex hover-tooltip tooltip-top box-icon flex-sm-shrink-0">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </div>
                            <div class="group-btn">
                                <a href="checkout.php" class="tf-btn btn-yellow w-100 animate-btn animate-dark">
                                    Pay with
                                    <span class="icon">
                                        <svg width="68" height="18" viewBox="0 0 68 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M45.7745 0H40.609C40.3052 0 40.0013 0.30254 39.8494 0.605081L37.7224 13.9169C37.7224 14.2194 37.8743 14.3707 38.1782 14.3707H40.9129C41.2167 14.3707 41.3687 14.2194 41.3687 13.9169L41.9764 10.1351C41.9764 9.83258 42.2802 9.53004 42.736 9.53004H44.4072C47.9015 9.53004 49.8766 7.86606 50.3323 4.53811C50.6362 3.17668 50.3323 1.96652 49.7246 1.21017C48.8131 0.453813 47.4457 0 45.7745 0ZM46.3822 4.99193C46.0784 6.80717 44.711 6.80717 43.3437 6.80717H42.4321L43.0399 3.32795C43.0399 3.17668 43.1918 3.02541 43.4956 3.02541H43.7995C44.7111 3.02541 45.6226 3.02541 46.0784 3.63049C46.3822 3.78176 46.3822 4.23558 46.3822 4.99193Z"
                                                fill="#139AD6" />
                                            <path
                                                d="M8.55188 0H3.38637C3.08251 0 2.77866 0.30254 2.62673 0.605081L0.499756 13.9169C0.499756 14.2194 0.651685 14.3707 0.955538 14.3707H3.38637C3.69022 14.3707 3.99407 14.0682 4.146 13.7656L4.75371 10.1351C4.75371 9.83258 5.05757 9.53004 5.51335 9.53004H7.18454C10.6789 9.53004 12.6539 7.86607 13.1097 4.53811C13.4135 3.17668 13.1097 1.96652 12.502 1.21017C11.5904 0.453813 10.375 0 8.55188 0ZM9.15959 4.99193C8.85574 6.80717 7.4884 6.80717 6.12105 6.80717H5.36142L5.96913 3.32795C5.96913 3.17668 6.12105 3.02541 6.42491 3.02541H6.72876C7.64032 3.02541 8.55188 3.02541 9.00766 3.63049C9.15959 3.78176 9.31152 4.23558 9.15959 4.99193ZM24.2004 4.84066H21.7695C21.6176 4.84066 21.3137 4.99193 21.3137 5.1432L21.1618 5.89955L21.0099 5.59701C20.4022 4.84066 19.3387 4.53811 18.1233 4.53811C15.3886 4.53811 12.9578 6.6559 12.502 9.53004C12.1981 11.0427 12.6539 12.4042 13.4135 13.3118C14.1732 14.2194 15.2367 14.522 16.604 14.522C18.8829 14.522 20.0983 13.1605 20.0983 13.1605L19.9464 13.9169C19.9464 14.2194 20.0983 14.3707 20.4022 14.3707H22.6811C22.9849 14.3707 23.2888 14.0682 23.4407 13.7656L24.8081 5.29447C24.6561 5.1432 24.3523 4.84066 24.2004 4.84066ZM20.706 9.68131C20.4022 11.0427 19.3387 12.1016 17.8194 12.1016C17.0598 12.1016 16.4521 11.7991 16.1482 11.4966C15.8444 11.0427 15.6924 10.4377 15.6924 9.68131C15.8444 8.31988 17.0598 7.26098 18.4271 7.26098C19.1868 7.26098 19.6425 7.56352 20.0983 7.86606C20.5541 8.31987 20.706 9.07623 20.706 9.68131Z"
                                                fill="#263B80" />
                                            <path
                                                d="M61.2699 4.8416H58.839C58.6871 4.8416 58.3833 4.99287 58.3833 5.14414L58.2313 5.9005L58.0794 5.59796C57.4717 4.8416 56.4082 4.53906 55.1928 4.53906C52.4581 4.53906 50.0273 6.65685 49.5715 9.53099C49.2676 11.0437 49.7234 12.4051 50.4831 13.3128C51.2427 14.2204 52.3062 14.5229 53.6735 14.5229C55.9524 14.5229 57.1678 13.1615 57.1678 13.1615L57.0159 13.9178C57.0159 14.2204 57.1678 14.3716 57.4717 14.3716H59.7506C60.0545 14.3716 60.3583 14.0691 60.5102 13.7666L61.8776 5.29541C61.7256 5.14414 61.5737 4.8416 61.2699 4.8416ZM57.7755 9.68226C57.4717 11.0437 56.4082 12.1026 54.8889 12.1026C54.1293 12.1026 53.5216 11.8 53.2177 11.4975C52.9139 11.0437 52.762 10.4386 52.762 9.68226C52.9139 8.32082 54.1293 7.26193 55.4966 7.26193C56.2563 7.26193 56.7121 7.56447 57.1678 7.86701C57.7755 8.32082 57.9275 9.07718 57.7755 9.68226Z"
                                                fill="#139AD6" />
                                            <path
                                                d="M37.4179 4.83984H34.8351C34.5312 4.83984 34.3793 4.99111 34.2274 5.14238L30.885 10.2856L29.3657 5.44493C29.2138 5.14238 29.0619 4.99111 28.6061 4.99111H26.1753C25.8714 4.99111 25.7195 5.29366 25.7195 5.5962L28.4542 13.6135L25.8714 17.244C25.7195 17.5466 25.8714 18.0004 26.1753 18.0004H28.6061C28.9099 18.0004 29.0619 17.8491 29.2138 17.6978L37.5698 5.74747C38.0256 5.29366 37.7217 4.83984 37.4179 4.83984Z"
                                                fill="#263B80" />
                                            <path
                                                d="M64.158 0.455636L62.031 14.07C62.031 14.3725 62.1829 14.5238 62.4868 14.5238H64.6138C64.9176 14.5238 65.2215 14.2212 65.3734 13.9187L67.5004 0.606904C67.5004 0.304363 67.3484 0.153094 67.0446 0.153094H64.6138C64.4618 0.00182346 64.3099 0.153095 64.158 0.455636Z"
                                                fill="#139AD6" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="group-btn justify-content-center">
                                <a href="#" class="tf-btn-line text-normal letter-space-0 fw-normal">
                                    More payment options
                                </a>
                            </div>
                        </div>
                        <a href="product-detail.php" class="tf-btn-line text-normal letter-space-0 fw-normal">
                            <span class="h5">View full details</span>
                            <i class="icon icon-arrow-top-right fs-24"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Quick View -->
    <!-- Search -->
    <div class="modal modalCentered fade modal-search" id="search">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                <div>
                    <form class="form-search style-2">
                        <fieldset>
                            <input type="text" placeholder="Search item" class="style-stroke" name="text" tabindex="0" value="" aria-required="true"
                                required="">
                        </fieldset>
                        <button type="submit" class="link"><i class="icon icon-magnifying-glass"></i></button>
                    </form>
                    <ul class="quick-link-list">
                        <li><a href="product.php" class="link-item text-main h6 link">Graphic tees</a></li>
                        <li><a href="product.php" class="link-item text-main h6 link">Plain t-shirts</a></li>
                        <li><a href="product.php" class="link-item text-main h6 link">Vintage t-shirts</a></li>
                        <li><a href="product.php" class="link-item text-main h6 link">Band tees</a></li>
                        <li><a href="product.php" class="link-item text-main h6 link">Custom t-shirts</a></li>
                        <li><a href="product.php" class="link-item text-main h6 link">Oversized t-shirts</a></li>
                        <li><a href="product.php" class="link-item text-main h6 link">Crew neck t-shirts</a></li>
                    </ul>
                </div>
                <div class="view-history-wrap">
                    <h4 class="title">History</h4>
                    <div class="view-history-list">
                        <a class="item text-main link h6" href="product.php">
                            <span>High Visibility T Shirt Short Sleeve Reflective</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="product.php">
                            <span>Short sleeve round neck t-shirt</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="product.php">
                            <span>Fashionable oversized hoodie for women</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="product.php">
                            <span>Queen fashion long sleeve shirt, basic t-shirt</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="product.php">
                            <span>Lee Women's Wrinkle Free Relaxed Fit Straight Leg Pant</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="product.php">
                            <span>Women's Summer Oversized T-Shirt Casual Office Fashion</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                    </div>
                </div>
                <div class="trend-product-wrap">
                    <div class="heading">
                        <h4 class="title flex-grow-1">Trending product</h4>
                        <a href="#" class="tf-btn-line has-icon none-line fw-medium fs-18 text-normal">
                            View All Product
                            <i class="icon icon-caret-circle-right"></i>
                        </a>
                    </div>
                    <div class="trend-product-inner">
                        <div class="trend-product-list">
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/decor/product-15.jpg" data-src="images/products/decor/product-15.jpg"
                                        alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">T-shirt</div>
                                    <h6 class="title">
                                        <a href="product-detail.php" class="link">Queen fashion long sleeve shirt, basic t-shirt</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/decor/product-17.jpg" data-src="images/products/decor/product-17.jpg"
                                        alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Hoodie</div>
                                    <h6 class="title">
                                        <a href="product-detail.php" class="link">Champion Reverse Weave Pullover</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$149.99</span>
                                        <span class="price-new h6">$109.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-product-list">
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/decor/product-19.jpg" data-src="images/products/decor/product-19.jpg"
                                        alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Shorts</div>
                                    <h6 class="title">
                                        <a href="product-detail.php" class="link">Columbia PFG Fishing Shirt</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$109.99</span>
                                        <span class="price-new h6">$74.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/decor/product-21.jpg" data-src="images/products/decor/product-21.jpg"
                                        alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Sweatshirt</div>
                                    <h6 class="title">
                                        <a href="product-detail.php" class="link">Puma Essentials Graphic Tee</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$69.99</span>
                                        <span class="price-new h6">$49.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Search -->
    <!-- Shopping Cart -->
    <div class="offcanvas offcanvas-end popup-shopping-cart" id="shoppingCart">
     
        <div class="canvas-wrapper">
            <div class="popup-header">
                <span class="title fw-semibold h4">Shopping cart</span>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-wrap list-file-delete wrap-empty_text">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items list-empty">
                                <div class="box-text_empty type-shop_cart">
                                    <div class="shop-empty_top">
                                        <span class="icon">
                                            <i class="icon-shopping-cart-simple"></i>
                                        </span>
                                        <h3 class="text-emp fw-normal">Your cart is empty</h3>
                                        <p class="h6 text-main">
                                            Your cart is currently empty. Let us assist you in finding the right product
                                        </p>
                                    </div>
                                    <div class="shop-empty_bot">
                                        <a href="product.php" class="tf-btn animate-btn">
                                            Shopping
                                        </a>
                                        <a href="index.php" class="tf-btn style-line">
                                            Back to home
                                        </a>
                                    </div>
                                </div>
                             
                             
                                    
                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom box-empty_clear">
                        <div class="tf-mini-cart-tool">
                            <div class="tf-mini-cart-tool-btn btn-add-note">
                                <div class="h6">Note</div>
                                <i class="icon icon-note-pencil"></i>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                <div class="h6">Shipping</div>
                                <i class="icon icon-truck"></i>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-gift">
                                <div class="h6">Gift</div>
                                <i class="icon icon-gift"></i>
                            </div>
                        </div>
                        <div class="tf-mini-cart-threshold">
                            <div class="text">
                                <h6 class="subtotal">Subtotal (<span class="prd-count">3</span> item)</h6>
                                <h4 class="text-primary total-price tf-totals-total-value">$60.00</h4>
                            </div>
                            <div class="tf-progress-bar tf-progress-ship">
                                <div class="value" style="width: 0%;" data-progress="25"></div>
                            </div>
                            <div class="desc text-main">Add <span class="text-primary fw-bold">$15.40</span> to cart and get free shipping!</div>
                        </div>
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-mini-cart-view-checkout">
                                <a href="view-cart.php" class="tf-btn btn-white animate-btn animate-dark line">View cart</a>
                                <a href="checkout.php" class="tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center"><span>Check
                                        out</span></a>
                            </div>
                            <div class="free-shipping">
                                <i class="icon icon-truck"></i>
                                Free shipping on all orders over $150
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-note">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <label for="Cart-note" class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-note-pencil"></i>
                                Note
                            </label>
                            <textarea name="note" id="Cart-note" placeholder="Note about your order"></textarea>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100" type="submit">Save</button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">Cancel</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable estimate-shipping">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form id="shipping-form" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-truck"></i>
                                Shipping
                            </div>
                            <div class="field">
                                <div class="tf-select">
                                    <select class="w-100" id="shipping-country-form" name="address[country]" data-default="">
                                        <option value="Australia"
                                            data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                                            Australia</option>
                                        <option value="Austria" data-provinces='[]'>Austria</option>
                                        <option value="Belgium" data-provinces='[]'>Belgium</option>
                                        <option value="Canada" data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>Canada
                                        </option>
                                        <option value="Czech Republic" data-provinces='[]'>Czechia</option>
                                        <option value="Denmark" data-provinces='[]'>Denmark</option>
                                        <option value="Finland" data-provinces='[]'>Finland</option>
                                        <option value="France" data-provinces='[]'>France</option>
                                        <option value="Germany" data-provinces='[]'>Germany</option>
                                        <option selected value="United States"
                                            data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                                            United States</option>
                                        <option value="United Kingdom"
                                            data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                                            United Kingdom</option>
                                        <option value="India" data-provinces='[]'>India</option>
                                        <option value="Japan" data-provinces='[]'>Japan</option>
                                        <option value="Mexico" data-provinces='[]'>Mexico</option>
                                        <option value="South Korea" data-provinces='[]'>South Korea</option>
                                        <option value="Spain" data-provinces='[]'>Spain</option>
                                        <option value="Italy" data-provinces='[]'>Italy</option>
                                        <option value="Vietnam"
                                            data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                                            Vietnam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="tf-select">
                                    <select id="shipping-province-form" name="address[province]" data-default=""></select>
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Postal code" data-opend-focus id="zipcode" name="address[zip]" value="">
                            </div>
                            <div id="zipcode-message" class="error" style="display: none;">
                                We found one shipping rate available for undefined.
                            </div>
                            <div id="zipcode-success" class="success" style="display: none;">
                                <p>We found one shipping rate available for your address:</p>
                                <p class="standard">Standard at <span>$0.00</span> USD</p>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100" type="submit">Save</button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">Cancel</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-gift">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-gift"></i>
                                Gift
                            </div>
                            <div class="wrap">
                                <i class="icon icon-gift-2"></i>
                                <h3>Only <span class="text-primary">$2</span> for a gift box</h3>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100" type="submit">Add a
                                    gift</button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">Cancel</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Shopping Cart -->

    <!-- Demo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h3 class="demo-title">Ultimate HTML Theme</h3>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>

                
            </div>
        </div>
    </div>
    <!-- /Demo -->
 <?php include 'includes/footer.php'; ?>
</body>
<!-- Mirrored from ochaka.vercel.app/home-decor.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 09:54:04 GMT -->
</html>