<!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1><?=$post['title']?></h1>
                    <p><?=$post['short']?></p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area left-sidebar">
                            <?php if ($popular): ?>
                                <div class="widget widget_search">
                                    <form class="search-form">
                                        <label><input type="search" class="search-field popularPostSearchInput" placeholder="Search..."></label>
                                        <button type="submit"><i class="ri-search-2-line"></i></button>
                                    </form>
                                </div>

                                <div class="widget widget_hildes_posts_thumb">
                                    <h3 class="widget-title">Popular Posts</h3>
                                    <?php foreach ($popular as $key => $pBlog): ?>
                                        <article class="item" data-title="<?=$pBlog['title']?>">
                                            <a href="<?=BASEURL.'blog/'.$pBlog['slug']?>" class="thumb"><span class="fullimage cover bg1" role="img" style="background-image: url('<?=UPLOADS.$pBlog['image']?>');"></span></a>
                                            <div class="info">
                                                <h4 class="title usmall"><a href="<?=BASEURL.'blog/'.$pBlog['slug']?>"><?=$pBlog['title']?></a></h4>
                                                <span class="date"><i class="ri-calendar-2-fill"></i> <?=date('F d, Y',strtotime($pBlog['at']))?></span>
                                            </div>
                                        </article>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>

                            <?php if (1==2): ?>
                            <div class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    <li><a href="<?=BASEURL?>">Business <span class="post-count">(2)</span></a></li>
                                    <li><a href="<?=BASEURL?>">Privacy <span class="post-count">(5)</span></a></li>
                                    <li><a href="<?=BASEURL?>">Technology <span class="post-count">(6)</span></a></li>
                                    <li><a href="<?=BASEURL?>">Tips <span class="post-count">(2)</span></a></li>
                                    <li><a href="<?=BASEURL?>">Uncategorized <span class="post-count">(1)</span></a></li>
                                    <li><a href="<?=BASEURL?>">Log in <span class="post-count">(1)</span></a></li>
                                </ul>
                            </div>

                            <div class="widget widget_archive">
                                <h3 class="widget-title">Archives</h3>

                                <ul>
                                    <li><a href="#">April 2023</a></li>
                                    <li><a href="#">May 2023</a></li>
                                    <li><a href="#">June 2023</a></li>
                                    <li><a href="#">July 2023</a></li>
                                    <li><a href="#">August 2023</a></li>
                                </ul>
                            </div>

                            <div class="widget widget_tag_cloud">
                                <h3 class="widget-title">Tags</h3>
    
                                <div class="tagcloud">
                                    <a href="<?=BASEURL?>">Advertisment <span class="tag-link-count"> (3)</span></a>
                                    <a href="<?=BASEURL?>">Business <span class="tag-link-count"> (3)</span></a>
                                    <a href="<?=BASEURL?>">Life <span class="tag-link-count"> (4)</span></a>
                                    <a href="<?=BASEURL?>">Lifestyle <span class="tag-link-count"> (2)</span></a>
                                    <a href="<?=BASEURL?>">Fashion <span class="tag-link-count"> (2)</span></a>
                                    <a href="<?=BASEURL?>">Inspiration <span class="tag-link-count"> (1)</span></a>
                                    <a href="<?=BASEURL?>">Blog <span class="tag-link-count"> (1)</span></a>
                                    <a href="<?=BASEURL?>">Ads <span class="tag-link-count"> (3)</span></a>
                                </div>
                            </div>
                            <?php endif ?>

                            <div class="widget widget_newsletter">
                                <h4>Subscribe To Our Newsletter</h4>
                                <p>Subscribe to our newsletter to get the new updates!</p>
                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                                    <button type="submit" class="newsletterBtn">Subscribe</button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </aside>
                    </div>


                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <?php if (!(empty($post['image']))): ?>
                                <div class="article-image">
                                    <img src="<?=UPLOADS.$post['image']?>" alt="<?=$post['title']?>">
                                </div>
                            <?php endif ?>

                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="ri-shield-user-line"></i><a href="javascript://">Admin</a></li>
                                        <li><i class="ri-calendar-2-line"></i><?=date('F d, Y',strtotime($post['at']))?></li>
                                    </ul>
                                </div>
                                <h3><?=$post['title']?></h3>
                                <?=$post['detail']?>
                            </div>

                            <div class="article-footer">
                                <?php if (!(empty($post['tags']))): ?>
                                    <div class="article-tags">
                                        <div class="d-flex align-items-center">
                                            <p>Tags:</p>
                                            <?php
                                            $tags = explode(',', $post['tags']);
                                            foreach ($tags as $key => $tag) {
                                                echo '<a href="javascript://">'.$tag.'</a>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                                
                                <div class="article-share">
                                    <ul class="social">
                                        <li><span>Share:</span></li>
                                        <li><a href="#" class="facebook" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                        <li><a href="#" class="twitter" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                        <li><a href="#" class="linkedin" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                        <li><a href="#" class="instagram" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->