@extends('layouts.includes.app')
@section('content')
<!-- About Section -->
<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    <h2 class="text-center mt-0">警察機關失物招領網路公告查詢</h2>
    <h6 class="text-center mt-0">#僅提供自警察機關依民法第803條第2項規定完成失物招領程序時起6個月內之網路失物招領之數位批次資料</h6>

    <hr class="divider my-4">
      <div class="row">
        <div class="col-md-12" id="search">
          <form class="form-horizontal" action="{{ url('search_record/search') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
              <label class="control-label col-md-5">拾得日期起(格式：西元年月日)</label>
              <label class="control-label col-md-5">拾得日期迄(格式：西元年月日)</label>
              <div class = "row" >
                <div class="form-group col-md-5">
                <input type="text" class="form-control glyphicon glyphicon-calendar" placeholder="20190101" name="date1" required>
              </div><span></span>
                <div class="form-group col-md-5">
                <input type="text" class="form-control" placeholder="20191212" name="date2" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-5">拾得地點</label>
              <label class="control-label col-md-5">遺失物品</label>
              <div class = "row" >
                <div class="form-group col-md-5">
                <select type="text" class="form-control" placeholder="ex.106-1" name="place">
                  <option value="">請選擇...</option>
                  <option>臺北市</option>
                  <option>新北市</option>
                  <option>桃園市</option>
                  <option>臺中市</option>
                  <option>臺南市</option>
                  <option>高雄市</option>
                  <option>新竹縣</option>
                  <option>苗栗縣</option>
                  <option>彰化縣</option>
                  <option>南投縣</option>
                  <option>雲林縣</option>
                  <option>嘉義縣</option>
                  <option>屏東縣</option>
                  <option>宜蘭縣</option>
                  <option>花蓮縣</option>
                  <option>臺東縣</option>
                  <option>澎湖縣</option>
                  <option>金門縣</option>
                  <option>連江縣</option>
                  <option>基隆市</option>
                  <option>新竹市</option>
                  <option>嘉義市</option>
                </select>
                </div>
                <div class="form-group col-md-7">
                <input type="text" class="form-control" id="" placeholder="錢包..." name="name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-12">
              <center>
                <button type="submit" class="btn btn-primary">查詢</button>
              </center>
              </div>
            </div>
          </form>
        </div>
    </div>
        <!--回傳結果-->
    		@if ($search_other = Session::get('search_other'))
        <div class="center">
          <div class="alert alert-block" style="background-color:#262626">
    				<button type="button" class="close" data-dismiss="alert" style="color:#e65c00;">×</button>
    				<center><h3 style="color:#e74c3c">搜尋結果</h3></center>
    				@if($search_other->isEmpty())
    					<center><strong  style="color:#e74c3c">&emsp;&emsp;查無結果...&emsp;&emsp;</strong></center>
    				@else
    					<tbody style="background-color:">
    						<table class="table table-hover" >
    							<tbody style="background-color:">
    								@foreach ($search_other as $search_others)
    									<a href="#" class="list-group-item">
                        <h5><b>單位：</b>{{ $search_others->OP_AC_UNIT_NM3 }}</h5>
    										<h5><b>位置：</b>{{ $search_others->OP_PU_PLACE }}</h5>
    										<h5><b>內容：</b>{{$search_others->OP_AN_CONTENT}}</h5>
    									</a>
    								@endforeach
    							</tbody>
    						</table>
    					</tbody>
    				@endif
    			</div>
        </div>
    		@endif



  </div>
      <!--<div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-gem text-primary mb-4"></i>
          <h3 class="h4 mb-2">Sturdy Themes</h3>
          <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
          <h3 class="h4 mb-2">Up to Date</h3>
          <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-globe text-primary mb-4"></i>
          <h3 class="h4 mb-2">Ready to Publish</h3>
          <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-heart text-primary mb-4"></i>
          <h3 class="h4 mb-2">Made with Love</h3>
          <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
        </div>
      </div>--->
    <script>
    const requestURL = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';
    async function get_api(){
      const response = await fetch(requestURL);
      const data = await response.json();
      console.log(data);
    }
    get_api();
    </script>

</section>
@endsection
@section('nav_lostsearch', 'active')
