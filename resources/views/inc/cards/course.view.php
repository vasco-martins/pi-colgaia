<div class="single-popular-carusel">
    <div class="thumb-wrap relative">
        <div class="thumb relative">
            <div class="overlay overlay-bg"></div>
            <img style="max-height:150px; width:auto" class="img-fluid" src="<?= $page->getBannerUrl() ?>" alt="">
        </div>

    </div>
    <div class="details mt-2">
        <a href="<?= router()->url('pages.show', ['slug' => $page->slug])?>">
            <h4>
                <?= $page->title ?>
            </h4>
        </a>
        <p>
            <?= $page->subtitle ?>
        </p>
    </div>
</div>