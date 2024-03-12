<div class="row justify-content-center">

    <?php foreach ($blog as $key => $blogPost): ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single-blog-post">
                <div class="post-image">
                    <a href="<?=BASEURL.'blog/'.$blogPost['slug']?>" class="d-block"><img src="<?=UPLOADS.$blogPost['image']?>" alt="image"></a>
                </div>
                <div class="post-content">
                    <ul class="meta">
                        <li><a href="javascript://">Admin</a></li>
                        <li><a href="javascript://"><?=date('F d, Y',strtotime($blogPost['at']))?></a></li>
                    </ul>
                    <h3><a href="<?=BASEURL.'blog/'.$blogPost['slug']?>"><?=$blogPost['title']?></a></h3>
                    <p><?=$blogPost['short']?></p>
                    <a href="<?=BASEURL.'blog/'.$blogPost['slug']?>" class="link-btn">Read More</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    
</div>