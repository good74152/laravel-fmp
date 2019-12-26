@extends('layouts.includes.app')
@section('content')


<section class="page-section" id="portfolio">
<div class="container" style=" width: 100%; padding-top: 0px;">
    <h2 class="text-center mt-0">懸賞公告</h2>
    <form class="form-horizontal" action="{{ route('bulletin.search')}}" method="post">
      {{ csrf_field() }}
      {{ method_field('post') }}
    <input type="text" class="form-control" id="" placeholder="" name="title">
    <button type="submit" class="btn btn-primary">搜尋標題!</button>
    </form>
    <hr class="divider my-4">
    <div class="TableTop">
        <table class="table" id="TitleTable" style="text-align: center; table-layout: fixed;">
            <tr>
                <!-- 編號 -->
                <th style="text-align: center;">
                    <button id="idSortButton" type="button" onclick="sortTable(0)" style="border-radius: 100px; border: none; background-color: transparent;">公告編號</button>
                </th>
                <!-- 日期 -->
                <th style="text-align: center;">
                    <button id="dateSortButton" type="button" onclick="sortTable(1)" style="border-radius: 100px; border: none; background-color: transparent;">發布時間</button>
                </th>
                <!-- 發布者 -->
                <th style="text-align: center;">
                    <button id="classSortButton" type="submit" onclick="sortTable(2)" style="border-radius: 100px; border: none; background-color: transparent;">發布者</button>
                </th>
                <!-- 地點 -->
                <th style="text-align: center;">
                    <button id="nameSortButton" type="submit" onclick="sortTable(3)" style="border-radius: 100px; border: none; background-color: transparent;">物品地點</button>
                </th>
                <!-- 公告主題 -->
                <th style="text-align: center;">
                    <button id="nameSortButton" type="submit" onclick="sortTable(4)" style="border-radius: 100px; border: none; background-color: transparent;">公告主題</button>
                </th>
            </tr>
        </table>
    </div>
    <div class="TableContent">
        <table class="table" id="content" style="table-layout: fixed; text-align: center" >
            @foreach($post_missing_datas as $post_missing_data)
            <!--點擊就可進入公告詳細頁-->
            <tr class="hrefLabel abc" data-targetid="{{ $post_missing_data->id }}">

                <td>{{$post_missing_data->id}}</td>
                <td>{{$post_missing_data->created_at}}</td>
                <td>{{$post_missing_data->user_name}}</td>
                <td>{{$post_missing_data->location}}</td>
                <td>
                    <label >{{ $post_missing_data->title }}</label>
                </td>

            </tr>
        @endforeach
        </table>
        {!! $post_missing_datas->render() !!}
    </div>
</div>
</section>
<script type="text/javascript">
    $(document).on("click",".hrefLabel",function(){
        var targetID = $(this).data("targetid");
        window.location.assign("{{ asset('/bulletin/show') }}"+"/"+targetID);
    });
</script>
<style>
.abc:hover {
  transform: scale(1.02);
  cursor: pointer
}

tr:nth-child(even) {background: #CCC};
tr:nth-child(odd) {background: #FFF};
</style>
@endsection

@section('nav_bullutin', 'active')
