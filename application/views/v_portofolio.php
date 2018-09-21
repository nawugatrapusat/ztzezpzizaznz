

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
        <header id="header" class="header-full-width solid-header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 78, 'stickySetTop': '0'}">
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="<?php echo base_url()?>">
                                        <img alt="Porto" width="150" height="39" src="<?php echo base_url('public/images/tepian white.png')?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view('template/menu') ?>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main calc-height initial-height" id="main">

            <div class="container-fluid p-0">

                <div id="photographyLightbox" class="mfp-hide">
                    <div class="thumb-gallery">
                        <div class="owl-carousel owl-theme manual thumb-gallery-detail" id="thumbGalleryDetail">
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/travel/3.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/travel/2.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/travel/1.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/wedding/1.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/wedding/3.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/wedding/2.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/lifestyle/2.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/lifestyle/3.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/lifestyle/1.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/family/2.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/family/1.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/family/3.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/landscape/1.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                            <div>
                                <span class="img-thumbnail d-block">
                                    <img alt="" src="<?php echo base_url('public/images/gallery/landscape/3.jpg')?>" class="img-fluid">
                                </span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <ul id="portfolioGrid" class="p-0" data-grid-sizer=".col-lg-3">
                    <li class="col-lg-6 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-1 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/travel/3-medium.jpg')?>');"></span>
                                        <h2 class="thumb-info-title font-weight-bold text-center">
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/travel/2-small.jpg')?>');"></span>
                                        <span class="thumb-info-plus"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/travel/1-small.jpg')?>');"></span>
                                        <h2 class="thumb-info-title font-weight-bold text-center">
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/wedding/1-small.jpg')?>');"></span>
                                        <span class="thumb-info-plus"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/wedding/3-small.jpg')?>');"></span>
                                        <h2 class="thumb-info-title font-weight-bold text-center">
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/wedding/2-small.jpg')?>');"></span>
                                        <span class="thumb-info-plus"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/lifestyle/2-small.jpg')?>');"></span>
                                        <h2 class="thumb-info-title font-weight-bold text-center">
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/lifestyle/3-small.jpg')?>');"></span>
                                        <span class="thumb-info-plus"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/lifestyle/1-small.jpg')?>');"></span>
                                        <h2 class="thumb-info-title font-weight-bold text-center">
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-6 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-1 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/family/2-medium.jpg')?>');"></span>
                                        <span class="thumb-info-plus"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/family/1-small.jpg')?>');"></span>
                                        <h2 class="thumb-info-title font-weight-bold text-center">
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/family/3-small.jpg')?>');"></span>
                                        <span class="thumb-info-plus"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/landscape/1-small.jpg')?>');"></span>
                                        <h2 class="thumb-info-title font-weight-bold text-center">
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-lg-3 isotope-item p-0">
                        <div class="portfolio-grid-item">
                            <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                                <div class="thumb-info">
                                    <div class="thumb-info-wrapper size-2 m-0">
                                        <span class="thumb-info-background" style="background-image: url('<?php echo base_url('public/images/gallery/landscape/3-small.jpg')?>');"></span>
                                        <span class="thumb-info-plus"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        