@extends('layouts.includes.app')
@section('content')


<section class="page-section" id="portfolio">
<div class="container" style=" width: 100%; padding-top: 0px;">
    <h1 class="text-center">懸賞公告</h1>
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
                <!-- 公告主題 -->
                <th style="text-align: center;">
                    <button id="nameSortButton" type="submit" onclick="sortTable(3)" style="border-radius: 100px; border: none; background-color: transparent;">公告主題</button>
                </th>
            </tr>
        </table>
    </div>
    <div class="TableContent">
        <table class="table" id="content" style="table-layout: fixed; text-align: center" >
            @foreach($post_missing_datas as $post_missing_data)
            <!--點擊就可進入公告詳細頁-->
            <tr>
                
                <td>{{$post_missing_data->id}}</td>
                <td>{{$post_missing_data->created_at}}</td>
                <td>{{$post_missing_data->user_name}}</td>
                <td>
                    <label class="hrefLabel" data-targetid="{{ $post_missing_data->id }}" style="color:blue">{{ $post_missing_data->title }}</label>
                </td>

            </tr>
        @endforeach
        </table>
    </div>
</div>
</section>
<script type="text/javascript">
    $(document).on("click",".hrefLabel",function(){
        var targetID = $(this).data("targetid");
        window.location.assign("{{ asset('/bulletin/show') }}"+"/"+targetID);
    });
</script>
@endsection