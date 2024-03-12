<!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-7 col-md-6">
                        <div class="single-footer-widget pr-5">
                            <a href="<?=BASEURL?>" class="logo">
                                <img src="<?=IMG?>logo.png" alt="image">
                            </a>
                            <p><?=$setting['footer_about_note']?></p>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                                <button type="submit" class="newsletterBtn">Subscribe</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                            <ul class="social-links">
                                <?php
                                if (isset($setting['facebook']) && strlen($setting['facebook']) > 5) {
                                    echo '<li><a href="'.$setting['facebook'].'" target="_blank"><i class="ri-facebook-fill"></i></a></li>';
                                }
                                if (isset($setting['linkedin']) && strlen($setting['linkedin']) > 5) {
                                    echo '<li><a href="'.$setting['linkedin'].'" target="_blank"><i class="ri-linkedin-fill"></i></a></li>';
                                }
                                if (isset($setting['twitter']) && strlen($setting['twitter']) > 5) {
                                    echo '<li><a href="'.$setting['twitter'].'" target="_blank"><i class="ri-twitter-fill"></i></a></li>';
                                }
                                if (isset($setting['instagram']) && strlen($setting['instagram']) > 5) {
                                    echo '<li><a href="'.$setting['instagram'].'" target="_blank"><i class="ri-instagram-fill"></i></a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-5 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Resources</h3>
                            <ul class="links-list">
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Work Portfolio</a></li>
                                <li><a href="#">SEO & Backlinks</a></li>
                                <li><a href="#">SMM Production</a></li>
                                <li><a href="#">Collaboration</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-5 col-md-6">
                        <div class="single-footer-widget">
                            <h3>About</h3>
                            <ul class="links-list">
                                <li><a href="<?=BASEURL.'our-mission'?>">Our Mission</a></li>
                                <li><a href="#">Our Story</a></li>
                                <li><a href="<?=BASEURL.'team'?>">Team Members</a></li>
                                <li><a href="<?=BASEURL.'pricing'?>">Plan & Pricing</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Live Chat</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-7 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Contact</h3>
                            <ul class="footer-contact-info">
                                <li><span>Address:</span> <?=$setting['address_1']?></li>
                                <?php if (!(empty($setting['address_2']))): ?>
                                    <li><span>Address:</span> <?=$setting['address_2']?></li>
                                <?php endif ?>
                                <li><span>Email:</span> <a href="mailto:<?=$setting['email_1']?>"><?=$setting['email_1']?></a></li>
                                <?php if (!(empty($setting['email_2']))): ?>
                                    <li><span>Email:</span> <a href="mailto:<?=$setting['email_2']?>"><?=$setting['email_2']?></a></li>
                                <?php endif ?>
                                <li><span>Phone:</span> <a href="tel:<?=$setting['phone_1']?>"><?=$setting['phone_1']?></a></li>
                                <?php if (!(empty($setting['phone_2']))): ?>
                                    <li><span>Phone:</span> <a href="tel:<?=$setting['phone_2']?>"><?=$setting['phone_2']?></a></li>
                                <?php endif ?>
                            </ul>
                            <ul class="payment-types">
                                <li><img src="<?=IMG?>skrill.png" alt="image"></li>
                                <li><img src="<?=IMG?>visa.png" alt="image"></li>
                                <li><img src="<?=IMG?>master-card.png" alt="image"></li>
                                <li><img src="<?=IMG?>paypal.png" alt="image"></li>
                                <li><img src="<?=IMG?>discover.png" alt="image"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7 col-sm-6">
                            Copyright @<?=date("Y")?>.
                        </div>

                        <div class="col-lg-6 col-md-5 col-sm-6">
                            <ul>
                                <li><a href="<?=BASEURL.'privacy-policy'?>">Privacy Policy</a></li>
                                <li><a href="<?=BASEURL.'terms-and-conditions'?>">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape1"><img src="<?=IMG?>shape/shape1.png" alt="image"></div>
            <div class="shape2"><img src="<?=IMG?>shape/shape2.png" alt="image"></div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class="ri-arrow-up-s-line"></i></div>

        <!-- Links of JS files -->
        <script src="<?=JS?>jquery.min.js"></script>
        <script src="<?=JS?>bootstrap.bundle.min.js"></script>
        <script src="<?=JS?>owl.carousel.min.js"></script>
        <script src="<?=JS?>appear.min.js"></script>
        <script src="<?=JS?>odometer.min.js"></script>
        <script src="<?=JS?>meanmenu.min.js"></script>
        <script src="<?=JS?>wow.min.js"></script>
        <script src="<?=JS?>form-validator.min.js"></script>
        <script src="<?=JS?>contact-form-script.js"></script>
        <script src="<?=JS?>ajaxchimp.min.js"></script>
        <script src="<?=JS?>main.js"></script>
    </body>
</html>

<?php if (isset($active_menu) && !(empty($active_menu))): ?>
    <script>
    $(function(){
        $("a.nav-link[rel=<?=strtolower($active_menu)?>]").addClass("active");
    });//onload
    </script>
<?php endif ?>

<script>
$(function(){

    $(document).on('click', '.newsletterBtn', function(event) {
        event.preventDefault();
        $email =  $(this).parent('form').children("input.input-newsletter").val();
        if ($email.length > 3) {
            $resp = isEmail($email);
            if ($resp == true) {
                alert('Thank you.');
                $.post('<?=BASEURL."submit-newsletter"?>', {email: $email}, function(resp) {
                    resp = $.parseJSON(resp);
                });
            }
            else{
                alert('please provide a valid email address.');
            }
        }
    });

});//onload
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>