<div class="col-lg-6 col-md-6 mb-4">
    <div class="feature-img">
        <img class="img-fluid" src="<?= $item->getBannerUrl() ?>"  alt="">
    </div>
    <a class="posts-title" href="<?= router()->url('news.show', ['slug' => $item->slug]) ?>"><h3><?= $item->title ?></h3></a>
    <p class="excert">
        <?= $item->subtitle ?>
    </p>
    <a href="<?= router()->url('news.show', ['slug' => $item->slug]) ?>" class="primary-btn">Ver Mais</a>
</div>