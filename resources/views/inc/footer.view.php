<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">

        <div class="row d-flex align-items-center">
            <img width="150" class="img-fluid h-auto mr-5" src="<?= env('ASSETS_URL', config('app.url')) . '/uploads/' . config('global.websiteLogo') ?>" alt="">
            <a href="<?= router()->url('contacts')?>" class="genric-btn primary circle arrow ml-5" style="height:50px">Contactos<span class="lnr lnr-arrow-right"></span></a>
        </div>

        <div class="footer-bottom row align-items-center justify-content-between">


            <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-6 col-sm-12 footer-social">
                <a href="<?= config('global.facebook')?>"><i class="fa fa-facebook"></i></a>
                <a href="<?= config('global.instagram')?>"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->


<script src="<?= assets('js/jquery-2.2.4.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?= assets('js/bootstrap.min.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?= assets('js/easing.min.js') ?>"></script>
<script src="<?= assets('js/hoverIntent.js') ?>"></script>
<script src="<?= assets('js/superfish.min.js') ?>"></script>
<script src="<?= assets('js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= assets('js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= assets('js/jquery.tabs.min.js') ?>"></script>
<script src="<?= assets('js/jquery.nice-select.min.js') ?>"></script>
<script src="<?= assets('js/owl.carousel.min.js') ?>"></script>
<script src="<?= assets('js/mail-script.js') ?>"></script>
<script src="<?= assets('js/main.js') ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">

    // Handle Contact form submit

    const $inputName = $('input[name=name]');
    const $inputEmail = $('input[name=email]');
    const $inputSubject = $('input[name=subject]');
    const $inputMessage = $('textarea[name=message]');

    $(document).ready(function() {

        $('.contact-form').submit(function(e) {
            e.preventDefault();



            const formData = {
                'name': $inputName.val(),
                'email': $inputEmail.val(),
                'subject': $inputSubject.val(),
                'message': $inputMessage.val(),
            };

            $.ajax({
                type: 'POST',
                url: '<?= router()->url('message.store') ?>',
                data: formData,
                dataType: 'json',
                encode: true,
                })
            .done(function(data) {
                if(!data.success) {
                    if(data.errors.name) {
                        $inputName.addClass('is-invalid')
                        $('.name-invalid').text(data.errors.name);
                    }
                    if(data.errors.email) {
                        $inputEmail.addClass('is-invalid')
                        $('.email-invalid').text(data.errors.email);
                    }
                    if(data.errors.subject) {
                        $inputSubject.addClass('is-invalid')
                        $('.subject-invalid').text(data.errors.subject);
                    }
                    if(data.errors.message) {
                        $inputMessage.addClass('is-invalid')
                        $('.message').text(data.errors.message);
                    }
                } else {
                    swal({
                        title: "Sucesso!",
                        text: "A mensagem foi enviada com sucesso!",
                        icon: "success",
                    });
                }

            })
        })

    })

</script>
</body>
</html>