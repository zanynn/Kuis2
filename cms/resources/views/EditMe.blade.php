@extends('layouts.Master')

@section('title', 'Zanynn - Edit Me')

@section('content')

<div id="main-wrapper">

    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <section class="single-page-title">
        <section class="contact-form ptb-50">
            <div class="container text-center">
                <h2>Edit Page Me</h2>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 table-lol">
                        <div class="col-md-6">
                            <form action="/me/update/{{$me->id}}" method="post">
                                {{csrf_field()}}
                                <input type="Hidden" class="form-control" name="id" value="{{$me->id}}"></br>
                                <div class="form-group"><br>
                                    <label for="nameMe" class="zantext">Name</label>
                                    <input type="text" class="form-control" required="required" name="nameMe" value="{{$me->nameMe}}"></br>
                                </div>
                                <div class="form-group">
                                    <label for="imageMe" class="zantext">Url Image</label>
                                    <input type="text" class="form-control" required="required" name="imageMe" value="{{$me->imageMe}}"></br>
                                </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6"><br><br>
                            <div class="form-group">
                                <label for="descriptionMe" class="zantext">Description</label>
                                <textarea class="form-control textareacontent" required="required" name="descriptionMe">{{$me->descriptionMe}}</textarea></br>
                            </div>
                        </div><!-- /.col-md-6 -->
                        <button type="submit" name="edit" class="btn btn-zan btn-radiuszan">SAVE</button><br><br>
                        </form>
                    </div><!-- /.col-md-8 -->
                </div>

            </div>
        </section>
    </section>
    <!-- .page-title -->


    <!-- .contact-form-->


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

</div>
<!-- #main-wrapper -->



<!-- Script -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/mobile-menu.js')}}"></script>
<script src="{{asset('js/flexSlider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>
@endsection