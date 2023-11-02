
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from caketheme.com/html/ruper/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2023 04:46:25 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Minimal | Ruper</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('media/favicon.png')}}">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/feather-font/css/iconfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/icomoon-font/css/icomoon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/wpbingofont/css/wpbingofont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/elegant-icons/css/elegant.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/slick/css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/slick/css/slick-theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/mmenu/css/mmenu.min.css') }}" type="text/css">


    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">


    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap" rel="stylesheet">
</head>

<body class="home home-5">
    <div id="page" class="hfeed page-wrapper">
        <header id="site-header" class="site-header header-v1 relative">
            @include('components.navBarHome')
        </header>

        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">
                        <section class="section section-padding m-b-60">
                            <div class="section-container">
                                <div class="block-widget-wrap">
                                    <!-- Block Sliders -->
                                    <div class="block block-sliders layout-5 nav-left auto-height">
                                        <div class="slick-sliders" data-autoplay="true" data-dots="true" data-nav="false" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1">
                                            <div class="item slick-slide">
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <div class="content">
                                                            <div class="content-wrap">
                                                                <h2 class="title-slider">Designed for Life<br> Made for you.</h2>
                                                                <a class="button-slider button-white" href="shop-grid-left.html">SHOP NOW</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-image">
                                                        <img width="700" height="785" src="media/slider/13.jpg" alt="Image Slider">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item slick-slide">
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <div class="content">
                                                            <div class="content-wrap">
                                                                <h2 class="title-slider">Lighting <br>Inspiration</h2>
                                                                <a class="button-slider button-white" href="shop-grid-left.html">SHOP NOW</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-image">
                                                        <img width="700" height="785" src="media/slider/14.jpg" alt="Image Slider">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item slick-slide">
                                                <div class="item-content">
                                                    <div class="item-info">
                                                        <div class="content">
                                                            <div class="content-wrap">
                                                                <h2 class="title-slider">Chair <br>Collection</h2>
                                                                <a class="button-slider button-white" href="shop-grid-left.html">SHOP NOW</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-image">
                                                        <img width="700" height="785" src="media/slider/15.jpg" alt="Image Slider">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding">
                            <div class="section-container">
                                <!-- Block Products -->
                                <div class="block block-products">
                                    <div class="block-widget-wrap">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#furniture" role="tab">Furniture</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#home-decor" role="tab">Home Décor</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#lighting" role="tab">Lighting</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#outdoor" role="tab">Outdoor</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="furniture" role="tabpanel">
                                                <div class="content-product-list slick-wrap">
                                                    <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-item_row="1" data-dots="0" data-nav="1" data-columns4="2" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/1-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Zunkel Schwarz</a></h3>
                                                                            <span class="price">$100.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Namaste Vase</a></h3>
                                                                            <span class="price">$200.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Chair Oak Matt Lacquered</a></h3>
                                                                            <span class="price">$150.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="onsale">-33%</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Pillar Dining Table Round</a></h3>
                                                                            <span class="price">
                                                                                <del aria-hidden="true"><span>$150.00</span></del>
                                                                                <ins><span>$100.00</span></ins>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="home-decor" role="tabpanel">
                                                <div class="content-product-list slick-wrap">
                                                    <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-item_row="1" data-dots="0" data-nav="1" data-columns4="2" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="onsale">-7%</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="product-stock">
                                                                            <span class="stock">Out Of Stock</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Amp Pendant Light Large</a></h3>
                                                                            <span class="price">
                                                                                <del aria-hidden="true"><span>$150.00</span></del>
                                                                                <ins><span>$140.00</span></ins>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Chair Oak Matt Lacquered</a></h3>
                                                                            <span class="price">$150.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Namaste Vase</a></h3>
                                                                            <span class="price">$200.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="onsale">-33%</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Pillar Dining Table Round</a></h3>
                                                                            <span class="price">
                                                                                <del aria-hidden="true"><span>$150.00</span></del>
                                                                                <ins><span>$100.00</span></ins>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="lighting" role="tabpanel">
                                                <div class="content-product-list slick-wrap">
                                                    <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-item_row="1" data-dots="0" data-nav="1" data-columns4="2" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="onsale">-33%</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Pillar Dining Table Round</a></h3>
                                                                            <span class="price">
                                                                                <del aria-hidden="true"><span>$150.00</span></del>
                                                                                <ins><span>$100.00</span></ins>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/1-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Zunkel Schwarz</a></h3>
                                                                            <span class="price">$100.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Namaste Vase</a></h3>
                                                                            <span class="price">$200.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Chair Oak Matt Lacquered</a></h3>
                                                                            <span class="price">$150.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="outdoor" role="tabpanel">
                                                <div class="content-product-list slick-wrap">
                                                    <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-item_row="1" data-dots="0" data-nav="1" data-columns4="2" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/1-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Zunkel Schwarz</a></h3>
                                                                            <span class="price">$100.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Chair Oak Matt Lacquered</a></h3>
                                                                            <span class="price">$150.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Namaste Vase</a></h3>
                                                                            <span class="price">$200.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="onsale">-33%</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href="shop-details.html">Pillar Dining Table Round</a></h3>
                                                                            <span class="price">
                                                                                <del aria-hidden="true"><span>$150.00</span></del>
                                                                                <ins><span>$100.00</span></ins>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding m-b-80">
                            <div class="section-container">
                                <!-- Block Banners (Layout 5) -->
                                <div class="block block-banners layout-5 banners-effect">
                                    <div class="block-widget-wrap">
                                        <div class="row">
                                            <div class="col-md-6 sm-m-b-50">
                                                <div class="block-widget-banner layout-7">
                                                    <div class="bg-banner">
                                                        <div class="banner-wrapper banners">
                                                            <div class="banner-image">
                                                                <a href="shop-grid-left.html">
                                                                    <img width="496" height="577" src="media/banner/banner-6.jpg" alt="Banner Image">
                                                                </a>
                                                            </div>
                                                            <div class="banner-wrapper-infor">
                                                                <div class="info">
                                                                    <div class="content">
                                                                        <a class="link-title" href="shop-grid-left.html">
                                                                            <h3 class="title-banner">For your personal<br> collection </h3>
                                                                        </a>
                                                                        <div class="banner-image-description">
                                                                            Sed lectus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus
                                                                        </div>
                                                                        <a class="button button-outline" href="shop-grid-left.html">SHOP NOW</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="block-widget-banner layout-7">
                                                    <div class="bg-banner">
                                                        <div class="banner-wrapper banners">
                                                            <div class="banner-image">
                                                                <a href="shop-grid-left.html">
                                                                    <img width="496" height="577" src="media/banner/banner-7.jpg" alt="Banner Image">
                                                                </a>
                                                            </div>
                                                            <div class="banner-wrapper-infor">
                                                                <div class="info">
                                                                    <div class="content">
                                                                        <a class="link-title" href="shop-grid-left.html">
                                                                            <h3 class="title-banner">Always by your side</h3>
                                                                        </a>
                                                                        <div class="banner-image-description">
                                                                            Make you bedroom your inner sanctuary.
                                                                        </div>
                                                                        <a class="button button-outline" href="shop-grid-left.html">SHOP NOW</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding m-b-70">
                            <div class="section-container">
                                <div class="block-widget-wrap">
                                    <!-- Block Lookbook -->
                                    <div class="block block-lookbook">
                                        <div class="lookbook-wrap default">
                                            <div class="lookbook-container">
                                                <div class="lookbook-content">
                                                    <div class="item">
                                                        <img width="869" height="702" src="media/banner/lookbook-4.jpg" alt="Look Book">
                                                        <div class="item-lookbook" style="height:30px;width:30px;left:29.55%;top:54.27%">
                                                            <span class="number-lookbook">1</span>
                                                            <div class="content-lookbook" style="left:33px; bottom:10px;">
                                                                <div class="item-thumb">
                                                                    <a href="shop-details.html">
                                                                        <img width="1000" height="1000" src="media/product/7.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="content-lookbook-bottom">
                                                                    <div class="item-title">
                                                                        <a href="shop-details.html">Pillar Dining Table Round</a>
                                                                    </div>
                                                                    <span class="price">
                                                                        <del aria-hidden="true"><span>$150.00</span></del>
                                                                        <ins><span>$100.00</span></ins>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-lookbook" style="height:30px;width:30px;left:53.69%;top:79.16%">
                                                            <span class="number-lookbook">2</span>
                                                            <div class="content-lookbook" style="right:33px; bottom:10px;">
                                                                <div class="item-thumb">
                                                                    <a href="shop-details.html">
                                                                        <img width="1000" height="1000" src="media/product/4.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="content-lookbook-bottom">
                                                                    <div class="item-title">
                                                                        <a href="shop-details.html">Mags Sofa 2.5 Seater</a>
                                                                    </div>
                                                                    <span class="price">$150.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding m-b-70">
                            <div class="section-container">
                                <!-- Block Products -->
                                <div class="block block-products slider">
                                    <div class="block-widget-wrap">
                                        <div class="block-title">
                                            <h2>New Products</h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="content-product-list slick-wrap">
                                                <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/1.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/1-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Zunkel Schwarz</a></h3>
                                                                        <span class="price">$100.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Namaste Vase</a></h3>
                                                                        <span class="price">$200.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Chair Oak Matt Lacquered</a></h3>
                                                                        <span class="price">$150.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="onsale">-33%</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Pillar Dining Table Round</a></h3>
                                                                        <span class="price">
                                                                            <del aria-hidden="true"><span>$150.00</span></del>
                                                                            <ins><span>$100.00</span></ins>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="onsale">-7%</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-stock">
                                                                        <span class="stock">Out Of Stock</span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Amp Pendant Light Large</a></h3>
                                                                        <span class="price">
                                                                            <del aria-hidden="true"><span>$150.00</span></del>
                                                                            <ins><span>$140.00</span></ins>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding background-1 p-t-70 p-b-80 m-b-0">
                            <div class="section-container">
                                <div class="block block-newsletter layout-2 one-col m-b-15">
                                    <div class="block-widget-wrap">
                                        <div class="newsletter-title-wrap">
                                            <h2 class="newsletter-title">Let's be friends</h2>
                                            <div class="newsletter-text">Sign up for the latest trends, products, and inspiration.</div>
                                        </div>
                                        <form action="#" method="post" class="newsletter-form">
                                            <input type="email" name="your-email" value="" size="40" placeholder="Email address">
                                            <span class="btn-submit">
                                                <input type="submit" value="SUBSCRIBE">
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding p-t-20 m-b-20">
                            <div class="section-container">
                                <!-- Block Image -->
                                <div class="block block-image slider">
                                    <div class="block-widget-wrap">
                                        <div class="slick-wrap">
                                            <div class="slick-sliders" data-nav="0" data-columns4="2" data-columns3="3" data-columns2="4" data-columns1="4" data-columns1440="5" data-columns="5">
                                                <div class="item slick-slide">
                                                    <div class="item-image">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/1.jpg" alt="Brand 1">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item slick-slide">
                                                    <div class="item-image">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/2.jpg" alt="Brand 2">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item slick-slide">
                                                    <div class="item-image">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/3.jpg" alt="Brand 3">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item slick-slide">
                                                    <div class="item-image">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/4.jpg" alt="Brand 4">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item slick-slide">
                                                    <div class="item-image">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/5.jpg" alt="Brand 5">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div><!-- #main-content -->
        </div>

        <footer id="site-footer" class="site-footer">
            <div class="footer">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="block-widget-wrap">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu m-b-20">
                                        <h2 class="block-title">Contact Us</h2>
                                        <div class="block-content">
                                            <ul>
                                                <li>
                                                    <a href="page-contact.html">616.774.0561</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact.html">866.453.4748</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact.html">HR Fax: 810.222.5439</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact.html">sales@ruperfurniture.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block block-social">
                                        <ul class="social-link">
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Showroom</h2>
                                        <div class="block-content">
                                            <p>1000 84th Street SW , Byron Center, MI 49315</p>
                                            <p>AmericasMart Bldg. #1</p>
                                            <p>Suite 5C-1, Atlanta, GA 30303</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Services</h2>
                                        <div class="block-content">
                                            <ul>
                                                <li>
                                                    <a href="page-about.html">Sale</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Quick Ship</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">New Designs</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Accidental Fabric Protection</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Furniture Care</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Gift Cards</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-newsletter">
                                        <h2 class="block-title">Newsletter</h2>
                                        <div class="block-content">
                                            <div class="newsletter-text">Enter your email below to be the first to know about new collections and product launches.</div>
                                            <form action="#" method="post" class="newsletter-form">
                                                <input type="email" name="your-email" value="" size="40" placeholder="Email address">
                                                <span class="btn-submit">
                                                    <input type="submit" value="Subscribe">
                                                </span>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="block block-image">
                                        <img width="309" height="32" src="media/payments.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="block-widget-wrap">
                            <p class="copyright text-center">Copyright © 2022. All Right Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back Top button -->
    <div class="back-top button-show">
        <i class="arrow_carrot-up"></i>
    </div>

    <!-- Search -->
    <div class="search-overlay">
        <div class="close-search"></div>
        <div class="wrapper-search">
            <form role="search" method="get" class="search-from ajax-search" action="#">
                <div class="search-box">
                    <button id="searchsubmit" class="btn" type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input id="myInput" type="text" autocomplete="off" value="" name="s" class="input-search s" placeholder="Search...">
                    <div class="search-top">
                        <div class="close-search">Cancel</div>
                    </div>
                    <div class="content-menu_search">
                        <label>Suggested</label>
                        <ul id="menu_search" class="menu">
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Home Décor</a></li>
                            <li><a href="#">Industrial</a></li>
                            <li><a href="#">Kitchen</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Wishlist -->
    <div class="wishlist-popup">
        <div class="wishlist-popup-inner">
            <div class="wishlist-popup-content">
                <div class="wishlist-popup-content-top">
                    <span class="wishlist-name">Wishlist</span>
                    <span class="wishlist-count-wrapper"><span class="wishlist-count">2</span></span>
                    <span class="wishlist-popup-close"></span>
                </div>
                <div class="wishlist-popup-content-mid">
                    <table class="wishlist-items">
                        <tbody>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="shop-details.html">
                                        <img width="600" height="600" src="media/product/3.jpg" alt="">
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="shop-details.html">Chair Oak Matt Lacquered</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <span>$150.00</span>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2022</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">
                                        In stock
                                    </div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#" class="button">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="shop-details.html">
                                        <img width="600" height="600" src="media/product/4.jpg" alt="">
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="shop-details.html">Pillar Dining Table Round</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <del aria-hidden="true"><span>$150.00</span></del>
                                        <ins><span>$100.00</span></ins>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2022</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">
                                        In stock
                                    </div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#" class="button">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wishlist-popup-content-bot">
                    <div class="wishlist-popup-content-bot-inner">
                        <a class="wishlist-page" href="shop-wishlist.html">
                            Open wishlist page
                        </a>
                        <span class="wishlist-continue" data-url="">
                            Continue shopping
                        </span>
                    </div>
                    <div class="wishlist-notice wishlist-notice-show">Added to the wishlist!</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Compare -->
    <div class="compare-popup">
        <div class="compare-popup-inner">
            <div class="compare-table">
                <div class="compare-table-inner">
                    <a href="#" id="compare-table-close" class="compare-table-close">
                        <span class="compare-table-close-icon"></span>
                    </a>
                    <div class="compare-table-items">
                        <table id="product-table" class="product-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="compare-table-settings">Settings</a>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Chair Oak Matt Lacquered</a> <span class="remove">remove</span>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Zunkel Schwarz</a> <span class="remove">remove</span>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Namaste Vase</a> <span class="remove">remove</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-image">
                                    <td class="td-label">Image</td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="media/product/3.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="media/product/1.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="media/product/2.jpg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="tr-sku">
                                    <td class="td-label">SKU</td>
                                    <td>VN00189</td>
                                    <td></td>
                                    <td>D1116</td>
                                </tr>
                                <tr class="tr-rating">
                                    <td class="td-label">Rating</td>
                                    <td>
                                        <div class="star-rating">
                                            <span style="width:80%"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="star-rating">
                                            <span style="width:100%"></span>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="tr-price">
                                    <td class="td-label">Price</td>
                                    <td><span class="amount">$150.00</span></td>
                                    <td><del><span class="amount">$150.00</span></del> <ins><span class="amount">$100.00</span></ins></td>
                                    <td><span class="amount">$200.00</span></td>
                                </tr>
                                <tr class="tr-add-to-cart">
                                    <td class="td-label">Add to cart</td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tr-description">
                                    <td class="td-label">Description</td>
                                    <td>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>
                                    <td>The EcoSmart Fleece Hoodie full-zip hooded jacket provides medium weight fleece comfort all year around. Feel better in this sweatshirt because Hanes keeps plastic bottles of landfills by using recycled polyester.7.8 ounce fleece sweatshirt made with up to 5 percent polyester created from recycled plastic.</td>
                                </tr>
                                <tr class="tr-content">
                                    <td class="td-label">Content</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                </tr>
                                <tr class="tr-dimensions">
                                    <td class="td-label">Dimensions</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quickview -->
    <div class="quickview-popup">
        <div id="quickview-container">
            <div class="quickview-container">
                <a href="#" class="quickview-close"></a>
                <div class="quickview-notices-wrapper"></div>
                <div class="product single-product product-type-simple">
                    <div class="product-detail">
                        <div class="row">
                            <div class="img-quickview">
                                <div class="product-images-slider">
                                    <div id="quickview-slick-carousel">
                                        <div class="images">
                                            <div class="scroll-image">
                                                <div class="slick-wrap">
                                                    <div class="slick-sliders image-additional" data-dots="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
                                                        <div class="img-thumbnail slick-slide">
                                                            <a href="media/product/3.jpg" class="image-scroll" title="">
                                                                <img width="900" height="900" src="media/product/3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="img-thumbnail slick-slide">
                                                            <a href="media/product/3-2.jpg" class="image-scroll" title="">
                                                                <img width="900" height="900" src="media/product/3-2.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quickview-single-info">
                                <div class="product-content-detail entry-summary">
                                    <h1 class="product-title entry-title">Chair Oak Matt Lacquered</h1>
                                    <div class="price-single">
                                        <div class="price">
                                            <del><span>$150.00</span></del>
                                            <span>$100.00</span>
                                        </div>
                                    </div>
                                    <div class="product-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                            <span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <a href="#" class="review-link">(<span class="count">1</span> customer review)</a>
                                    </div>
                                    <div class="description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore…</p>
                                    </div>
                                    <form class="cart" method="post" enctype="multipart/form-data">
                                        <div class="quantity-button">
                                            <div class="quantity">
                                                <button type="button" class="plus">+</button>
                                                <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                                <button type="button" class="minus">-</button>
                                            </div>
                                            <button type="submit" class="single-add-to-cart-button button alt">Add to cart</button>
                                        </div>
                                        <button class="button quick-buy">Buy It Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div class="page-preloader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Dependency Scripts -->
    <script src="libs/popper/js/popper.min.js"></script>
    <script src="libs/jquery/js/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/slick/js/slick.min.js"></script>
    <script src="libs/countdown/js/jquery.countdown.min.js"></script>
    <script src="libs/mmenu/js/jquery.mmenu.all.min.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from caketheme.com/html/ruper/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2023 04:46:26 GMT -->

</html>