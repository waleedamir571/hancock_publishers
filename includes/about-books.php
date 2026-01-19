<div class="best_selling1">
    <div class="nonfiction_book">
        <section class="">
            <div class="container">
                <div class="row pb-50">
                    <div class="col-sm-12 col-md-12 wow slideInRight">
                        <h1 class="fs-45 fw-500 text-center"><?= $heading; ?></h1>
                        <br><br>
                        <p class="fs-22 lh-30 segoe text-center">
                            <?= $paragraph; ?>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="nonfiction-books owl-carousel owl-theme wow slideInLeft">
                    <?php
                    for ($i=1; $i <= 6; $i++) { 
                    ?>
                    <div class="item">
                        <img src="assets/imgs/non-fiction/book/<?= $i; ?>.png" class="img-responsive" />
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    for ($i=1; $i <= 6; $i++) { 
                    ?>
                    <div class="item">
                        <img src="assets/imgs/non-fiction/book/<?= $i; ?>.png" class="img-responsive" />
                    </div>
                    <?php
                    }
                    ?>
                </div>             
            </div>
        </section>
    </div>
</div>