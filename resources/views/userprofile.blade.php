@extends('layouts.includes.app')
@section('content')
<!-- About Section -->


<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    <h2 class="text-center mt-0">{{ $user->name }}的個人首頁</h2>
    <hr class="divider my-4">
    <form class="form-horizontal" action="{{ url('/userpofile/subscribe/'.Auth::user()->id)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('post') }}
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-gem text-primary mb-4"></i>
          <h3 class="h4 mb-2">姓名</h3>
          <p class="text-muted mb-0">{{ $user->name }}</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
          <h3 class="h4 mb-2">Email</h3>
          <p class="text-muted mb-0">{{ $user->email }}</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-globe text-primary mb-4"></i>
          <h3 class="h4 mb-2">訂閱：城市名</h3>
          <input type="text" class="form-control" id="" placeholder="{{ $user->subscribe_city }}" name="subscribe_city">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-heart text-primary mb-4"></i>
          <h3 class="h4 mb-2">訂閱：物品名</h3>
          <input type="text" class="form-control" id="" placeholder="{{ $user->subscribe_thingname }}" name="subscribe_thingname">
        </div>
      </div>
    </div>
    <div class="form-group">
      <br>
      <br>
      <div class="col-md-offset-2 col-md-12">
      <center>
        <button type="submit" class="btn btn-primary">訂閱!</button>
      </center>
      </div>
    </div>
  </form>

  </div>
</section>

<section class="page-section" id="contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="mt-0">訂閱內容：</h2>
        <hr class="divider my-4">
        <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
        <div>+1 (202) 555-0149</div>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
        <!-- Make sure to change the email address in anchor text AND the link below! -->
        <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
      </div>
    </div>
  </div>
</section>

<script>

</script>

@endsection
