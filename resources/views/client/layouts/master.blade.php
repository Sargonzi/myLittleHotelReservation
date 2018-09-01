<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>little Hotel</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/set1.css')}}"/>
    <link href="{{ asset('css/overwrite.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse.collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><span>littleHotel</span></a>
        </div>
        <div class="navbar-collapse collapse">
            <div class="menu">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="{{ route('clients.home') }}">Home</a></li>
                    <li role="presentation"><a href="{{ route('clients.booking') }}">Booking</a></li>
                    <li role="presentation"><a href="{{ route('clients.room') }}">Rooms</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li role="presentation"><a href="{{ route('clients.profile') }}">Profile</a></li>
                            <li role="presentation"><a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <li role="presentation"><a href="{{ route('login') }}">Login</a></li>
                            <li role="presentation"><a href="{{ route('register') }}">Register</a></li>
                        @endauth

                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<footer>
    <div class="inner-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 f-about">
                    <a href="index.html"><h1><span>little</span>Hotel</h1></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero vestibulum
                        volutpat libero sollicitudin vitae Curabitur ac aliquam consectetur adipiscing elit Cras
                        suscipit arcu libero
                    </p>
                </div>
                <div class="col-md-4 l-posts">
                    <h3 class="widgetheading">Latest Posts</h3>
                    <ul>
                        <li><a href="#">This is awesome post title</a></li>
                        <li><a href="#">Awesome features are awesome</a></li>
                        <li><a href="#">Create your own awesome website</a></li>
                        <li><a href="#">Wow, this is fourth post title</a></li>
                    </ul>
                </div>
                <div class="col-md-4 f-contact">
                    <h3 class="widgetheading">Stay in touch</h3>
                    <a href="#">
                        <p><i class="fa fa-envelope"></i> example@gmail.com</p>
                    </a>
                    <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
                    <p><i class="fa fa-home"></i> Enno inc | PO Box 23456 Little Lonsdale St, New York <br> Victoria
                        8011 USA</p>
                </div>
            </div>
        </div>
    </div>


    <div class="last-div">
        <div class="container">
            <div class="row">
                <div class="copyright">
                    &copy; eNno Theme. All Rights Reserved
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eNno
                        -->
                        Designed by <a href="#">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <ul class="social-network">
                    <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                    <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                    <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                    <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a>
                    </li>
                    <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fliplightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/functions.js')}}"></script>
<script type="text/javascript">
    $('.portfolio').flipLightBox()
</script>
@stack('scripts')
</body>
</html>