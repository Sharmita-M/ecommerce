<?php include 'includes/header.php'; ?>

 <form action="admin/manage/manage-cart.php" method="POST">

        <!-- Page Title -->
        <section class="s-page-title">
            <div class="container">
                <div class="content">
                    <h1 class="title-page">Shop Filter Dropdown</h1>
                    <ul class="breadcrumbs-page">
                        <li><a href="index.html" class="h6 link">Home</a></li>
                        <li class="d-flex"><i class="icon icon-caret-right"></i></li>
                        <li>
                            <h6 class="current-page fw-normal">Shop</h6>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        <!-- Section Product -->
        <div class="flat-spacing">
            <div class="container">
                <div class="tf-shop-control">
                    <div class="tf-filter-dropdown">
                        <div class="tf-btn-filter border-0 px-0 min-w-unset">
                            <span class="icon icon-filter text-black"></span><span class="text text-black">Filter:</span>
                        </div>
                        <div class="meta-dropdown-filter">
                            <div class="dropup dropdown-filter">
                                <div class="dropdown-toggle" id="availability" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-auto-close="outside" role="button">
                                    <span class="text-value">Availability</span>
                                    <!-- <span class="icon icon-caret-down"></span> -->
                                </div>
                                <div class="dropdown-menu" aria-labelledby="availability">
                                    <ul class="filter-group-check">
                                        <li class="list-item">
                                            <input type="radio" name="availability" class="tf-check" id="inStock">
                                            <label for="inStock" class="label">
                                                <span>In Stock</span><span class="count">23</span>
                                            </label>
                                        </li>
                                        <li class="list-item disabled">
                                            <input type="radio" name="availability" class="tf-check" id="outStock">
                                            <label for="outStock" class="label">
                                                <span>Out of Stock</span><span class="count">34</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropup dropdown-filter">
                                <div class="dropdown-toggle" id="price" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                                    role="button">
                                    <span class="text-value">Price</span>
                                    <!-- <span class="icon icon-caret-down"></span> -->
                                </div>
                                <div class="dropdown-menu" aria-labelledby="price">
                                    <div class="widget-price filter-price">
                                        <div class="price-val-range" id="price-value-range" data-min="0" data-max="500"></div>
                                        <div class="box-value-price">
                                            <span class="h6 text-main">Price:</span>
                                            <div class="price-box">
                                                <div class="price-val" id="price-min-value" data-currency="$"></div>
                                                <span>-</span>
                                                <div class="price-val" id="price-max-value" data-currency="$"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropup dropdown-filter">
                                <div class="dropdown-toggle" id="color" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                                    role="button">
                                    <span class="text-value">Color</span>
                                    <!-- <span class="icon icon-caret-down"></span> -->
                                </div>
                                <div class="dropdown-menu" aria-labelledby="color">
                                    <div class="filter-color-box flat-check-list">
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-light-purple"></span>
                                            <span class="color-text">Purple</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-dark-charcoal"></span>
                                            <span class="color-text">Dark</span>
                                        </div>
                                        <div class="check-item color-item color-check line">
                                            <span class="color bg-dark-jade"></span>
                                            <span class="color-text">Green</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-light-beige"></span>
                                            <span class="color-text">Beige</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-sage-green"></span>
                                            <span class="color-text">Sage Green</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-tomato"></span>
                                            <span class="color-text">Light Orange</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-honey-orange"></span>
                                            <span class="color-text">Orange</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-dark-olive"></span>
                                            <span class="color-text">Dark Olive</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-hot-pink"></span>
                                            <span class="color-text">Pink</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-muted-violet"></span>
                                            <span class="color-text">Dark Violet</span>
                                        </div>
                                        <div class="check-item color-item color-check">
                                            <span class="color bg-dusty-olive"></span>
                                            <span class="color-text">Dusty Olive</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropup dropdown-filter">
                                <div class="dropdown-toggle" id="size" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                                    role="button">
                                    <span class="text-value">Size</span>
                                    <!-- <span class="icon icon-caret-down"></span> -->
                                </div>
                                <div class="dropdown-menu" aria-labelledby="size">
                                    <div class="filter-size-box flat-check-list">
                                        <div class="check-item size-item size-check"><span class="size h6">XS</span></div>
                                        <div class="check-item size-item size-check"><span class="size h6">S</span></div>
                                        <div class="check-item size-item size-check"><span class="size h6">L</span></div>
                                        <div class="check-item size-item size-check"><span class="size h6">M</span></div>
                                        <div class="check-item size-item size-check"><span class="size h6">XL</span></div>
                                        <div class="check-item size-item size-check"><span class="size h6">2XL</span></div>
                                        <div class="check-item size-item size-check over-size"><span class="size h6">Over size</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropup dropdown-filter">
                                <div class="dropdown-toggle" id="brand" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                                    role="button">
                                    <span class="text-value">Brand</span>
                                    <!-- <span class="icon icon-caret-down"></span> -->
                                </div>
                                <div class="dropdown-menu drop-menu-brand" aria-labelledby="brand">
                                    <ul class="filter-group-check">
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="automet">
                                            <label for="automet" class="label">AUTOMET</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="trendy-queen">
                                            <label for="trendy-queen" class="label">Trendy Queen</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="wiholl">
                                            <label for="wiholl" class="label">WIHOLL</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="real-essentials">
                                            <label for="real-essentials" class="label">Real Essentials</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="dokotoo">
                                            <label for="dokotoo" class="label">Dokotoo</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="hanes">
                                            <label for="hanes" class="label">Hanes</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="zeagoo">
                                            <label for="zeagoo" class="label">Zeagoo</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="shewin">
                                            <label for="shewin" class="label">SHEWIN</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="blooming-jelly">
                                            <label for="blooming-jelly" class="label">Blooming Jelly</label>
                                        </li>
                                        <li class="list-item">
                                            <input type="checkbox" name="brand" class="tf-check" id="fisoew">
                                            <label for="fisoew" class="label">Fisoew</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-shop-change">
                        <ul class="tf-control-layout">
                            <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                                <i class="icon-grid-2"></i>
                            </li>
                            <li class="tf-view-layout-switch sw-layout-3 d-none d-md-flex" data-value-layout="tf-col-3">
                                <i class="icon-grid-3"></i>
                            </li>
                            <li class="tf-view-layout-switch sw-layout-4 d-none d-xl-flex active" data-value-layout="tf-col-4">
                                <i class="icon-grid-4"></i>
                            </li>
                            <li class="tf-view-layout-switch sw-layout-5 d-none d-xxl-flex" data-value-layout="tf-col-5">
                                <i class="icon-grid-5"></i>
                            </li>
                            <li class="tf-view-layout-switch sw-layout-6 d-none d-xxl-flex" data-value-layout="tf-col-6">
                                <i class="icon-grid-6"></i>
                            </li>
                            <li class="br-line type-vertical"></li>
                            <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                                <i class="icon-list"></i>
                            </li>
                        </ul>
                        <div class="tf-control-sorting">
                            <p class="h6 d-none d-lg-block">Sort by:</p>
                            <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                <div class="btn-select">
                                    <span class="text-sort-value">Best Selling</span>
                                    <span class="icon icon-caret-down"></span>
                                </div>
                                <div class="dropdown-menu">
                                    <div class="select-item active remove-all-filters" data-sort-value="best-selling">
                                        <span class="text-value-item">Best Selling</span>
                                    </div>
                                    <div class="select-item" data-sort-value="a-z">
                                        <span class="text-value-item">Alphabetically, A-Z</span>
                                    </div>
                                    <div class="select-item" data-sort-value="z-a">
                                        <span class="text-value-item">Alphabetically, Z-A</span>
                                    </div>
                                    <div class="select-item" data-sort-value="price-low-high">
                                        <span class="text-value-item">Price, low to high</span>
                                    </div>
                                    <div class="select-item" data-sort-value="price-high-low">
                                        <span class="text-value-item">Price, high to low</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-control-shop gridLayout-wrapper">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters" style="display: none;"><i class="icon icon-close"></i> Clear all</button>
                    </div>
                    <div class="tf-list-layout wrapper-shop" id="listLayout" style="display: none;">
                        <!-- Product 1 -->
                        <div class="card-product product-style_list" data-availability="In stock" data-brand="automet">
                            <div class="card-product_wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" src="images/products/product-21.jpg" data-src="images/products/product-21.jpg"
                                        alt="Product">
                                    <img class=" lazyload img-hover" src="images/products/product-22.jpg" data-src="images/products/product-22.jpg"
                                        alt="Product">
                                </a>
                                <ul class="product-action_list">
                                    <li>
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
                                <div class="product-countdown">
                                    <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                </div>
                                <ul class="product-badge_list">
                                    <li class="product-badge_item h6 hot">Hot</li>
                                </ul>
                            </div>
                            <div class="card-product_info">
                                <div class="product-info_list">
                                    <a href="product-detail.html" class="name-product h3 link">Summer two piece set</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Dark</span>
                                            <span class="swatch-value bg-dark-charcoal"></span>
                                            <img src="images/products/product-21.jpg" data-src="images/products/product-21.jpg" alt="Product">

                                        </li>
                                    </ul>
                                    <div class="product-desc_list d-none d-sm-grid">
                                        <p class="product-desc">
                                            <span class="headline fw-bold">Contents:</span> Super soft and comfy fabric, skin-friendly and breathable.
                                            Womens
                                            tops dressy casual,
                                            round neck
                                            cute lightweight tops，loose fit basic tees
                                        </p>
                                        <p class="product-desc d-none d-md-block">
                                            <span class="headline fw-bold">Details:</span> Warm up or cool down with this essential 3/4 sleeve t
                                            shirts,
                                            featured
                                            in an loose fit
                                            and Pleated sleeve design with sew seaming front for a lived-in look.
                                        </p>
                                    </div>
                                </div>
                                <div class="product-action_list">
                                    <span class="h6">To buy, select <span class="fw-bold text-black">size</span></span>
                                    <div class="group-btn">
                                    
                                      
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn">
                                            Add to Cart
                                            <i class="icon icon-shopping-cart-simple"></i>
                                        </a>
                                        
                                        <a href="#" class="tf-btn style-line btn-add-wishlist2">
                                            <span class="text">Add to List</span>
                                            <i class="icon icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="card-product product-style_list" data-availability="Out of Stock" data-brand="hanes">
                            <div class="card-product_wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" src="images/products/product-33.jpg" data-src="images/products/product-33.jpg"
                                        alt="Product">
                                    <img class=" lazyload img-hover" src="images/products/product-34.jpg" data-src="images/products/product-34.jpg"
                                        alt="Product">
                                </a>
                                <ul class="product-action_list">
                                    <li>
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
                                <ul class="product-badge_list">
                                    <li class="product-badge_item flash-sale"><i class="icon icon-thunder"></i> Flash sale</li>
                                </ul>
                                <div class="product-marquee_sale">
                                    <div class="marquee-wrapper">
                                        <div class="initial-child-container">
                                            <!-- 1 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <!-- 2 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <!-- 3 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <!-- 4 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <!-- 5 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-product_info">
                                <div class="product-info_list">
                                    <a href="product-detail.html" class="name-product h3 link">Summer two piece set</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Dark</span>
                                            <span class="swatch-value bg-dark-charcoal"></span>
                                            <img src="images/products/product-33.jpg" data-src="images/products/product-33.jpg" alt="Product">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Beige</span>
                                            <span class="swatch-value bg-light-beige"></span>
                                            <img src="images/products/product-35.jpg" data-src="images/products/product-35.jpg" alt="Product">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Jade</span>
                                            <span class="swatch-value bg-dark-jade"></span>
                                            <img src="images/products/product-36.jpg" data-src="images/products/product-36.jpg" alt="Product">
                                        </li>
                                    </ul>
                                    <div class="product-desc_list d-none d-sm-grid">
                                        <p class="product-desc">
                                            <span class="headline fw-bold">Contents:</span> Super soft and comfy fabric, skin-friendly and breathable.
                                            Womens
                                            tops dressy casual,
                                            round neck
                                            cute lightweight tops，loose fit basic tees
                                        </p>
                                        <p class="product-desc d-none d-md-block">
                                            <span class="headline fw-bold">Details:</span> Warm up or cool down with this essential 3/4 sleeve t
                                            shirts,
                                            featured
                                            in an loose fit
                                            and Pleated sleeve design with sew seaming front for a lived-in look.
                                        </p>
                                    </div>
                                </div>
                                <div class="product-action_list">
                                    <span class="h6">To buy, select <span class="fw-bold text-black">size</span></span>
                                    <div class="group-btn">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn">
                                            Add to Cart
                                            <i class="icon icon-shopping-cart-simple"></i>
                                        </a>
                                        <a href="#" class="tf-btn style-line btn-add-wishlist2">
                                            <span class="text">Add to List</span>
                                            <i class="icon icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="card-product product-style_list" data-availability="In stock" data-brand="trendy-queen">
                            <div class="card-product_wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" src="images/products/product-37.jpg" data-src="images/products/product-37.jpg"
                                        alt="Product">
                                    <img class=" lazyload img-hover" src="images/products/product-38.jpg" data-src="images/products/product-38.jpg"
                                        alt="Product">
                                </a>
                                <ul class="product-action_list">
                                    <li>
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
                                <div class="product-marquee_sale">
                                    <div class="marquee-wrapper">
                                        <div class="initial-child-container">
                                            <!-- 1 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <!-- 2 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <!-- 3 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <!-- 4 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <!-- 5 -->
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                            <div class="marquee-child-item">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                            fill="#FEBD55" />
                                                        <path
                                                            d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                            fill="#FC9E20" />
                                                        <path
                                                            d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                            fill="#E03E3E" />
                                                        <path
                                                            d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                            fill="#FBFBFB" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="marquee-child-item">
                                                <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-product_info">
                                <div class="product-info_list">
                                    <a href="product-detail.html" class="name-product h3 link">Women's straight leg pants</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$29,99</span>
                                        <span class="price-new h6">$14,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img src="images/products/product-37.jpg" data-src="images/products/product-37.jpg" alt="Product">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Pink</span>
                                            <span class="swatch-value bg-hot-pink"></span>
                                            <img src="images/products/product-39.jpg" data-src="images/products/product-39.jpg" alt="Product">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot ">
                                            <span class="tooltip color-filter">Beige</span>
                                            <span class="swatch-value bg-light-beige"></span>
                                            <img src="images/products/product-40.jpg" data-src="images/products/product-40.jpg" alt="Product">
                                        </li>
                                    </ul>
                                    <div class="product-desc_list d-none d-sm-grid">
                                        <p class="product-desc">
                                            <span class="headline fw-bold">Contents:</span> Super soft and comfy fabric, skin-friendly and breathable.
                                            Womens
                                            tops dressy casual,
                                            round neck
                                            cute lightweight tops，loose fit basic tees
                                        </p>
                                        <p class="product-desc d-none d-md-block">
                                            <span class="headline fw-bold">Details:</span> Warm up or cool down with this essential 3/4 sleeve t
                                            shirts,
                                            featured
                                            in an loose fit
                                            and Pleated sleeve design with sew seaming front for a lived-in look.
                                        </p>
                                    </div>
                                </div>
                                <div class="product-action_list">
                                    <span class="h6">To buy, select <span class="fw-bold text-black">size</span></span>
                                    <div class="group-btn">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn">
                                            Add to Cart
                                            <i class="icon icon-shopping-cart-simple"></i>
                                        </a>
                                        <a href="#" class="tf-btn style-line btn-add-wishlist2">
                                            <span class="text">Add to List</span>
                                            <i class="icon icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="card-product product-style_list" data-availability="In stock" data-brand="automet">
                            <div class="card-product_wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" src="images/products/product-41.jpg" data-src="images/products/product-41.jpg"
                                        alt="Product">
                                    <img class=" lazyload img-hover" src="images/products/product-42.jpg" data-src="images/products/product-42.jpg"
                                        alt="Product">
                                </a>
                                <ul class="product-action_list">
                                    <li>
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
                                <div class="product-countdown">
                                    <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                </div>
                                <ul class="product-badge_list">
                                    <li class="product-badge_item h6 hot">Hot</li>
                                </ul>
                            </div>
                            <div class="card-product_info">
                                <div class="product-info_list">
                                    <a href="product-detail.html" class="name-product h3 link">Short sleeve office shirt</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Beige</span>
                                            <span class="swatch-value bg-light-beige"></span>
                                            <img class=" lazyload" src="images/products/product-41.jpg" data-src="images/products/product-41.jpg"
                                                alt="Product">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Black</span>
                                            <span class="swatch-value bg-black"></span>
                                            <img class=" lazyload" src="images/products/product-43.jpg" data-src="images/products/product-43.jpg"
                                                alt="Product">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Violet</span>
                                            <span class="swatch-value bg-muted-violet"></span>
                                            <img class=" lazyload" src="images/products/product-44.jpg" data-src="images/products/product-44.jpg"
                                                alt="Product">
                                        </li>
                                    </ul>
                                    <div class="product-desc_list d-none d-sm-grid">
                                        <p class="product-desc">
                                            <span class="headline fw-bold">Contents:</span> Super soft and comfy fabric, skin-friendly and breathable.
                                            Womens
                                            tops dressy casual,
                                            round neck
                                            cute lightweight tops，loose fit basic tees
                                        </p>
                                        <p class="product-desc d-none d-md-block">
                                            <span class="headline fw-bold">Details:</span> Warm up or cool down with this essential 3/4 sleeve t
                                            shirts,
                                            featured
                                            in an loose fit
                                            and Pleated sleeve design with sew seaming front for a lived-in look.
                                        </p>
                                    </div>
                                </div>
                                <div class="product-action_list">
                                    <span class="h6">To buy, select <span class="fw-bold text-black">size</span></span>
                                    <div class="group-btn">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn">
                                            Add to Cart
                                            <i class="icon icon-shopping-cart-simple"></i>
                                        </a>
                                        <a href="#" class="tf-btn style-line btn-add-wishlist2">
                                            <span class="text">Add to List</span>
                                            <i class="icon icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="card-product product-style_list" data-availability="In stock" data-brand="fisoew">
                            <div class="card-product_wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" src="images/products/product-45.jpg" data-src="images/products/product-45.jpg"
                                        alt="Product">
                                    <img class=" lazyload img-hover" src="images/products/product-46.jpg" data-src="images/products/product-46.jpg"
                                        alt="Product">
                                </a>
                                <ul class="product-action_list">
                                    <li>
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
                                <div class="product-info_list">
                                    <a href="product-detail.html" class="name-product h3 link">Loose V-neck T-shirt</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img class=" lazyload" src="images/products/product-45.jpg" data-src="images/products/product-45.jpg"
                                                alt="Product">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Black</span>
                                            <span class="swatch-value bg-black"></span>
                                            <img class=" lazyload" src="images/products/product-43.jpg" data-src="images/products/product-43.jpg"
                                                alt="Product">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Violet</span>
                                            <span class="swatch-value bg-muted-violet"></span>
                                            <img class=" lazyload" src="images/products/product-44.jpg" data-src="images/products/product-44.jpg"
                                                alt="Product">
                                        </li>
                                    </ul>
                                    <div class="product-desc_list d-none d-sm-grid">
                                        <p class="product-desc">
                                            <span class="headline fw-bold">Contents:</span> Super soft and comfy fabric, skin-friendly and breathable.
                                            Womens
                                            tops dressy casual,
                                            round neck
                                            cute lightweight tops，loose fit basic tees
                                        </p>
                                        <p class="product-desc d-none d-md-block">
                                            <span class="headline fw-bold">Details:</span> Warm up or cool down with this essential 3/4 sleeve t
                                            shirts,
                                            featured
                                            in an loose fit
                                            and Pleated sleeve design with sew seaming front for a lived-in look.
                                        </p>
                                    </div>
                                </div>
                                <div class="product-action_list">
                                    <span class="h6">To buy, select <span class="fw-bold text-black">size</span></span>
                                    <div class="group-btn">
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn">
                                            Add to Cart
                                            <i class="icon icon-shopping-cart-simple"></i>
                                        </a>
                                        <a href="#" class="tf-btn style-line btn-add-wishlist2">
                                            <span class="text">Add to List</span>
                                            <i class="icon icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
               
                        <!-- Pagination -->
                        <div class="wd-full wg-pagination">
                            <a href="#" class="pagination-item h6 direct"><i class="icon icon-caret-left"></i></a>
                            <a href="#" class="pagination-item h6">1</a>
                            <span class="pagination-item h6 active">2</span>
                            <a href="#" class="pagination-item h6">3</a>
                            <a href="#" class="pagination-item h6">4</a>
                            <a href="#" class="pagination-item h6">5</a>
                            <a href="#" class="pagination-item h6 direct"><i class="icon icon-caret-right"></i></a>
                        </div>
                    </div>

                    <div class="wrapper-shop tf-grid-layout tf-col-4" id="gridLayout">
                        <!-- Product 1 -->
                       
                
                             <?php
                                    $product = $db->query("SELECT * FROM `product` ");
                                    while ($row = $product->fetch_object()) {
                                    ?>
                        <div class="card-product grid" data-availability="In stock" data-brand="fisoew">
                            <div class="card-product_wrapper">
                                <a href="product-detail.php" class="product-img">
                                    <img class="lazyload img-product" src="admin/uploads/products/<?= $row->product_image;?>" data-src="admin/uploads/products/<?= $row->product_image;?>"
                                        alt="Product">
                                    <img class="lazyload img-hover" src="admin/uploads/products/<?= $row->product_image;?>" data-src="admin/uploads/products/<?= $row->product_image;?>"
                                        alt="Product">
                                </a>
                                <ul class="product-action_list">
                                
                                    <li>
                                       <a href="admin/manage/manage-cart.php?action=submit&id=<?= $row->id; ?>" class="hover-tooltip tooltip-left box-icon">
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
                                    <li>
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
                                <ul class="product-badge_list">
                                    <li class="product-badge_item h6 hot">Hot</li>
                                </ul>
                                <div class="product-countdown">
                                    <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                </div>
                            </div>
                            <div class="card-product_info">
                                <a href="product-detail.html" class="name-product h4 link"><?= $row->product_name;?></a>
                                <div class="price-wrap">
                                    <span class="price-old h6 fw-normal">₹<?= $row->product_market_price;?></span>
                                    <span class="price-new h6">₹<?= $row->product_selling_price;?></span>
                                </div>
                                <ul class="product-color_list">
                                    <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                        <span class="tooltip color-filter">Beige</span>
                                        <span class="swatch-value bg-light-beige"></span>
                                        <img class="lazyload" src="admin/uploads/products/<?= $row->product_image;?>" data-src="admin/uploads/products/<?= $row->product_image;?>"
                                            alt="Product">
                                    </li>
                                    <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                        <span class="tooltip color-filter">Dark</span>
                                        <span class="swatch-value bg-dark-charcoal"></span>
                                        <img class="lazyload" src="images/products/product-25.jpg" data-src="images/products/product-25.jpg"
                                            alt="Product">

                                    </li>
                                    <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                        <span class="tooltip color-filter">Sage Green</span>
                                        <span class="swatch-value bg-sage-green"></span>
                                        <img class="lazyload" src="images/products/product-26.jpg" data-src="images/products/product-26.jpg"
                                            alt="Product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                       
                        <!-- Pagination -->
                        <div class="wd-full wg-pagination m-0 justify-content-center">
                            <a href="#" class="pagination-item h6 direct"><i class="icon icon-caret-left"></i></a>
                            <a href="#" class="pagination-item h6">1</a>
                            <span class="pagination-item h6 active">2</span>
                            <a href="#" class="pagination-item h6">3</a>
                            <a href="#" class="pagination-item h6">4</a>
                            <a href="#" class="pagination-item h6">5</a>
                            <a href="#" class="pagination-item h6 direct"><i class="icon icon-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Section Product -->
        
    </div>
    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close-popup" data-bs-dismiss="offcanvas">
            <i class="icon-close"></i>
        </span>
        <div class="canvas-header">
            <p class="text-logo-mb">Ochaka.</p>
            <a href="login.html" class="tf-btn type-small style-2">
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
                <a href="wishlist.html" class="tf-btn type-small style-2">
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
            <a href="shop-default.html">
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
            <a href="account-page.html">
                <span class="toolbar-icon">
                    <i class="icon icon-user"></i>
                </span>
                <span class="toolbar-label">Account</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wishlist.html">
                <span class="toolbar-icon">
                    <i class="icon icon-heart"></i>
                    <span class="toolbar-count">7</span>
                </span>
                <span class="toolbar-label">Wishlist</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="view-cart.html">
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
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/product-1.jpg" src="images/products/product-1.jpg"
                                        alt="">
                                </a>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/product-5.jpg" src="images/products/product-5.jpg"
                                        alt="">
                                </a>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/product-7.jpg" src="images/products/product-7.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tf-compare-buttons">
                            <a href="compare.html" class="tf-btn animate-btn d-inline-flex bg-dark-2 justify-content-center">
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
            <div class="modal-content">
                <i class="icon icon-close icon-close-popup" data-bs-dismiss="modal"></i>
                <div class="tf-product-media-wrap tf-btn-swiper-item">
                    <div dir="ltr" class="swiper tf-single-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-size="XS" data-color="beige">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-9.jpg" src="images/products/product-9.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="L" data-color="pink">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-39.jpg" src="images/products/product-39.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="M" data-color="green">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-1.jpg" src="images/products/product-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="S" data-color="blue">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-4.jpg" src="images/products/product-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="L" data-color="black">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-47.jpg" src="images/products/product-47.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-product-info-wrap">
                    <div class="tf-product-info-inner tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <a href="product-detail.html" class="link product-info-name fw-medium h1">
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
                        <div class="tf-product-variant w-100">
                            <div class="variant-picker-item variant-size">
                                <div class="variant-picker-label">
                                    <div class="h4 fw-semibold">
                                        Size
                                        <span class="variant-picker-label-value value-currentSize">medium</span>
                                    </div>
                                    <a href="#size-guide" data-bs-toggle="modal" class="size-guide link h6 fw-medium">
                                        <i class="icon icon-ruler"></i>
                                        Size Guide
                                    </a>
                                </div>
                                <div class="variant-picker-values">
                                    <span class="size-btn active" data-size="XS">XS</span>
                                    <span class="size-btn" data-size="S">S</span>
                                    <span class="size-btn" data-size="M">M</span>
                                    <span class="size-btn" data-size="L">L</span>
                                </div>
                            </div>
                            <div class="variant-picker-item variant-color">
                                <div class="variant-picker-label">
                                    <div class="h4 fw-semibold">
                                        Colors
                                        <span class="variant-picker-label-value value-currentColor">orange</span>
                                    </div>
                                </div>
                                <div class="variant-picker-values">
                                    <div class="hover-tooltip tooltip-bot color-btn active" data-color="beige">
                                        <span class="check-color bg-light-beige"></span>
                                        <span class="tooltip">Beige</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="pink">
                                        <span class="check-color bg-hot-pink"></span>
                                        <span class="tooltip">Pink</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="green">
                                        <span class="check-color bg-sage-green"></span>
                                        <span class="tooltip">Green</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="blue">
                                        <span class="check-color bg-baby-blue"></span>
                                        <span class="tooltip">Blue</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="black">
                                        <span class="check-color bg-dark-charcoal"></span>
                                        <span class="tooltip">Dark</span>
                                    </div>
                                </div>
                            </div>
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
                                <a href="checkout.html" class="tf-btn btn-yellow w-100 animate-btn animate-dark">
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
                        <a href="product-detail.html" class="tf-btn-line text-normal letter-space-0 fw-normal">
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
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Graphic tees</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Plain t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Vintage t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Band tees</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Custom t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Oversized t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Crew neck t-shirts</a></li>
                    </ul>
                </div>
                <div class="view-history-wrap">
                    <h4 class="title">History</h4>
                    <div class="view-history-list">
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>High Visibility T Shirt Short Sleeve Reflective</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Short sleeve round neck t-shirt</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Fashionable oversized hoodie for women</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Queen fashion long sleeve shirt, basic t-shirt</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Lee Women's Wrinkle Free Relaxed Fit Straight Leg Pant</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
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
                                    <img class="lazyload" src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">T-shirt</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Queen fashion long sleeve shirt, basic t-shirt</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/product-7.jpg" data-src="images/products/product-7.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Hoodie</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Champion Reverse Weave Pullover</a>
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
                                    <img class="lazyload" src="images/products/product-5.jpg" data-src="images/products/product-5.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Shorts</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Columbia PFG Fishing Shirt</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$109.99</span>
                                        <span class="price-new h6">$74.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/product-9.jpg" data-src="images/products/product-9.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Sweatshirt</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Puma Essentials Graphic Tee</a>
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
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html" class="demo-img"><img src="images/demo/home-fashion-1.jpg" alt="Demo"></a>
                            <a href="index.html" class="demo-name">Home Fashion 1</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-2.html" class="demo-img"><img src="images/demo/home-fashion-2.jpg" alt="Demo"></a>
                            <a href="home-fashion-2.html" class="demo-name">Home Fashion 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-3.html" class="demo-img"><img src="images/demo/home-fashion-3.jpg" alt="Demo"></a>
                            <a href="home-fashion-3.html" class="demo-name">Home Fashion 3</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-4.html" class="demo-img"><img src="images/demo/home-fashion-4.jpg" alt="Demo"></a>
                            <a href="home-fashion-4.html" class="demo-name">Home Fashion 4</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-cosmetic.html" class="demo-img"><img src="images/demo/home-cosmetic.jpg" alt="Demo"></a>
                            <a href="home-cosmetic.html" class="demo-name">Home Cosmetic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skin-care.html" class="demo-img"><img src="images/demo/home-skin-care.jpg" alt="Demo"></a>
                            <a href="home-skin-care.html" class="demo-name">Home Skincare</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-decor.html" class="demo-img"><img src="images/demo/home-decor.jpg" alt="Demo"></a>
                            <a href="home-decor.html" class="demo-name">Home Decor</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry.html" class="demo-img"><img src="images/demo/home-jewelry.jpg" alt="Demo"></a>
                            <a href="home-jewelry.html" class="demo-name">Home Jewelry</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic-market.html" class="demo-img"><img src="images/demo/home-electronic-market.jpg" alt="Demo"></a>
                            <a href="home-electronic-market.html" class="demo-name">Home
                                Electric Market</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-store.html" class="demo-img"><img src="images/demo/home-pet-store.jpg" alt="Demo"></a>
                            <a href="home-pet-store.html" class="demo-name">Home Pet Store</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sneaker.html" class="demo-img"><img src="images/demo/home-sneaker.jpg" alt="Demo"></a>
                            <a href="home-sneaker.html" class="demo-name">Home Sneaker</a>
                        </div>
                        <!-- New -->
                        <div class="demo-item">
                            <a href="home-book.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-book.jpg" data-src="images/demo/home-book.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-book.html" class="demo-name link">Home Book</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-organic.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-organic.jpg" data-src="images/demo/home-organic.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-organic.html" class="demo-name link">Home Organic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-medical.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-medical.jpg" data-src="images/demo/home-medical.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-medical.html" class="demo-name link">Home Medical</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-gym.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-gym.jpg" data-src="images/demo/home-gym.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-gym.html" class="demo-name link">Home Gym</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-art.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-art.jpg" data-src="images/demo/home-art.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-art.html" class="demo-name link">Home Art</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-accessories.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-accessories.jpg" data-src="images/demo/home-accessories.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-accessories.html" class="demo-name link">Home Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-car-auto.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-car-auto.jpg" data-src="images/demo/home-car-auto.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-car-auto.html" class="demo-name link">Home Car Auto</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-travel.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-travel.jpg" data-src="images/demo/home-travel.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-travel.html" class="demo-name link">Home Travel</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-watch.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-watch.jpg" data-src="images/demo/home-watch.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-watch.html" class="demo-name link">Home Watch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Demo -->
     </form>

     <?php include 'includes/footer.php'; ?>

</body>


<!-- Mirrored from ochaka.vercel.app/shop-filter-dropdown.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 09:56:17 GMT -->
</html>