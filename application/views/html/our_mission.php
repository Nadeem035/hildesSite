<!-- Start Mission Area -->
<div class="mission-area ptb-100 bg-f9f9f9">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="mission-content">
                    <span class="sub-title" style="text-transform: uppercase;"><?=$mission['title']?></span>
                    <?=$mission['detail']?>
                    <a href="<?=BASEURL.'pricing'?>" class="default-btn"><i class="ri-medal-2-fill"></i> Our Pricing</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="mission-image">
                    <!-- <img src="<?=IMG?>mission/mission2.jpg" class="wow animate__animated animate__fadeIn animate__slow" alt="image">
                    <img src="<?=IMG?>mission/mission1.png" class="wow animate__animated animate__fadeInLeft animate__faster" alt="image"> -->
                    <img src="<?=UPLOADS.$mission['image']?>" class="wow animate__animated animate__fadeInLeft animate__faster" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Mission Area -->