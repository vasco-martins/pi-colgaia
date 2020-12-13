<div class="single-carusel row align-items-center">
    <div class="col-12 col-md-6 thumb">
        <img class="img-fluid" src="<?= $page->getBannerUrl() ?>" alt="">
    </div>
    <div class="details col-12 col-md-6">

        <a href="<?= router()->url('news.show', ['slug' => $page->slug])?>"><h4><?= $page->title ?></h4></a>
        <p>
            <?= $page->subtitle ?>
        </p>
    </div>
</div>