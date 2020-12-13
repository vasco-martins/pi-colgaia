<?php inc('inc.head') ?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home" style="background-image: url('<?= $page->getBannerUrl() ?>') !important;">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?= $page->title ?>
                </h1>
                <p class="text-white link-nav"><?=  $page->subtitle ?></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start popular-courses Area -->
<section class="top-category-widget-area pt-90 pb-90 section-gap">
    <div class="container">
        <?= htmlspecialchars_decode($page->content) ?>

    </div>
</section>
<!-- End popular-courses Area -->

<?php inc('inc.footer') ?>
