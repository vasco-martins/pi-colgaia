<div class="single-blog">
    <div class="thumb mb-3">
        <img class="img-fluid" src="<?= $page->getBannerUrl() ?>" alt="">
    </div>
    <a href="<?= router()->url('pages.show', ['slug' => $page->slug])?>">
        <h5><?= $page->title ?></h5>
    </a>
    <p>
        <?= $page->subtitle ?>
    </p>
    <a href="<?= router()->url('pages.show', ['slug' => $page->slug])?>" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Ver mais</span><span class="lnr lnr-arrow-right"></span></a>
</div>