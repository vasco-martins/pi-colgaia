<?php inc('inc.head') ?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                  Notícias
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start popular-courses Area -->
<section class="post-content-area pt-90 pb-90 section-gap">
    <div class="container">
      <div class="row">
          <div class="post-list col-lg-12">
              <div class="single-post row">

                <?php
                    foreach($news as $item) {
                        inc('inc.cards.news', ['item' => $item]);
                    }
                ?>

              </div>

          </div>
      </div>
    </div>
</section>
<!-- End popular-courses Area -->

<?php inc('inc.footer') ?>
