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

        <?php if ($red_section): ?>
            <?=$red_section?>
        <?php endif ?>