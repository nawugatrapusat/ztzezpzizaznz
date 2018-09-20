
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

        <div role="main" class="main full-height" id="main">

            <div class="slider-container rev_slider_wrapper" style="height: 500px;">
                <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.7">
                    <ul>
                        <li data-transition="fade">
                            <img src="<?php echo base_url('public/images/slides/slide-photography-6.jpg')?>"  
                                 alt=""
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 class="rev-slidebg">

<!--                            <div class="tp-caption tp-caption-photo-label"
                                 data-x="['left','left','left','left']"
                                 data-hoffset="['28','28','28','28']" 
                                 data-y="['bottom','bottom','bottom','bottom']"
                                 data-voffset="['28','28','28','28']" 
                                 data-start="500"
                                 data-basealign="slide" 
                                 data-transform_in="y:[-300%];opacity:0;s:500;">The View</div>-->
                        </li>
                        <li data-transition="fade">
                            <img src="<?php echo base_url('public/images/slides/slide-photography-5.jpg')?>"  
                                 alt=""
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 class="rev-slidebg">
                        </li>
                        <li data-transition="fade">
                            <img src="<?php echo base_url('public/images/slides/slide-photography-2.jpg')?>"  
                                 alt=""
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 class="rev-slidebg">
                        </li>
                        <li data-transition="fade">
                            <img src="<?php echo base_url('public/images/slides/slide-photography-3.jpg')?>"  
                                 alt=""
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 class="rev-slidebg">
                        </li>
                        <li data-transition="fade">
                            <img src="<?php echo base_url('public/images/slides/slide-photography-4.jpg')?>"  
                                 alt=""
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 class="rev-slidebg">
                        </li>		
                    </ul>
                </div>
            </div>

        </div>

    </div>