<?php inc('inc.head') ?>


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								<?= config('global.websiteName') ?>
							</h1>
							<p class="pt-10 pb-10">
                                <?= config('global.websiteDescription') ?>
                            </p>
						</div>
					</div>
				</div>					
			</section>

			<!-- End feature Area -->
					
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Cursos</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
                            <?php
                                foreach($pages as $page) {
                                    if($page->template()->slug == 'course') {
                                        echo '<div class="single-popular-carusel">';
                                        inc('inc.cards.course', ['page' => $page]);
							            echo '</div>';
                                    }
                                }
                            ?>
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->
			


			
		
			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Notícias</h1>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
                            <?php
                            foreach($news as $page) {
                                inc('inc.cards.news-large', ['page' => $page]);
                            }
                            ?>
							</div>																						
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->





<?php inc('inc.footer') ?>