@extends('layouts.includes.app')
@section('content')
<!-- About Section -->
<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    <h2 class="text-center mt-0">警察機關失物招領網路公告查詢</h2>
    <hr class="divider my-4">
      <div class="row">
        <div class="col-md-12" id="search">
          <form class="form-horizontal" action="{{ url('achievement/search') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-4">受理單位</label>
              <div class = "row" >
                <div class="form-group col-md-4">
                <select type="text" class="form-control" id="" placeholder="ex.106-1" name="term">
                  <option value="">請選擇...</option>
                  <option value="AW000">臺北市政府警察局</option>
                  <option value="AD000">新北市政府警察局</option>
                  <option value="AE000">桃園市政府警察局</option>
                  <option value="AB000">臺中市政府警察局</option>
                  <option value="AC000">臺南市政府警察局</option>
                  <option value="AV000">高雄市政府警察局</option>
                  <option value="A2200">刑事警察局</option>
                  <option value="A2300">航空警察局</option>
                  <option value="A2400">國道公路警察局</option>
                  <option value="A2N00">鐵路警察局</option>
                  <option value="A2900">保一總隊</option>
                  <option value="A2A00">保二總隊</option>
                  <option value="A2B00">保三總隊</option>
                  <option value="A2C00">保四總隊</option>
                  <option value="A2D00">保五總隊</option>
                  <option value="A2E00">保六總隊</option>
                  <option value="A2F00">保七總隊</option>
                  <option value="A2H00">基隆港警總隊</option>
                  <option value="A2I00">臺中港警總隊</option>
                  <option value="A2J00">高雄港警總隊</option>
                  <option value="A2K00">花蓮港警總隊</option>
                  <option value="A2O00">警察通訊所</option>
                  <option value="A2U00">民防管制所</option>
                  <option value="A2M00">警察廣播電臺</option>
                  <option value="A2L00">警察機械修理廠</option>
                  <option value="A2800">臺灣警專學校</option>
                  <option value="BA000">基隆市警察局</option>
                  <option value="BF000">新竹市警察局</option>
                  <option value="BM000">嘉義市政府警察局</option>
                  <option value="BG000">新竹縣政府警察局</option>
                  <option value="BH000">苗栗縣警察局</option>
                  <option value="BJ000">彰化縣警察局</option>
                  <option value="BK000">南投縣政府警察局</option>
                  <option value="BL000">雲林縣警察局</option>
                  <option value="BN000">嘉義縣警察局</option>
                  <option value="BQ000">屏東縣政府警察局</option>
                  <option value="BT000">宜蘭縣政府警察局</option>
                  <option value="BS000">花蓮縣警察局</option>
                  <option value="BR000">臺東縣警察局</option>
                  <option value="BU000">澎湖縣政府警察局</option>
                  <option value="BY000">金門縣警察局</option>
                  <option value="BZ000">連江縣警察局</option>
                </select>
                </select>
                </div>
                <div class="form-group col-md-4">
                <input type="text" class="form-control" id="" placeholder="ex.106-1" name="term">
                </div>
                <div class="form-group col-md-4">
                <input type="text" class="form-control" id="" placeholder="ex.106-1" name="term">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">拾得日期起迄</label>
              <div class = "row" >
                <div class="form-group col-md-5">
                <input type="text" class="form-control glyphicon glyphicon-calendar" id="" placeholder="ex.106-1" name="term">
              </div><span>～</span>
                <div class="form-group col-md-5">
                <input type="text" class="form-control" id="" placeholder="ex.106-1" name="term">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-5">拾得地點</label>
              <label class="control-label col-md-5">遺失物品</label>
              <div class = "row" >
                <div class="form-group col-md-5">
                <select type="text" class="form-control" id="" placeholder="ex.106-1" name="term">
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
                <input type="text" class="form-control" id="" placeholder="ex.106-1" name="term">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-12">
              <center>
                <button type="submit" class="btn btn-primary" onclick="openResult()">查詢</button>
              </center>
              </div>
            </div>
          </form>
        </div>
    </div>
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
