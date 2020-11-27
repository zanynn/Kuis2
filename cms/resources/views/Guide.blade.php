@extends('layouts.Master')

@section('title', 'Zanynn - Guide')
    
@section('content')

<div id="main-wrapper">

<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>


<section class="single-page-title">
    <div class="container text-center">
        <h2>Guide</h2>
    </div>
</section>
<!-- .page-title -->

<section class="service-icon-style ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Guide</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>


    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="promo-content">
                        <h3>Check out our products</h3>

                        <p>Our products use first-class quality and materials</p>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-thumbs-o-up"></i>
                    </div>
                    <div class="promo-content">
                        <h3>Choose according to your wishes</h3>

                        <p>We offer 2 rocket bunny bodykit products that can beautify your car.</p>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="promo-content">
                        <h3>See Comments From Our Satisfied Customers</h3>

                        <p>Our products are high-end products where many people use our product.</p>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="promo-content">
                        <h3>Make a purchase</h3>

                        <p>We will provide goods insurance up to your home.</p>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->
            </div>

        </div>
        <!-- /.row -->

    </div>


</section>
<!-- .about-text-->
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
                <li class="active"><a href="/guide">Guide</a></li>
                <li><a href="/contact">Contact</a></li>
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

<!-- Script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
@endsection