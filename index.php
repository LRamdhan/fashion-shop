<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fashion shop</title>
    <link rel="stylesheet" href="assets/css/landing.css?i=<?= uniqid(); ?>">
</head>
<body>
    <!-- container-start -->
    <div class="container">
        <!-- header-start -->
        <header class="shadow-on">
            <nav class="sosmed">
                <div class="circle-nav">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="circle-nav">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="circle-nav">
                    <i class="fa-brands fa-google-plus-g"></i>
                </div>
                <div class="circle-nav">
                    <i class="fa-brands fa-pinterest-p"></i>
                </div>
                <div class="circle-nav">
                    <i class="fa-brands fa-vimeo-v"></i>
                </div>
            </nav>

            <a href="#">
                <img class="logo" src="assets/img/icon/fashion.png" alt="something went wrong">
            </a>

            <nav class="navigasi">
                <div class="circle-nav">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="circle-nav">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="circle-nav">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </nav>

            <div class="hamberger show">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>

            <aside id="side-bar">
                <div class="exit">
                    <div class="circle-cross show">
                        <div class="cross">
                            <div class="line">
                                <div class="sub-line"></div>
                            </div>
                            <div class="line">
                                <div class="sub-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="nav-el">
                        <div class="click"></div>
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="nav-title">search</span>
                        <div class="arrow arrow-off"></div>
                        <div class="input-field search-off" id="input-field">
                            <div class="range"></div>
                            <input type="text" class="muncul">
                            <div class="btn-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="nav-el">
                        <i class="fa-solid fa-heart"></i>
                        <span class="nav-title">wish list</span>
                    </div>
                    <div class="separator"></div>
                    <div class="nav-el">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="nav-title">cart</span>
                    </div>
                    <div class="separator"></div>
                    <div class="nav-el">
                        <div class="click"></div>
                        <i class="fa-regular fa-icons"></i>
                        <span class="nav-title">category</span>
                        <div class="arrow arrow-off"></div>
                        <ul id="category-list" class="category-off">
                            <div class="range"></div>
                            <li><a href="#">men</a></li>
                            <li><a href="#">woman</a></li>
                            <li><a href="#">child</a></li>
                            <li><a href="#">uniform</a></li>
                        </ul>
                    </div>
                    <div class="separator"></div>
                    <div class="nav-el">
                        <i class="fa-solid fa-user"></i>
                        <span class="nav-title">account</span>
                    </div>
                </nav>
            </aside>
        </header>
        <!-- header-end -->

        <!-- intro-start -->
        <section class="intro">
            <div class="intro-left">
                <div class="model" id="slide">
                    <img src="assets/img/woman/raamin.png" alt="something went wrong" class="0" id="1">
                    <img src="assets/img/woman/ospan.png" alt="something went wrong" class="1" id="2">
                    <img src="assets/img/woman/rendy.png" alt="something went wrong" class="2" id="3">
                </div>
                <div class="m-scroll">
                    <div class="m-scroll-layer">
                        <div class="l-bullet" id="one"></div>
                        <div class="l-bullet" id="two"></div>
                        <div class="l-bullet" id="three"></div>
                    </div>
                    <div class="scroll-bullet">
                        <div class="bullet big-bullet"></div>
                        <div class="bullet normal-bullet"></div>
                        <div class="bullet normal-bullet"></div>
                    </div>
                </div>
            </div>
            <div class="title">
                <h3>meseum of fashion</h3>
                <h1>fashion <br> galery</h1>
                <h2>shop and save more</h2>
                <div class="btn">shop now</div>
            </div>
        </section>
        <!-- intro-end -->

        <!-- promo-start -->
        <section class="promo-grabber">
            <div class="promo">
                <div class="scroll-nav">&laquo;</div>
                <div class="promo-content" id="promo-product">
                    <div class="promo-product"></div>
                    <div class="promo-product">
                        <div class="wrap">
                            <img class="normal-img" src="assets/img/men/6.png" alt="" id="main-img">
                            <div class="price price-off" id="price">
                                <p>Save<br>30%</p>
                                <p>$76</p>
                            </div>
                        </div>
                    </div>
                    <div class="promo-product">
                        <div class="wrap">
                            <img class="big-img" src="assets/img/men/1.png" alt="" id="main-img">
                            <div class="price" id="price">
                                <p>Save<br>50%</p>
                                <p>$90</p>
                            </div>
                        </div>
                    </div>
                    <div class="promo-product">
                        <div class="wrap">
                            <img id="okelah" class="normal-img" src="assets/img/woman/10.png" alt="" id="main-img">
                            <div class="price price-off" id="price">
                                <p>Save<br>20%</p>
                                <p>$55</p>
                            </div>
                        </div>
                    </div>
                    <div class="promo-product">
                        <div class="wrap">
                            <img id="okelah" class="normal-img" src="assets/img/men/3.png" alt="" id="main-img">
                            <div class="price price-off" id="price">
                                <p>Save<br>70%</p>
                                <p>$99</p>
                            </div>
                        </div>
                    </div>
                    <div class="promo-product">
                        <div class="wrap">
                            <img id="okelah" class="normal-img" src="assets/img/woman/6.png" alt="" id="main-img">
                            <div class="price price-off" id="price">
                                <p>Save<br>45%</p>
                                <p>$79</p>
                            </div>
                        </div>
                    </div>
                    <div class="promo-product">
                        <div class="wrap">
                            <img id="okelah" class="normal-img" src="assets/img/woman/5.png" alt="" id="main-img">
                            <div class="price price-off" id="price">
                                <p>Save<br>10%</p>
                                <p>$93</p>
                            </div>
                        </div>
                    </div>
                    <div class="promo-product"></div>
                </div>
                <div class="scroll-nav">&raquo;</div>
            </div>
        </section>
        <!-- promo-end -->
    </div>
    <!-- container-end -->


    <script src="assets/js/main.js?i=<?= uniqid(); ?>" type="module"></script>
</body>
</html>