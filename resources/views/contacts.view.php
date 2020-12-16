<?php inc('inc.head') ?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contactos
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?= config('global.address') ?></h5>
                        <p>
                           Morada
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?= config('global.phone') ?></h5>
                        <p>Telemóvel</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?= config('global.email') ?></h5>
                        <p>Email</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area contact-form text-right" id="myForm" method="post">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <div class="form-group  mb-20 ">
                                <input name="name" placeholder="Nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" class="common-input form-control" required="" type="text">
                                <p class="invalid-feedback name-invalid">

                                </p>
                            </div>
                            <div class="input-group  mb-20 ">
                                <input name="email" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="common-input  form-control" required="" type="email">
                                <p class="invalid-feedback email-invalid">
                                </p>
                            </div>
                            <div class="input-group mb-20">
                                <input name="subject" placeholder="Assunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" class="common-input form-control" required="" type="text">
                                <p class="invalid-feedback subject-invalid">
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control " name="message" placeholder="Mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" required=""></textarea>
                            <p class="invalid-feedback message-invalid">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button class="genric-btn primary" style="float: right;">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->

<script>

</script>



<?php inc('inc.footer') ?>
