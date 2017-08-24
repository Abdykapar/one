<!DOCTYPE html>
<html>
<head>
    <title>Great Taste a Hotels and Restaurants Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Great Taste Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="/boot/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/boot/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/boot/js/jquery-1.11.1.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
    <style>
        @media(min-width: 990px){
            .fixed{
                position: fixed;
                bottom: 10px;
                margin-bottom: 20px;
                float: left;
            }
            .social{
                float: left;
            }
        }
    </style>
</head>
<body>
<div class="banner-body">
    <div class="container">
        <div class="banner-body-content">
            <div class="col-md-3 col-xs-3 banner-body-left" id="my_row">
                <div class="row">
                    <div class="logo">
                        <h1>
                            <a href="/home">AIKYN</a>
                        </h1>
                    </div>
                    <div class="top-nav">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-r">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="menu-r" style="position: relative">
                            <h4 style="margin: 5px;">НАШИ ПРОЕКТЫ:</h4><hr>
                            <nav class="stroke">
                                <ul class="nav navbar-nav">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('category',$category->id) }}" class="hvr-underline-from-left">#{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                                <br>
                                <h4 style="margin: 5px">ПОПУЛЯРНЫЕ ЗАПИСИ И СТРАНИЦЫ</h4><hr>
                                <ul class="nav navbar-nav">
                                    @foreach($articles->take(5) as $article)
                                        <li>
                                            <a href="{{ url('single',$article->id) }}" class="hvr-underline-from-left" style="display: flex;max-height: 60px">
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <img src="/image/{{ $article->image }}" class="img img-responsive">
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-xs-8">
                                                    {{ $article->title }}
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <br>
                                <h4 style="margin: 5px">НЕДАВНИЕ КОММЕНТАРИИ</h4><hr>
                                <ul class="nav navbar-nav">
                                    @foreach($comments->take(5) as $comment)
                                        <li>
                                            <a href="{{ url('single',$comment->article->id) }}" class="hvr-underline-from-left">
                                                <div class="">
                                                    <span class="fa fa-user"></span> {{ $comment->name }} на "{{ $comment->article->title }}"
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <br>
                                <h4 style="margin: 5px" >СОЦИАЛЬНЫЕ СЕТИ</h4><hr>
                                <ul class="nav navbar-nav" >
                                    <li  class="">
                                        <div id="social" class="footer-right" style="margin: 10px 0">
                                            <ul class="social-nav model-3">
                                                <li><a href="#" class="icon icon-border facebook"></a></li>
                                                <li><a href="#" class="icon icon-border twitter"></a></li>
                                                <li><a href="#" class="icon icon-border googleplus"></a></li>
                                                <li><a href="#" class="icon icon-border github"></a></li>
                                                <li><a href="#" class="icon icon-border rss"></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <br>
                                <h4 style="margin: 5px">МЕНЮ</h4><hr>
                                <ul class="nav navbar-nav" style="position: inherit">
                                    <li>
                                        <a href="{{ route('about') }}" class="hvr-underline-from-left">
                                            О нас
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1  col-xs-9 banner-body-right" id="my_id">
                @yield('content')
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<script src="/boot/js/bootstrap.js"></script>
<script>
    $(window).bind('scroll', function () {
        var a = document.getElementsByClassName('navbar-default');
        var b = document.getElementById('my_id');
        if (b.clientHeight > a[0].clientHeight) {
            if ($(window).scrollTop() > a[0].clientHeight - 400) {
                $('#my_row').addClass('fixed');
                $('#social').addClass('social');
                $('#my_id').addClass('col-md-offset-4').removeClass('col-md-offset-1');
            } else {
                $('#my_row').removeClass('fixed');
                $('#social').removeClass('social');
                $('#my_id').removeClass('col-md-offset-4').addClass('col-md-offset-1');
            }
        }
    });
</script>
</body>
</html>