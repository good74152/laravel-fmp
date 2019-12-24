<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title') 遺失物招領平台</title> <!--頁籤標題顯示出公告主題 -->

  <!-- Font Awesome Icons -->
  <link href = "{{asset ('app-assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{asset ('app-assets/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset ('app-assets/css/creative.min.css')}}" rel="stylesheet">
  
  <!-- Laravel Mix css -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

  <!-- Submit Website Form css -->
  <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.14567" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jotfor.ms/css/printForm.css?3.3.14567" type="text/css" media="print" rel="stylesheet" />
  <link href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.14567" type="text/css" rel="stylesheet" />
  <link href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5dca5ac9a5e86d17235d90c1" type="text/css" rel="stylesheet" />

  <!--Jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"  style="color: black;">首頁</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          @guest
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/login') }}">會員登入</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/search_record') }}">遺失物查詢</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/bulletin') }}">懸賞頁面</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/admin') }}">管理者登入</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/userpost') }}">發布懸賞</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">登出
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/search_record') }}">遺失物查詢</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/bulletin') }}">懸賞頁面</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/admin') }}">管理者登入</a>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
