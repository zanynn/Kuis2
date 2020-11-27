@extends('layouts.Master')

@section('title', 'Zanynn - Contact')
    
@section('content')

<div id="main-wrapper">

<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<section class="single-page-title">
<section class="contact-form ptb-0">
    <div class="container text-center">
        <h2>Contact Me</h2>

        <div class="row">
            <div class="col-md-8 col-md-offset-2 table-lol">
            <div class="col-md-6">  <br><br>
                <form action="/send" method="post">
                    @csrf
                    <div class="form-group user-name">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control"required="required" name="name" placeholder="Name"></br>
                    </div>
                    <div class="form-group user-email">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control"required="required" name="email" placeholder="Email"></br>
                    </div>
                    <div class="form-group user-phone">
                        <label for="phone" class="sr-only">Website</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone"></br>
                    </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6"><br><br>
                    <div class="form-group user-message">
                        <label for="message" class="sr-only">Message</label>
                        <textarea class="form-control testt"required="required" name="message" placeholder="Write Message"></textarea>
                    </div>
                    </div><!-- /.col-md-6 -->
                    <button type="submit" class="btn btn-primary btn-radiuszan"><i class="fa fa-paper-plane" aria-hidden="true"></i>send
                </button><br><br>
                </form>
            </div>
        </div>
</section>
</section>

<!-- .page-title -->


<!-- .contact-form-->

<section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.506222238191!2d112.6133481142119!3d-7.946523581361956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827687d272e7%3A0x789ce9a636cd3aa2!2sPoliteknik%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1603077087635!5m2!1sid!2sid" 
            width="1500" height="400" frameborder="1px" 
            style="border:0;" allowfullscreen="" 
            aria-hidden="false" tabindex="0"></iframe>
</section>
    <!--.map-section-->

    <footer class="footer">

<!-- Footer Widget Section -->
<div class="footer-widget-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-4 footer-block">
                <div class="footer-widget widget_text">
                    <div class="footer-logo">
                        <a href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
                    </div>
                    <p>Our business was founded by car enthusiasts, just like you. Our passion has fueled us
                    to become the one stop shop for all your performance related needs. We’re a small team
                    based out of Las Vegas, Nevada with over 15 years of experience in both racing and
                    the automotive aftermarket!</p>

                </div>
            </div><!-- /.col-sm-4 -->

            <div class="col-sm-4 footer-block">
                <div class="footer-widget widget_text">
                    <h3>We will make your car amazing</h3>
                    <p>We have been following the development of the 86 chassis since the very beginning to 
                    thoroughly understand its strengths and weaknesses. This helps us effectively source or 
                    manufacture the best possible parts for your car! If we wouldn’t put it on our car, 
                    we don’t expect you to either.</p>
                </div>
            </div><!-- /.col-sm-4 -->

            <div class="col-sm-4 footer-block last">
                <div class="footer-widget widget_text">
                    <h3>Contact Us</h3>
                    <address>
                        Call Us 08xxxxx or 021xxxxxxx<br>
                        Send an Email on <a href="mailto:#">zanynn@hotmail.com</a><br>
                        Visit Us The Breeze , South Tangerang<br>
                        Indonesia<br>
                    </address>

                    <ul class="list-inline social-links">
                        <li><a href="https://www.instagram.com/zanynn_/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/Zanynn_"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCVrKbudeXfPYKomd0_K1AJg"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.twitch.tv/riotgames"><i class="fa fa-twitch"></i></a></li>
                    </ul>
                </div>
            </div><!-- /.col-sm-4 -->
        </div>
    </div>
</div><!-- /.Footer Widget Section -->

<div class="copyright-section">
    <div class="container clearfix">
        <span class="copytext">&copy; ZANYNN. All rights reserved. | Design By: <a href="#">Muhammad Fauzan Tri Aji - 1931710150</a></span>

        <ul class="list-inline pull-right">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/guide">Guide</a></li>
            <li class="active"><a href="/contact">Contact</a></li>
            <li><a href="/me">Me</a></li>
        </ul>
    </div><!-- .container -->
</div><!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

</div>
<!-- #main-wrapper -->



<!-- Script -->

<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
@endsection