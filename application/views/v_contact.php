    </head>
    <body class="loading-overlay-showing" data-loading-overlay>
        <div class="loading-overlay">
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <div class="body">
            <header id="header" class="header-full-width transparent-header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 78, 'stickySetTop': '0'}">
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="demo-photography-2.html">
                                        <img alt="Porto" width="150" height="39" src="<?php echo base_url('public/images/logo-photography-2.png')?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php $this->load->view('template/menu') ?>
                        </div>
                    </div>
                </div>
            </header>

            <div role="main" class="main full-height initial-height" id="main">


                <section class="section section-title section-text-light section-background section-center mb-0" style="background-image: url(<?php echo base_url('public/images/custom-header-bg.jpg')?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="font-weight-normal custom-font-size-2 m-0 pb-2">Contact Us</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div id="googlemaps" class="google-map m-0" style="height: 425px;"></div>

                <section class="section section-quaternary contact-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="feature-box feature-box-style-2 text-center flex-wrap justify-content-center">
                                    <div class="feature-box-icon pb-4">
                                        <i class="icon-location-pin icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-normal text-color-light text-5">Our Studio</h4>
                                        <p>1234 Street, City Name, United States</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-box feature-box-style-2 text-center flex-wrap justify-content-center">
                                    <div class="feature-box-icon pb-4">
                                        <i class="icon-phone icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-normal text-color-light text-5">Call Us</h4>
                                        <p>(123) 456-789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-box feature-box-style-2 text-center flex-wrap justify-content-center">
                                    <div class="feature-box-icon pb-4">
                                        <i class="icon-share icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-normal text-color-light text-5">Follow Us</h4>
                                        <p><a href="http://www.facebook.com">Facebook</a> <span class="visible-block pl-2 pr-2">/</span> <a href="http://www.instagram.com">Instagram</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="p-0 m-0">
                    <div class="container-fluid p-0">
                        <div class="owl-carousel owl-theme m-0" data-plugin-options="{'items': 6, 'loop': true, 'dots': false, 'nav': false, 'autoplay': true, 'autoplayTimeout': 3000}">
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/travel/1-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/travel/2-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/travel/3-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/lifestyle/1-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/lifestyle/2-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/lifestyle/3-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/landscape/1-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/landscape/2-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url('public/images/gallery/landscape/3-medium.jpg')?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
