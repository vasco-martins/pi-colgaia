<?php
    $items = \App\Models\Page::where(['page_id IS NULL']);

    function loadItems(array $items) {
        usort($items, function ($a, $b) {
            return $a->position <= $b->position ? -1 : 1;
        });
        foreach($items as $item) {
            $pages = $item->pages();
            if(count($pages) == 0) {
                echo '<li><a href="' . router()->url('pages.show', ['slug' => $item->slug]) . '">' . $item->title . '</a></li>';
            } else {
              echo '<li class="menu-has-children"><a href="' . router()->url('pages.show', ['slug' => $item->slug]) . '">' . $item->title . '</a>
                    <ul>';
                    loadItems($pages);
                echo '</ul></li>';
            }
        }
    }
?>

<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="<?= config('global.facebook') ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= config('global.instagram') ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="<?= 'tel:' . config('global.phone') ?>"><span class="lnr lnr-phone-handset"></span> <span class="text"><?= config('global.phone') ?></span></a>
                    <a href="<?= 'mailto:' . config('global.email') ?>"><span class="lnr lnr-envelope"></span> <span class="text"><?= config('global.email') ?></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="<?= router()->url('home.index') ?>"><img width="100" class="img-fluid h-auto" src="<?= env('ASSETS_URL', config('app.url')) . '/uploads/' . config('global.websiteLogo') ?>" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li><a href="<?= router()->url('home.index') ?>">Home</a></li>


                    <?php loadItems($items); ?>

                    <li><a href="<?= router()->url('news.index') ?>">Notícias</a></li>
                    <li><a href="<?= router()->url('contacts') ?>">Contactos</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->