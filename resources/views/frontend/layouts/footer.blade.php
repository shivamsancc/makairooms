<div class="modal" id="myModal" style="background:linear-gradient(45deg, black, transparent);">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Query</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('helpquerysubmit')}}" method="POST">@csrf
                    <div class="form-group">
                        <label for="" class="text-dark font-weight-bold">Name</label>
                        <input type="text" class="form-control" name="name" required id="name" aria-describedby="helpId"
                            placeholder="John Doe">
                        <small id="helpId" class="form-text text-muted">Enter Your Name</small>
                    </div>
                    <div class="form-group">
                        <label for="" class="text-dark font-weight-bold">Email</label>
                        <input type="text" class="form-control" name="email" required id="email"
                            aria-describedby="helpId" placeholder="johndoe@gmail.com">
                        <small id="helpId" class="form-text text-muted">Enter your Email</small>
                    </div>
                    <div class="form-group">
                        <label for="" class="text-dark font-weight-bold">Phone</label>
                        <input type="text" class="form-control" name="phone" required id="phone"
                            aria-describedby="helpId" placeholder="85xxxxxx53">
                        <small id="helpId" class="form-text text-muted">Enter your 10 Digit Mobile Number</small>
                    </div>
                    <div class="form-group">
                        <label for="" class="text-dark font-weight-bold">Query</label>
                        <textarea class="form-control" name="helpquery" id="helpquery" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-outline-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Our Footer -->
<section class="footer_one home1">
    <div class="container pb70">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="footer_contact_widget">
                    <h4>Contact Us</h4>
                    <ul class="list-unstyled">
                        {{-- <li class="text-white df"><span class="flaticon-pin mr15"></span><a href="#">329 Qsueensberry Street, North Melbourne VIC 3051, Australia.</a></li> --}}
                        <li class="text-white"><span class="flaticon-phone mr15"></span><a href="tel:+91 9588275727">+91
                                9588275727</a></li>
                        <li class="text-white"><span class="flaticon-email mr15"></span><a
                                href="mailto:support@makairooms.com">support@makairooms.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-2 col-xl-3">
                <div class="footer_qlink_widget">
                    <h4>Company</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Help Center</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="{{route('blog')}}">Article & Tips</a></li>
                        <li><a href="#">Terms & Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5 col-md-6 col-lg-2 col-xl-2">
                <div class="footer_qlink_widget pl0">
                    <h4>Discover</h4>
                    <ul class="list-unstyled">
                        @foreach ($getFooternav as $item)
                        <li><a href="#">{{$item->city_name}}</a></li>
                        @endforeach
                        <hr>
                        <li><a href="{{route('indexsitemap')}}">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-4 col-xl-4">
                <div class="footer_social_widget">
                    <h4>Subscribe</h4>
                    <p class="text-white mb20">We don’t send spam so don’t worry.</p>
                    @include('frontend.layouts.newsletter_form')
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container pt20 pb30">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="copyright-widget mt10 mb15-767">
                    <p>© Makairooms {{date('Y')}} - All rights reserved.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="footer_logo_widget text-center mb15-767">
                    <div class="wrapper">
                        <div class="logo text-center">
                            <img src="{{ asset('/web/themes/guido') }}/images/rsz_makairoom_log0_white.png"
                                alt="footer-logo.svg">
                            {{-- <span class="logo_title text-white pl15">Guido</span> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="footer_social_widget text-right tac-smd mt10">
                    <ul class="mb0">
                        <li class="list-inline-item"><a href="https://www.facebook.com/makairooms/"><i
                                    class="fab fa-facebook fa-3x"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/makairooms"><i
                                    class="fab fa-twitter fa-3x"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/makairooms/"><i
                                    class="fab fa-instagram fa-3x"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-3x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/jquery-3.6.0.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/jquery-migrate-3.0.0.min.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/popper.min.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/bootstrap.min.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/jquery.mmenu.all.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/ace-responsive-menu.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/bootstrap-select.min.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/snackbar.min.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/simplebar.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/parallax.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/scrollto.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/jquery-scrolltofixed-min.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/jquery.counterup.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/wow.min.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/progressbar.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/slider.js?v=2.02"></script>
<script type="text/javascript" src="{{ asset('/web/themes/guido') }}/js/timepicker.js?v=2.02"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js?v=2.02">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
@yield('extrajs')
<!-- Custom script for all pages -->
<script type="text/javascript">
    //=========================News Letter submission==================================
    $('#newspopButton').click(function (e) {
        e.preventDefault();
        var mailformat =
            /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
        var newsletter_email = $('#newsletter_email').val();
        var newsletter_mac_id = $.cookie("ConnectoID");
        if (newsletter_email == '') {
            alert("Email is Required");
            return false;
        }
        const validateEmail = (email) => {
            var regex =
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return regex.test(String(email).toLowerCase());
        }
        if (validateEmail(newsletter_email)) {
            document.getElementById("newsletter_email").innerText = "Valid email";
            $.ajax({
                url: "{{ route('newslettersubbmit') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    newsletter_email: newsletter_email,
                    newsletter_mac_id: newsletter_mac_id,
                },
                success: function (result) {

                    if (result.trim() == 'unique') {
                        alert('Saved Sucessfully');
                        $('#error_email').html(
                            '<label class="text-success">Saved Sucessfully</label>');
                        $('#institute_url').removeClass('is-invalid');
                        $('#institute_url').addClass('is-valid');
                        $('#register').attr('disabled', 'false');
                        $("#newsletter_form")[0].reset();
                    } else {
                        alert('Already Saved');
                        $('#error_email').html(
                            '<label class="text-danger">Already Saved</label>');
                        $('#institute_url').addClass('is-invalid');
                        $('#register').attr('disabled', 'true');
                        $('#newspopButton').attr('disabled', 'true');
                        $("#newsletter_form")[0].reset();
                    }
                }
            })
        } else {
            alert("Not Valid Email Address");
            document.getElementById("newsletter_email").focus();
        }

    });

</script>
<script src="{{ asset('/web/themes/guido') }}/js/script.js?v=2.02"></script>
</body>

</html>
