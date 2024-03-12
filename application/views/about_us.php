<!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1><?=$page_title?></h1>
                    <p><?=$page_short_description?></p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        
        <!-- Start About Area -->
        <div class="about-area ptb-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <?php if (!(empty($page_image))): ?>
                        <div class="col-lg-6 col-md-12">
                            <div class="about-img wow animate__animated animate__fadeIn animate__fast">
                                <img src="<?=UPLOADS.$page_image?>" alt="image">
                            </div>
                        </div>
                    <?php endif ?>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-text">
                            <span class="sub-title" style="text-transform: uppercase;"><?=$page_title?></span>
                            <?=$page_detail?>
                            <a href="<?=BASEURL.'contact-us'?>" class="default-btn"><i class="ri-medal-2-fill"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start Mission Area -->
        <?=$mission?>
        <!-- End Mission Area -->

        <?php if ($team): ?>
            <!-- Start Team Area -->
            <div class="team-area pt-100 pb-70">
                <div class="container">
                    <div class="section-title">
                        <span class="sub-title">TEAM</span>
                        <h2>Meet Members From Our <br>Exclusive Team</h2>
                    </div>

                    <div class="row justify-content-center">
                        <?=$team?>
                    </div>
                </div>
            </div>
            <!-- End Team Area -->
        <?php endif ?>

        <!-- Start Feedback Area -->
        <div class="feedback-area ptb-100 bg-F9F5F2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="feedback-image wow animate__animated animate__fadeIn animate__slower">
                            <img src="<?=IMG?>feedback.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="feedback-slides owl-carousel owl-theme">
                            <?=$testimonials?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feedback Area -->

        <!-- Start Funfacts Area -->
        <div class="funfacts-area pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-funfacts-box">
                            <img src="<?=IMG?>bg3.png" alt="image" class="shape">
                            <i class="ri-chat-check-line"></i>
                            <h3><span class="odometer" data-count="12">00</span><span class="sign">M</span></h3>
                            <p>CLIENTS WORLDWIDE</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-funfacts-box">
                            <img src="<?=IMG?>bg3.png" alt="image" class="shape">
                            <i class="ri-list-settings-line"></i>
                            <h3><span class="odometer" data-count="10">00</span><span class="sign">M</span></h3>
                            <p>FINISHED PROJECTS</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-funfacts-box">
                            <img src="<?=IMG?>bg3.png" alt="image" class="shape">
                            <i class="ri-team-line"></i>
                            <h3><span class="odometer" data-count="2">00</span><span class="sign">K</span></h3>
                            <p>EXPERT MEMBERS</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-funfacts-box">
                            <img src="<?=IMG?>bg3.png" alt="image" class="shape">
                            <i class="ri-award-line"></i>
                            <h3><span class="odometer" data-count="41">00</span></h3>
                            <p>WINNING AWARDS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Funfacts Area -->

        <?php if ($red_section): ?>
            <?=$red_section?>
        <?php endif ?>