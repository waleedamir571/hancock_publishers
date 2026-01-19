<style>
    /* .hbg-top {
    top: 100%;
    transform: translateY(100%);
} */
</style>
<?php
$img = 'assets/imgs/non-fiction/wooden-table.png';
if(@$imgs && @$img_url != "") {
    $img = @$img_url;
}
?>
<section class="hbg" style="background-image: url(<?= @$img; ?>);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-offset-2 col-lg-4 header-slider-column wow slideInLeft">
                <div class="header-slider-form">
                    <h1 class="fs-36 text-center">Get An Instant Quote</h1>
                    <p class="fs-30 fw-bold phone text-center">
                        <img src="assets/imgs/non-fiction/header-phone.png" />
                        <a href="tel:949-945-2002" class="number color_change1">949-945-2002</a>
                    </p>
                    <form action="/hancock-ghostwriters/backend/action/action.php" method="POST" class="headerForm">
                        <input type="hidden" name="type" value="formLong">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="inputEmail3" required placeholder="Name*">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="inputPassword3" required placeholder="Email*">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="form-control" id="inputPassword3" required placeholder="Phone*">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" required placeholder="Message*"></textarea>
                        </div>
                        <div class="form-group m-0">
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 col-lg-offset-1 col-lg-4 wow slideInRight">
                <div class="hbg-top paddingHeader text-right mt-64">
                    <?php
                    if (@$heading) {
                    ?>
                    <h1 class="fs-60 fw-bold">
                        <?= @$heading; ?>
                    </h1>
                    <?php
                    } if (@$heading2) {
                    ?>
                    <h2 class="fs-48">
                        <?= @$heading2; ?>
                    </h2>
                    <?php
                    } if (@$heading3) {
                    ?>
                    <h2 class="fs-48">
                        <?= @$heading3; ?>
                    </h2>
                    <?php
                    } if (@$paragraph) {
                    ?>
                    <p class="f-22 lh-pt mtb-30 f13">
                        <?= @$paragraph; ?>
                    </p>
                    <?php
                    }
                    ?>

                    <?php
                    if (isset($button) && count($button) > 0) {
                    ?>
                    <div class="row text-left">
                        <?php
                        foreach ($button as $k => $v) {
                        ?>
                        <div class="col-sm-6 mtb-10 wow slideInRight">
                            <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt="">
                                <?= $v; ?>
                            </p>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-offset-2 col-md-4 wow slideInRight">
                <div class="hbg-divier-container">
                    <img src="assets/imgs/divider.png" class="w-100-custom-divider hbg-divider" />
                </div>
            </div>
            <div class="col-md-5 col-lg-offset-1 col-lg-4 wow slideInRight">
                <div class="hbg-top mb-sm-40 text-right">
                    <?php
                    if (@$links) {
                    ?>
                    <div class="row">
                        <ul class="callButton list-inline">
                            <li class="animation">
                                <a href="javascript:$zopim.livechat.window.show()" class="btn-custom black-white">
                                    <?= @$link1_text; ?>
                                </a>

                            </li>
                            <li class="animation">
                                <a href="<?= @$link2; ?>" class="btn-custom" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <?= @$link2_text; ?>
                                </a>
                            </li>
                            <!-- <li class="hidden-xs hidden-sm hide-tablet animation" data-toggle="modal"
                                data-target="#exampleModal">
                                <a href="" class="btn-custom">
                                   
                                </a>
                            </li> -->
                        </ul>


                    </div>
                    <?php
                    }
                    if (@$imgs) {
                    ?>
                    <div class="row">
                        <div class="col-sm-3 col-md-3  pull-right-res-768">
                            <img src="assets/imgs/header-bg/trustpilotnew2.png" class="" />
                        </div>
                        <div class="col-sm-3 col-md-3 pull-right-res-768">
                            <img src="assets/imgs/header-bg/500new.png" class="" />
                        </div>
                        <div class="col-sm-3 col-md-3 pull-right-res-768">
                            <img src="assets/imgs/header-bg/clutch.png" class="" />
                        </div>
                        <div class="col-sm-3 col-md-3 pull-right-res-768 ">
                            <img src="assets/imgs/header-bg/googlepartnernew.png" class="mr-24" />
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header-slider-form1">
                    <h1 class="fs-36 text-center fs-28">Get An Instant Quote</h1>
                    <p class="fs-30 fw-bold phone text-center fs-28">
                        <img class="mx-8" src="assets/imgs/non-fiction/header-phone.png" />
                        <a href="tel:949-945-2002">949-945-2002</a>
                    </p>
                    <br>
                    <form action="/hancock-ghostwriters/backend/action/action.php" method="POST" class="headerForm">
                        <input type="hidden" name="type" value="formLong">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="inputEmail3" required placeholder="Name*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="inputPassword3" required placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="form-control" id="inputPassword3" required placeholder="Phone*" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" required placeholder="Message*" required></textarea>
                        </div>
                        
                        <div class="form-group m-0">
                            <button type="submit" name="submit" class="btn btn-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
        </div>
    </div>
</div>