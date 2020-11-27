@extends('layouts.Master')

@section('title', 'Zanynn - Add Product')

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
                <h2>Add User</h2>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 table-lol">
                        <form action="/createuser" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group"><br><br>
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" required="required" name="name" placeholder="Add Name Here"></br>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" required="required" name="email" placeholder="Email Here"></br>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" required="required" name="password" required autocomplete="new-password" placeholder="Password Here"></br>
                                </div>
                            </div>
                            <div class="col-md-6"><br><br>
                                <div class="form-group">
                                    <label for="roles">Roles</label>
                                    <input type="text" class="form-control" required="required" name="roles" placeholder="Add Roles Here"></br>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="upload-zan-create" required="required" name="image"></br>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Product</button><br><br>
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
                                <li><a href="https://www.instagram.com/zanynn_/"><i class="fa fa-instagram"></i></a>
                                </li>
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
                <span class="copytext">&copy; ZANYNN. All rights reserved. | Design By: <a href="#">Muhammad Fauzan Tri
                        Aji - 1931710150</a></span>

                <ul class="list-inline pull-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/guide">Guide</a></li>
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

</div>
<!-- #main-wrapper -->



<!-- Script -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
</script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/mobile-menu.js')}}"></script>
<script src="{{asset('js/flexSlider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>
@endsection