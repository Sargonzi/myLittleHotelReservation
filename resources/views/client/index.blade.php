@extends ('client.layouts.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="slider">
                <div class="img-responsive">
                    <ul class="bxslider">
                        <li><img src="{{ asset('img/01.jpg')}}" alt=""/></li>
                        <li><img src="{{ asset('img/01.jpg')}}" alt=""/></li>
                        <li><img src="{{ asset('img/01.jpg')}}" alt=""/></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2>Book on the <b>G</b>o</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat
                        libero sollicitudin vitae Curabitur ac aliquam <br> lorem sit amet scelerisque justo</p>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                        <h4>Responsive</h4>
                        <div class="icon">
                            <i class="fa fa-heart-o fa-3x"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
                        <div class="ficon">
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                        <h4>Multi Purpose</h4>
                        <div class="icon">
                            <i class="fa fa-desktop fa-3x"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
                        <div class="ficon">
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
                        <h4>Easy Customize</h4>
                        <div class="icon">
                            <i class="fa fa-location-arrow fa-3x"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
                        <div class="ficon">
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2>Galleries</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat
                        libero sollicitudin vitae Curabitur ac aliquam <br>
                    </p>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="grid">
            <figure class="effect-zoe">
                <img src="img/25.jpg" alt="img25"/>
                <figcaption>
                    <h2>Title <span>Name</span></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in
                        his face.</p>
                </figcaption>
            </figure>
            <figure class="effect-zoe">
                <img src="{{ asset('img/26.jpg')}}" alt="img26"/>
                <figcaption>
                    <h2>Title <span>Name</span></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in
                        his face.</p>
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="content">
        <div class="grid">
            <figure class="effect-zoe">
                <img src="{{ asset('img/27.jpg') }}" alt="img27"/>
                <figcaption>
                    <h2>Title <span>Name</span></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in
                        his face.</p>
                </figcaption>
            </figure>
            <figure class="effect-zoe">
                <img src="{{ asset('img/30.jpg') }}" alt="img30"/>
                <figcaption>
                    <h2>Title <span>Name</span></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in
                        his face.</p>
                </figcaption>
            </figure>
        </div>
    </div>
@endsection