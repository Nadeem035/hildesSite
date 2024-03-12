        <!-- Start Main Banner Area -->
        <div class="main-banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="main-banner-content">
                            <h1>Excellent IT Services For Your Business Success</h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <div class="btn-box">
                                <a href="<?=BASEURL.'about-us'?>" class="default-btn"><i class="ri-send-plane-fill"></i> Discover More</a>
                                <a href="<?=BASEURL.'contact-us'?>" class="default-btn"><i class="ri-chat-check-line"></i> Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <div class="main-banner-image wow animate__animated animate__fadeIn animate__fast">
                            <img src="<?=IMG?>banner1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Features Area -->
        <div class="features-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="features-image wow animate__animated animate__fadeIn animate__fast">
                            <img src="<?=IMG?>features.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="features-content">
                            <span class="sub-title">OUR FEATURES</span>
                            <h2>Best Services Features! It’s More Affordable Than You Think</h2>
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-features-box">
                                        <div class="icon">
                                            <i class="ri-settings-2-line"></i>
                                        </div>
                                        <h3>IT Management</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-features-box">
                                        <div class="icon bg-51EDF7">
                                            <i class="ri-cloud-line"></i>
                                        </div>
                                        <h3>Cloud Security</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-features-box">
                                        <div class="icon bg-AD6EDD">
                                            <i class="ri-shield-keyhole-line"></i>
                                        </div>
                                        <h3>Data Security</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-features-box">
                                        <div class="icon bg-FFCD43">
                                            <i class="ri-firefox-line"></i>
                                        </div>
                                        <h3>Machine Learning</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Area -->
        
        <!-- Start About Area -->
        <div class="about-area ptb-100 bg-color">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span class="sub-title">ABOUT US</span>
                            <?=$setting['home_about_us']?>
                            <a href="<?=BASEURL.'about-us'?>" class="default-btn"><i class="ri-medal-2-fill"></i> More About Us</a>
                        </div>
                    </div>
                    <?php if (isset($setting['home_about_us_image'])): ?>
                        <div class="col-lg-6 col-md-12">
                            <div class="about-image wow animate__animated animate__fadeIn animate__fast">
                                <img src="<?=UPLOADS.$setting['home_about_us_image']?>" alt="image">
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start Services Area -->
        <div class="services-area pt-100 pb-60">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">OUR SERVICES</span>
                    <h2>We Are Offering All Kinds of IT Solutions Services</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <img src="<?=IMG?>services/services-icon1.png" alt="icon">
                            </div>
                            <h3><a href="<?=BASEURL.'services'?>">Software Development</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <img src="<?=IMG?>services/services-icon2.png" alt="icon">
                            </div>
                            <h3><a href="<?=BASEURL.'services'?>">Time Management</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <img src="<?=IMG?>services/services-icon3.png" alt="icon">
                            </div>
                            <h3><a href="<?=BASEURL.'services'?>">Analytic Solutions</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <img src="<?=IMG?>services/services-icon4.png" alt="icon">
                            </div>
                            <h3><a href="<?=BASEURL.'services'?>">Product & Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <img src="<?=IMG?>services/services-icon5.png" alt="icon">
                            </div>
                            <h3><a href="<?=BASEURL.'services'?>">Web Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <img src="<?=IMG?>services/services-icon6.png" alt="icon">
                            </div>
                            <h3><a href="<?=BASEURL.'services'?>">Data Center</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Start Top Rated Area -->
        <div class="top-rated-area pt-100 pb-70 bg-color">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">TOP RATED COMPANY</span>
                    <h2>Trusted More that 2500+ Businesses and Organizations</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-top-rated-box">
                            <img src="<?=IMG?>top-rated/top-rated1.png" alt="image">
                            <h3>Top Rated</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedsd eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-top-rated-box">
                            <img src="<?=IMG?>top-rated/top-rated2.png" alt="image">
                            <h3>Expert Team</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedsd eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-top-rated-box">
                            <img src="<?=IMG?>top-rated/top-rated3.png" alt="image">
                            <h3>Proper Plan</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedsd eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-top-rated-box">
                            <img src="<?=IMG?>top-rated/top-rated4.png" alt="image">
                            <h3>24/7 Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedsd eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Rated Area -->

        <!-- Start Mission Area -->
        <?=$mission?>
        <!-- End Mission Area -->

        <?php if ($testimonial): ?>
            <!-- Start Feedback Area -->
            <div class="feedback-area bg-image ptb-100">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-md-12">
                            <div class="feedback-image wow animate__animated animate__fadeIn animate__slower">
                                <img src="<?=IMG?>feedback.png" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div class="feedback-content">
                                <p><?=$testimonial['comment']?></p>
                                <div class="client-info">
                                    <div class="d-flex align-items-center">
                                        <img src="<?=UPLOADS.$testimonial['img']?>" alt="<?=$testimonial['name']?>">
                                        <div class="title">
                                            <h4><?=$testimonial['name']?></h4>
                                            <span><?=$testimonial['designation']?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Feedback Area -->
        <?php endif ?>

        <!-- Start Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">OUR BLOG</span>
                    <h2>Our Latest Insights Are On <br>Top All Times</h2>
                </div>

                <?=$blog?>

            </div>
        </div>
        <!-- End Blog Area -->

        <?php if ($red_section): ?>
            <?=$red_section?>
        <?php endif ?>
