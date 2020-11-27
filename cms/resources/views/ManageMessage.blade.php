@extends('layouts.Master')

@section('title', 'Zanynn - Message')

@section('content')

<div id="main-wrapper">

    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <section class="single-page-title">
        <section class="service-icon-style ptb-50">
            <div class="container text-center">
                <h2>Message list</h2><br><br>
                <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <table class="table table-lol">
                            <thead>

                                <tr>
                                    <th class="polinema">Date</th>
                                    <th class="polinema">Name</th>
                                    <th class="polinema">Email</th>
                                    <th class="polinema">Phone</th>
                                    <th class="polinema">Messages</th>
                                </tr><br>
                            </thead>
                            <tbody>
                                @foreach($messages as $a)
                                <tr>
                                    <td>{{$a->created_at}}</td>
                                    <td>{{$a->name}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->phone}}</td>
                                    <td>{{$a->message}}</td>
                                    <td>
                                        <a href="message/delete/{{ $a->id}}" class="badge badge-loldelete"><i class="fa fa-minus-square" aria-hidden="true"></i></a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/cetakmsg_pdf" class="btn btn-zan-noshadow btn-radiuszan" target="_blank"><i class="fa fa-print" aria-hidden="true"></i> Print PDF</a>
                    </div>
                </div>
                <!-- /.row -->

            </div>


        </section>
    </section>
    <!-- .page-title -->


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
                    <li><a href="/guide">Guide</a></li>
                    <li><a href="/contact">Contact</a></li>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="js/scripts.js"></script>
</body>

</html>
@endsection