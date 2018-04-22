<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@section('title')
  @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="fragment" content="!">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/axios.js"></script>
<script src="/js/ajaxScript.js"></script>
  <link rel="stylesheet" href="/css/main.css">

</head>
<body>
    <div class="wraper">
    @section('header')
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
            <a class="navbar-brand" href="#"><img src="img/logo-kaspi-wo-text-white-38x39.png" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Магазин</a></li>
                <li><a href="">Платежи</a></li>
                <li><a href="">Мой Банк</a></li>
                <li><a href="">Red</a></li>
                <li><a href="">Бонус</a></li>
                <li><a href="">Гид</a></li>
                <li><a href="">Maps</a></li>
                <li><a href="">Переводы</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-16"> <nav class="navbar navbar-default" id="nav-head">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>
    <a class="navbar-brand" style="
    margin-left: -60px;" href="#">Магазин</a><div class="collapse navbar-collapse" id="navbar-main">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Поиск">
        </div>
        <button type="submit" class="btn btn-default">Найти</button>
      </form>
      <ul class="nav navbar-nav">
        <li>
          <a href="#">Мой город</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav></div>
        </div>
      </div>
            
  </header>
 <div class="container">
  <nav class="navbar navbar-default ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-ma">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
    </div>

    <div class="collapse navbar-collapse" id="navbar-ma">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#">СКИДКИ % <span class="sr-only">(current)</span></a>
        </li>
           <li class="dropdown">
          <a href="<?php echo route('index')?>">ТЕЛЕФОНЫ И ГАДЖЕТЫ</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ТВ и АУДИО<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Подпункт 1.1</a></li>
            <li><a href="#">Подпункт 1.2</a></li>
            <li><a href="#">Подпункт 1.3</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.4</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.5</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">КОМПЬЮТЕРЫ<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Подпункт 1.1</a></li>
            <li><a href="#">Подпункт 1.2</a></li>
            <li><a href="#">Подпункт 1.3</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.4</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.5</a></li>
          </ul>
        </li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ТЕХНИКА ДЛЯ ДОМА<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Подпункт 1.1</a></li>
            <li><a href="#">Подпункт 1.2</a></li>
            <li><a href="#">Подпункт 1.3</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.4</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.5</a></li>
          </ul>
        </li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ТЕХНИКА ДЛЯ КУХНИ<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Подпункт 1.1</a></li>
            <li><a href="#">Подпункт 1.2</a></li>
            <li><a href="#">Подпункт 1.3</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.4</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.5</a></li>
          </ul>
        </li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">АВТО ТОВАРЫ<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Подпункт 1.1</a></li>
            <li><a href="#">Подпункт 1.2</a></li>
            <li><a href="#">Подпункт 1.3</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.4</a></li>
            <li class="divider"></li>
            <li><a href="#">Подпункт 1.5</a></li>
          </ul>
        </li>
           
      </ul>
    </div>
  </div>
</nav>
 </div>          
</div>
 @show
 @section('slider')  
 <div class="row">
  <div class="col-md-18">
          <div class="slider">
          <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
  <!-- Индикаторы для карусели -->
  <ol class="carousel-indicators">
    <!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>   
  <!-- Слайды карусели -->
  <div class="carousel-inner">
    <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
    <div class="active item">
      <div class="carousel-caption">
        <p>Текст (описание) 1 слайда...</p>
      </div>
    </div>
    <!-- Слайд №2 -->
    <div class="item">
      <div class="carousel-caption">
        <h3>Second slide label</h3>
        <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
      </div>
    </div>
    <!-- Слайд №3 -->
    <div class="item">
      <div class="carousel-caption">
        <h3>Third slide label</h3>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <!-- Навигация для карусели -->
  <!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
  <a class="carousel-control right" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
        </div>
  </div>
  </div>
</div>
<div class="container text-center">   
  <div class="row">
    <div class="col-md-2">
      <div class="shop">
        <div class="shop-icon"></div>
        <h3>Магазин</h3>

      </div>
    </div>
    <div class="col-md-2">
      <div class="shop">
          <div class="pay-icon"></div>
        <h3>Магазин</h3>

      </div>
    </div>
  <div class="col-md-2">
      <div class="shop">
          <div class="bank-icon"></div>
        <h3>Магазин</h3>

      </div>
    </div>
    <div class="col-md-2">
      <div class="shop">
        <div class="kaspi-icon"></div>
        <h3>Магазин</h3>

      </div>
    </div>
    <div class="col-md-2">
      <div class="shop">
          <div class="maps-icon"></div>
        <h3>Магазин</h3>

      </div>
    </div>
    <div class="col-md-2">
      <div class="shop">
        <div class="translate-icon"></div>
        <img src="" alt="">
        <h3>Магазин</h3>

      </div>
    </div>
  </div>
</div>
@endsection
@yield('slider')

@yield('content')

<div class="footer">
  @section('footer')
  <footer id="myFooter">
        <div class="container">
            <div class="row">
                 <div class="col-sm-1">
                 
                </div>
                    <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
      
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                 
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2016 Copyright Text </p>
        </div>
    </footer>
</div>
@show    
</body> 
</html>