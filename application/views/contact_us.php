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
        
        <!-- Start Contact Area -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">CONTACT US</span>
                    <h2>We'd Love To Hear From You! <br>Get In Touch</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <ul class="contact-info">
                            <li>
                                <div class="icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h3>Office Address:</h3>
                                <p><?=$setting['address_1']?></p>
                                <?php if (!(empty($setting['address_2']))): ?>
                                    <p><?=$setting['address_2']?></p>
                                <?php endif ?>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <h3>Call for Help:</h3>
                                <p><a href="tel:<?=$setting['phone_1']?>"><?=$setting['phone_1']?></a></p>
                                <?php if (!(empty($setting['phone_2']))): ?>
                                    <p><a href="tel:<?=$setting['phone_2']?>"><?=$setting['phone_2']?></a></p>
                                <?php endif ?>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="ri-mail-send-line"></i>
                                </div>
                                <h3>Email Address:</h3>
                                <p><a href="mailto:<?=$setting['email_1']?>"><?=$setting['email_1']?></a></p>
                                <?php if (!(empty($setting['address_2']))): ?>
                                    <p><a href="mailto:<?=$setting['email_2']?>"><?=$setting['email_2']?></a></p>
                                <?php endif ?>
                            </li>
                        </ul>
                        <ul class="contact-social-links">
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

                    <div class="col-lg-8 col-md-12">
                        <div class="contact-form">
                            <form class="contact__form" method="post" action="">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Email address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Subject" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkme">
                                            <label class="form-check-label" for="checkme">
                                                Accept <a href="<?=BASEURL.'terms-and-conditions'?>" target="_blank">Terms of Services</a> and <a href="<?=BASEURL.'privacy-policy'?>" target="_blank">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="default-btn">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- Form message -->
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message has been sent successfully.
                                        </div>
                                    </div>
                                    <!-- End message -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (!(empty($setting['google_map']))): ?>
            <div id="maps">
                <iframe src="<?=$setting['google_map']?>"></iframe>
            </div>
        <?php endif ?>
        <!-- End Contact Area -->