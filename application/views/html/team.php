<?php if ($team): ?>
	<?php foreach ($team as $key => $member): ?>
		<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="single-team-member">
                <div class="image">
                    <img src="<?=UPLOADS.$member['img']?>" alt="image">
                </div>
                <div class="content">
                    <h3><?=$member['name']?></h3>
                    <span><?=$member['designation']?></span>
                </div>
                <ul class="social-links">
                	<?php
                	if (isset($member['facebook']) && strlen($member['facebook']) > 5) {
                		echo '<li><a href="'.$member['facebook'].'" target="_blank"><i class="ri-facebook-fill"></i></a></li>';
                	}
                	if (isset($member['linkedin']) && strlen($member['linkedin']) > 5) {
                		echo '<li><a href="'.$member['linkedin'].'" target="_blank"><i class="ri-linkedin-fill"></i></a></li>';
                	}
                	if (isset($member['twitter']) && strlen($member['twitter']) > 5) {
                		echo '<li><a href="'.$member['twitter'].'" target="_blank"><i class="ri-twitter-fill"></i></a></li>';
                	}
                	if (isset($member['instagram']) && strlen($member['instagram']) > 5) {
                		echo '<li><a href="'.$member['instagram'].'" target="_blank"><i class="ri-instagram-fill"></i></a></li>';
                	}
                	?>
                </ul>
            </div>
        </div><!-- /3 -->
	<?php endforeach ?>
<?php endif ?>