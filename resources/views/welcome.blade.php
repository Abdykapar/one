<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        @media(min-width: 768px){
            .fixed{
                position: fixed;
                bottom: 19px;
                max-width: 31.15%;
            }
            .myimg{
                width: 60%;
                margin: 50px;
            }
            #menu-r{
                margin: 5% 10%;
            }
        }
        @media(max-width: 767px){
            .myimg{
                width: 50%;
            }
            .col-xs-6{
                padding: 10px 0 10px 40px;
            }
            .navbar-toggle{
                margin-top: 15px;
            }
            .myimg {
                width: 140px;
            }
            #bir{
                padding-bottom: 20px;
            }
        }
    </style>
</head>
<body style="margin-top: 20px">
<div class="container-fluid">
    <div class="row">
    <div class="col-md-4 col-sm-4" id="bir">
            <nav class="nav navbar-default navbar-left"  style="width: 100%" id="nav">
                <div class="container-fluid">
                    <div class="row">
                        <div class="nav col-md-12 col-sm-12 col-xs-6">
                            <h1 style="font-size: 80px;">
                                <a href="/home">
                                    <img src="/image/logo1.png" id="img" class="img img-responsive myimg" style="height: auto">
                                </a>
                            </h1>
                        </div>
                        <div class="navbar-header col-xs-6">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-r">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="collapse navbar-collapse" id="menu-r">
                    <nav class="sidebar">
                        <h4 style="margin: 5px;">НАШИ ПРОЕКТЫ:</h4><hr>
                        <ul class="nav sidebar">
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Akirki</a></li>
                        </ul>
                        <hr>
                        <h4 style="margin: 5px">ПОПУЛЯРНЫЕ ЗАПИСИ И СТРАНИЦЫ</h4><hr>
                        <ul class="nav sidebar">
                            <li>
                                <img src="/bootstrap/images/2.jpg" class="img img-responsive" style="height: 50px">
                                <a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Akirki</a></li>
                        </ul>
                        <hr>
                        <h4 style="margin: 5px">НЕДАВНИЕ КОММЕНТАРИИ</h4><hr>
                        <ul class="nav sidebar">
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Home</a></li>
                            <li><a href="" class="hvr-underline-from-left" >Akirki</a></li>
                        </ul>
                        <hr>
                        <h4 style="margin: 5px" >СОЦИАЛЬНЫЕ СЕТИ</h4><hr>
                        <ul class="nav sidebar">
                            <li class="block" style="margin: 10px">
                                <div class="row">
                                    <a href="" class="hvr-underline-from-left" >
                                        <div class="col-md-5 col-sm-6 col-xs-5">
                                            <img src="/bootstrap/images/2.jpg" class="img img-responsive">
                                        </div>
                                        <div class="col-md-7 col-sm-6 col-xs-7">
                                            <span>Home</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <hr>
                        <h4 style="margin: 5px">МЕНЮ</h4><hr>
                        <ul class="nav sidebar" >
                            <li><a href="" class="hvr-underline-from-left" >О нас</a></li>
                        </ul>
                    </nav>
            </div>
                    </div>
                </div>
            </nav>
    </div>
    <div class="col-md-8 col-sm-8">
        @foreach($articles as $category)
        <div class="thumbnail" style="background-color: rgba(169, 169, 169, 0.08);padding: 30px">
            <img src="/bootstrap/images/1.jpg" class="img img-responsive">
            <div class="caption">
            {!!  $category->content  !!}
            </div>
        </div>
        @endforeach
</div>
</div>
</div>
<script src="/bootstrap/js/jquery-1.11.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(window).bind('scroll', function () {
        var a = document.getElementById('nav');

        if ($(window).scrollTop() > a.clientHeight-650) {
            $('#nav').addClass('fixed');
        }
        else {
            $('#nav').removeClass('fixed');
        }
    });
</script>
</body>
</html>