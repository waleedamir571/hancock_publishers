<section id="FAQSections">
    <div class="faq-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="accordion ptb-20" id="accordionExample">
                <?php if(!empty($faqArray)): ?>
                        <?php foreach($faqArray as $key => $fA): ?>
                        <div class="card">
                            <div class="card-header card-header-faq" id="headingOne">
                                <button class="mb-0 fw-600 fs-18 fpoppins btn btn-link btn-block collapsed closeAccordion text-break" type="button" data-toggle="collapse" data-target="#collapseOne<?= @$countValue; ?><?= $key; ?>" aria-expanded="false" aria-controls="collapseOne<?= @$countValue; ?><?= $key; ?>">
                                    <?= $fA['title']; ?>
                                </button>
                            </div>
                            <div id="collapseOne<?= @$countValue; ?><?= $key; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body faq-card-body">
                                <p class="m-0 fw-500 fs-18 fpoppins"><?= $fA['desc']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
        
    </div>
</section>