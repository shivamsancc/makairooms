<section class="our-error">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="error_page footer_apps_widget">
                    <img class="img-fluid" src="{{ asset('/web/themes/guido') }}/images/resource/error.png" alt="error.png">
                    <div class="erro_code"><h1>Ohh! Page Not Found</h1></div>
                    <p>We can’t seem to find the page you’re looking for</p>
                    <form class="form-inline mailchimp_form">
                        <label class="sr-only" for="inlineFormInputName">Name</label>
                        <input type="email" class="form-control" name="newsletter_email" id="newsletter_email"
                        aria-describedby="helpId" placeholder="Email Id">
                        <button type="submit" id="newspopButton" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
                <a class="btn_error" href="{{route('homepage')}}">Back To Home</a>
            </div>
        </div>
    </div>
</section>