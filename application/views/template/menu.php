<?php
    $home=$menu == 1 ? "active" : "";  
    $about=$menu == 2 ? "active" : "";  
    $portofolio=$menu == 3 ? "active" : "";  
    $contact=$menu == 4 ? "active" : "";  
?>
<div class="header-column justify-content-end">
    <div class="header-row">
        <div class="header-nav">
            <div class="header-nav-main header-nav-main-photography-effect-1 header-nav-main-sub-effect-1">
                <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
                        <li class="dropdown-primary">
                            <a class="nav-link <?php echo $home;?>" href="<?php echo base_url()?>">
                                Home
                            </a>
                        </li>
<!--                        <li class="dropdown dropdown-primary">
                            <a class="nav-link <?php echo $about;?>" href="<?php echo base_url('about')?>">
                                About
                            </a>
                        </li>-->

                        <li class="nav-link dropdown-primary">
                            <a class="nav-link <?php echo $portofolio;?>" href="<?php echo base_url('portofolio')?>">
                                Portfolio
                            </a>
                        </li>
                        <li class="nav-link dropdown-primary">
                            <a class="nav-link <?php echo $contact;?>" href="<?php echo base_url('contact')?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <ul class="header-social-icons social-icons d-none d-sm-block">
                <!--<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>-->
                <li class="social-icons-instagram"><a href="http://www.instagram.com/tepianid" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</div>


