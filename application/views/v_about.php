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
                                    <a href="<?php echo base_url()?>">
                                        <img alt="Porto" width="150" height="39" src="<?php echo base_url('public/images/tepian white.png') ?>">
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

            <div class="slider-container rev_slider_wrapper rev_about_us" style="height: 500px;">
                <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.7">
                    <ul>
                        <li data-transition="fade">
                            <img src="<?php echo base_url('public/images/about/about-us-slide-1.jpg') ?>"  
                                 alt=""
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 data-bgparallax="1" 
                                 class="rev-slidebg">
                        </li>
                    </ul>

                    <div class="tp-static-layers">
                        <h1 class="tp-caption tp-caption-photo-label tp-caption-main-custom tp-static-layer font-weight-normal text-color-light"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-50"
                            data-start="200"
                            data-basealign="slide" 
                            data-startslide="0"
                            data-endslide="99"
                            data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 56px;">We Are</h1>
                            
                        <h1 class="tp-caption tp-caption-photo-label tp-caption-main-custom tp-static-layer font-weight-normal text-color-light"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="40"
                            data-start="500"
                            data-basealign="slide" 
                            data-startslide="0"
                            data-endslide="99"
                            data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 56px;">Tepian Photowork</h1>

                        <div class="tp-caption tp-caption-photo-label tp-caption-sub-custom tp-static-layer text-color-light"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="170"
                             data-start="800"
                             data-basealign="slide" 
                             data-startslide="0" 
                             data-endslide="99"
                             data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">Nice to Meet You</div>
                    </div>
                </div>
            </div>
<!--                <section>
                <div class="container">
                    <div class="row text-center pt-4 mt-4 pb-4">
                        <div class="col">
                            <h2 class="font-weight-normal custom-font-size-1 mb-4 mt-4">We Love What We Do</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna lobortis, at consectetur odio euismod. Maecenas eleifend semper vulputate. Integer pellentesque massa et felis aliquam, a pharetra mauris bibendum. Nullam ullamcorper enim id aliquet convallis. Cras pellentesque, ipsum sollicitudin suscipit mollis, nibh nisi facilisis lorem.</p>
                        </div>
                    </div>
                </div>
            </section>-->
<!--            <section class="section our-services">
                <div class="container">
                    <div class="row text-center mb-3">
                        <div class="col">
                            <h2 class="font-weight-normal custom-font-size-1 mt-4">Our Services</h2>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-icon">
                                    <img src="<?php echo base_url('public/images/about/our-services-1.jpg') ?>" alt="">
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-normal text-5">Akad</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-icon">
                                    <img src="<?php echo base_url('public/images/about/our-services-2.jpg') ?>" alt="">
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-normal text-5">Wedding</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-icon">
                                    <img src="<?php echo base_url('public/images/about/our-services-3.jpg') ?>" alt="">
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-normal text-5">Prewedding</h4>
                                </div>
                            </div>
                        </div>
                    </div><br/><br/>
                    <div class="row mb-4">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-icon">
                                    <img src="<?php echo base_url('public/images/about/our-services-1.jpg') ?>" alt="">
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-normal text-5">Engagement</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-icon">
                                    <img src="<?php echo base_url('public/images/about/our-services-2.jpg') ?>" alt="">
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-normal text-5">Anniversary</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-icon">
                                    <img src="<?php echo base_url('public/images/about/our-services-3.jpg') ?>" alt="">
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-normal text-5">Mini Studio</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <section class="section section-quaternary why-choose-us">
                <div class="container">
                    <div class="row text-center mb-5">
                        <div class="col">
                            <h2 class="font-weight-normal custom-font-size-1 text-color-light m-0 mt-4">Why Choose Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 flex-wrap">
                                <div class="feature-box-info text-center">
                                <div class="feature-box-icon px-0 pb-4">
                                    <img src="<?php echo base_url('public/images/about/why-choose-us-1.png') ?>" alt="" class="img-fluid">
                                </div>
                                    <h4 class="font-weight-normal text-color-light text-5">Experience</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 flex-wrap">
                                <div class="feature-box-info text-center">
                                <div class="feature-box-icon px-0 pb-4">
                                    <img src="<?php echo base_url('public/images/about/why-choose-us-2.png') ?>" alt="" class="img-fluid">
                                </div>
                                    <h4 class="font-weight-normal text-color-light text-5">Quality</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-box feature-box-style-2 flex-wrap">
                                <div class="feature-box-info text-center">
                                <div class="feature-box-icon px-0 pb-4 ">
                                    <img src="<?php echo base_url('public/images/about/why-choose-us-3.png') ?>" alt="" class="img-fluid">
                                </div>
                                    <h4 class="font-weight-normal text-color-light text-5">Creativity</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section our-services">
                <div class="container">
                    <div class="row text-center mb-3">
                        <div class="col">
                            <h2 class="font-weight-normal custom-font-size-1 mt-4">Our Pricelist</h2>
                        </div>
                    </div><br/>
                    <div class="row mb-4">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center">Wedding Only</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">Photo & video documentation</td></tr>
                                            <tr><td class="text-left">Medium photobook album (50 Photo)</td></tr>
                                            <tr><td class="text-left">40x50cm photo</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo & video after & before edit)</td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">IDR 1.700</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center">Akad Only</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">Photo & video documentation</td></tr>
                                            <tr><td class="text-left">Medium photobook album (50 Photo)</td></tr>
                                            <tr><td class="text-left">40x50cm photo</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo & video after & before edit)</td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">IDR 1.700</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center">Outdoor Pre-Wedding Only<br/></th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">6hrs Photo & video documentation</td></tr>
                                            <tr><td class="text-left">Cinematic video clip</td></tr>
                                            <tr><td class="text-left">2 pcs of 40x50cm photo</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo & video after & before edit)</td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">IDR 1.500</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br/>
                    <div class="row mb-4">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center" style="padding-bottom: 38px;">Akad & Wedding (same day)</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">Photo & video documentation</td></tr>
                                            <tr><td class="text-left">Medium photobook album (50 Photo)</td></tr>
                                            <tr><td class="text-left">40x50cm photo</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo & video after & before edit)</td></tr>
                                            <tr><td class="text-left"><br/></td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">IDR 2.700</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center">Outdoor Pre-Wedding, Akad & Wedding (same day)</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">Photo & video documentation</td></tr>
                                            <tr><td class="text-left">Medium photobook album (50 Photo)</td></tr>
                                            <tr><td class="text-left">Cinematic video clip (Prewedding)</td></tr>
                                            <tr><td class="text-left">40x50cm photo</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo & video after & before edit)</td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">IDR 3.700</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center" style="padding-bottom: 38px;">Engagement</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">Photo & video documentation</td></tr>
                                            <tr><td class="text-left">Cinematic video clip</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo & video after & before edit)</td></tr>
                                            <tr><td class="text-left"><br/></td></tr>
                                            <tr><td class="text-left"><br/></td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">IDR 1.200</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br/>
                    <div class="row mb-4">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center">Anniversary</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">Photo & video documentation</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo & video after & before edit)</td></tr>
                                            <tr><td class="text-left"><br/></td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">IDR 1.200</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center">Family/Group/Baby</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">Photo documentation</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo, after & before edit)</td></tr>
                                            <tr><td class="text-left"><br/></td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">Start from IDR 350</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center">Mini Studio</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr><td class="text-left">Photo documentation</td></tr>
                                            <tr><td class="text-left">16Gb Flashdisk <br/>(all photo, after & before edit)</td></tr>
                                            <tr><td class="text-left"><br/></td></tr>
                                            <tr><td class="text-center" style="background:#4E5066;color:#FFFFFF;font-size:1.50em;">Start from IDR 500</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br/>
                    <div class="row mb-4">
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 align-items-center">
                                <div class="feature-box-info">
                                    <table class="table-fill">
                                        <thead><tr><th class="text-center"  colspan="3">Additional</th></tr></thead>
                                        <tbody class="table-hover">
                                            <tr>
                                                <td class="text-left">Upgrade to big photobook album (100 Photo)</td>
                                                <td>IDR 100</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Additional 40x50cm photo</td>
                                                <td>IDR 300</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Cinematic video clip</td>
                                                <td>IDR 200</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">More than 3 hours wedding</td>
                                                <td>IDR 400</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Drone per 1 battery (20 Min)</td>
                                                <td>IDR 600</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">BODETABEK location</td>
                                                <td>IDR 150</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-quaternary contact-details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="feature-box feature-box-style-2 text-center flex-wrap justify-content-center">
                                <div class="feature-box-icon pb-4">
                                    <i class="icon-location-pin icons"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-normal text-color-light text-5">Email Us</h4>
                                    <p>contact@tepian.id</p>
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
                                    <p>085-641-911-981</p>
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
                                    <p>
                                        <!--<a href="http://www.facebook.com">Facebook</a> <span class="visible-block pl-2 pr-2">/</span>-->
                                        <a href="http://www.instagram.com/tepianid" target="_new">Instagram</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


<!--            <section class="p-0 m-0">
                <div class="container-fluid p-0">
                    <div class="owl-carousel owl-theme m-0" data-plugin-options="{'items': 6, 'loop': true, 'dots': false, 'nav': false, 'autoplay': true, 'autoplayTimeout': 3000}">
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/travel/1-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/travel/2-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/travel/3-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/lifestyle/1-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/lifestyle/2-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/lifestyle/3-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/landscape/1-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/landscape/2-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="<?php echo base_url('public/images/gallery/landscape/3-medium.jpg') ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>-->
        </div>