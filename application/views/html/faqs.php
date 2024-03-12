<?php if ($faqs): ?>
    <div class="faq-accordion accordion" id="faqAccordion">
        <?php foreach ($faqs as $keyFaq => $faq): ?>
            <?php if ($keyFaq == 0): ?>
                <div class="accordion-item">
                    <button class="accordion-header accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?=$keyFaq?>" aria-expanded="true" aria-controls="collapse-<?=$keyFaq?>">
                        <?=$faq['title']?>
                    </button>
                    <div id="collapse-<?=$keyFaq?>" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <?=$faq['detail']?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="accordion-item">
                    <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?=$keyFaq?>" aria-expanded="true" aria-controls="collapse-<?=$keyFaq?>">
                        <?=$faq['title']?>
                    </button>
                    <div id="collapse-<?=$keyFaq?>" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <?=$faq['detail']?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
<?php endif ?>