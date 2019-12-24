@extends('layouts.includes.app')
@section('content')
<!-- About Section -->

<!-- Masthead -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center text-center">
      <div class="col-lg-10 align-self-end">
        <h1 class="text-uppercase text-white font-weight-bold">東西不見了嗎？來這邊找找看吧！</h1>
        <hr class="divider my-4">
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-white-75 font-weight-light mb-5">使用說明打這邊</p>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">使用介紹</a>
      </div>
    </div>
  </div>
</header>


<section class="page-section bg-primary" id="about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="text-white mt-0">相關內容</h2>
        <hr class="divider light my-4">
        <h5 class="text-white mb-4" style="text-align:left">瀏覽器使用說明：<br>
          1.1本系統適用IE10(以上)、Google Chrome、FireFox、Safari瀏覽器。<br>
          申請須知：<br>
          2.1拾得遺失物招領於公告後6個月內，可上網認領或攜帶國民身分證、本人印章至發文單位認領。<br>
          2.2拾得人領回公告於公告後3個月內，需攜帶國民身分證、本人印章至發文單位認領。<br>
          2.3如有冒領情形，自負法律責任。</h5>
        <a class="btn  btn-xl sr-button" href="{{ url('/search_record') }}" style="background-color: #fff">遺失物查詢!</a>
      </div>
    </div>
  </div>


</section>

@endsection
