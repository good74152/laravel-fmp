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
          <p class="text-muted mb-0" style="font-size:24px;">{{ $user->name }}</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
          <h3 class="h4 mb-2">Email</h3>
          <p class="text-muted mb-0"  style="font-size:24px;">123@gmail.com</p>
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
  
        <h2 class="mt-0">{{ $user->name }}的所有懸賞</h2>
  
        <hr class="divider my-4">
  
        <p class="text-muted mb-5">使用者可在此修改與刪除發布的懸賞</p>
  
      </div>
  
    </div>
  
    <div class="row">

      @foreach($post_missing_datas as $post_missing_data)
      
      @if ($post_missing_data->user_id == $user->id)
      
      <div class="col-sm-5 col-sm-offset-2 col-md-12 col-md-offset-0 text-center">編號 : {{ $post_missing_data->id }} 發布時間 : {{ $post_missing_data->created_at }} 懸賞主題 : {{ $post_missing_data->title }}  
      
        <button type="submit" class="btn btn-primary">修改這個懸賞!</button>

        <form method="POST" action="{{ asset('/userprofile/delete/'.$post_missing_data->id) }}">

          {{ csrf_field() }}

          {{ method_field('DELETE') }}

          <button type="submit" class="btn btn-primary">刪除這個懸賞!</button>
      
        </form>

      </div>

      @endif
      
      @endforeach

    </div>
  
  </div>
    
</section>

<section class="page-section" id="contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="mt-0">今天在資料庫中有可能是你的遺失物的項目：</h2>
        <h5 class="mt-0">根據你的訂閱關鍵字 城市：{{ $user->subscribe_city }}、物品名稱：{{ $user->subscribe_thingname }}</h5>
        <hr class="divider my-4">

        <div class="center">
          <div class="alert alert-block" style="background-color:#262626">
            <button type="button" class="close" data-dismiss="alert" style="color:#e65c00;">×</button>
            <center><h3 style="color:#e74c3c">搜尋結果</h3></center>
            @if($search_other->isEmpty())
              <center><strong  style="color:#e74c3c">&emsp;&emsp;今天沒有類似的遺失物被送到警察局&emsp;&emsp;</strong></center>
            @else
              <tbody style="background-color:">
                <table class="table table-hover" >
                  <tbody style="background-color:">
                    @foreach ($search_other as $search_others)
                      <a href="#" class="list-group-item">
                        <h6><b>時間：</b>{{$search_others->OP_PU_DATE}}</h6>
                        <h6><b>單位：</b>{{ $search_others->OP_AC_UNIT_NM3 }}</h6>
                        <h6><b>位置：</b>{{ $search_others->OP_PU_PLACE }}</h6>
                        <h6><b>內容：</b>{{$search_others->OP_AN_CONTENT}}</h6>
                      </a>
                    @endforeach
                  </tbody>
                </table>
              </tbody>
            @endif
          </div>
        </div>


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
