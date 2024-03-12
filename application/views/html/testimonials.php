<?php foreach ($testimonials as $key => $testimonial): ?>
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
<?php endforeach ?>