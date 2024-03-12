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

        <!-- Start Feedback Area -->
        <div class="feedback-area ptb-100">
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

        <?php if ($red_section): ?>
            <?=$red_section?>
        <?php endif ?>