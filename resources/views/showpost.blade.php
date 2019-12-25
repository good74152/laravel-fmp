@extends('layouts.includes.app')
@section('title', $post_missing_data->title)
@section('content')
<section class="page-section">

    @guest <!-- 訪客看見的視圖 -->

        <div class="container">
            <div class="row">
                <h2 class="col-md-6" style="border-left: solid 6px #f4623a">主題：{{$post_missing_data->title}}</h2>
                <h2 class="col-md-6" style="border-left: solid 6px #f4623a">內容：{!! $post_missing_data->description !!}</h2>
            </div>
            <hr style="border:solid 0px;border-bottom: solid 2px #ffa189">
            {{-- <h4 class="text-center mt-4">所有留言</h4> --}}
                {{-- <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">用戶</th>
                        <th scope="col">留言時間</th>
                        <th scope="col">留言</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($comment as $comment)
                        <tr>
                            @if($comment->post_id == $post_missing_data->id) <!-- 只顯示此公告的留言 -->

                            <td style="width: 10%">{{$comment->user_name}}</td>

                            <td style="width: 20%">{{$comment->created_at}}</td>

                            <td style="width:60%;overflow-y:auto;height:50px">{{$comment->comment}}</td> <!-- 不確定抓進來的留言屬於這個公告 -->

                        @endif

                        </tr>

                        @endforeach
                    </tbody>
                  </table> --}}
            {{-- <div class="TableTop">

                <table class="table" id="TitleTable" style="text-align: center; table-layout: fixed;">

                    <tr>

                        <!-- 使用者 -->
                        <th style="text-align: center;">

                            <h5 class="mb-4" >用戶</h5>

                        </th>

                        <!-- 留言時間 -->
                        <th style="text-align: center;">

                            <h5 class="mb-4" >留言時間</h5>
                        </th>

                        <!-- 留言 -->
                        <th style="text-align: center;">

                            <h5 class="mb-4" >留言</h5>
                        </th>

                    </tr>

                </table>

            </div>  --}}

            <div class="TableContent">

                <table class="table" id="content" style="table-layout: fixed; text-align: center" >
                    <thead class="table-dark">
                        <tr>
                          <th scope="col">用戶</th>
                          <th scope="col">留言時間</th>
                          <th scope="col">留言</th>
                        </tr>
                      </thead>

                    @foreach($comment as $comment)

                    <!--點擊就可進入公告詳細頁-->
                    <tr>
                        @if($comment->post_id == $post_missing_data->id) <!-- 只顯示此公告的留言 -->

                        <td><h5>{{$comment->user_name}}</h5></td>

                        <td><h5>{{$comment->created_at}}</h5></td>

                        <td><h5 style="height:100px;overflow:auto">{{$comment->comment}}</h5></td> <!-- 不確定抓進來的留言屬於這個公告 -->

                        @endif

                    </tr>

                    @endforeach

                </table>

            </div>

        </div>

        @else <!-- 會員看到的視圖 -->
            <div class="container">
                <div class="row">
                    <h2 class="col-md-6" style="border-left: solid 6px #f4623a">主題：{{$post_missing_data->title}}</h2>
                    <h2 class="col-md-6" style="border-left: solid 6px #f4623a">內容：{!! $post_missing_data->description !!}</h2>
                </div>
                <hr style="border:solid 0px;border-bottom: solid 2px #ffa189">
                {{-- <h4 class="text-center mt-4">所有留言</h4> --}}
                <div class="TableContent">

                    <table class="table" id="content" style="table-layout: fixed; text-align: center" >
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">用戶</th>
                                <th scope="col">留言時間</th>
                                <th scope="col">留言</th>
                            </tr>
                            </thead>
    
                        @foreach($comment as $comment)
    
                        <!--點擊就可進入公告詳細頁-->
                        <tr>
                            @if($comment->post_id == $post_missing_data->id) <!-- 只顯示此公告的留言 -->
    
                            <td><h5>{{$comment->user_name}}</h5></td>
    
                            <td><h5>{{$comment->created_at}}</h5></td>
    
                            <td><h5 style="height:100px;overflow:auto">{{$comment->comment}}</h5></td> <!-- 不確定抓進來的留言屬於這個公告 -->
    
                            @endif
    
                        </tr>
    
                        @endforeach
    
                    </table>
    
                </div>
        {{-- <div class="container text-center" style="border:1px solid purple width:755px margin:0 auto padding:5px text-align:left">

            <div style="border:2px solid green width:200px float:left margin:10px 0 10px 5px height:350px">


            </div>


            <div class="container text-center" style="border:2px solid blue width:500px margin:10px 0 10px 235px min-height:500px height:500px">


                <h1 class="mb-4">主題：{{$post_missing_data->title}}</h1>

                <hr class="divider my-4">


            </div>


            <div style="border:2px solid green width:200px float:left margin:10px 0 10px 5px height:350px">




            </div>


            <div class="container text-center" style="border:2px solid blue width:500px margin:10px 0 10px 235px min-height:500px height:500px">


                <h4 class="mb-4">內容：{!! $post_missing_data->description !!}</h4>

                <hr class="divider my-4">


            </div>


        </div>

        <div class="container text-center" style=" width: 100%; padding-top: 0px;">

            <h5 class="mb-4">所有留言</h5>

            <div class="TableTop">

                <table class="table" id="TitleTable" style="text-align: center; table-layout: fixed;">

                    <tr>

                        <!-- 使用者 -->
                        <th style="text-align: center;">

                            <h5 class="mb-4" style= "color:white">用戶</h5>

                        </th>

                        <!-- 留言時間 -->
                        <th style="text-align: center;">

                            <h5 class="mb-4" style= "color:white">留言時間</h5>
                        </th>

                        <!-- 留言 -->
                        <th style="text-align: center;">

                            <h5 class="mb-4" style= "color:white">留言</h5>
                        </th>

                    </tr>

                </table>

            </div>

            <div class="TableContent">

                <table class="table" id="content" style="table-layout: fixed; text-align: center" >

                    @foreach($comment as $comment)

                    <!--點擊就可進入公告詳細頁-->
                    <tr >

                        @if($comment->post_id == $post_missing_data->id) <!-- 只顯示此公告的留言 -->

                        <td><h5 class="mb-4" style= "color:orange">{{$comment->user_name}}</h5></td>

                        <td><h5 class="mb-4" style= "color:orange">{{$comment->created_at}}</h5></td>

                        <td><h5 class="mb-4" style= "color:orange; overflow:auto; height:50px;">{{$comment->comment}}</h5></td> <!-- 不確定抓進來的留言屬於這個公告 -->

                        @endif

                    </tr>

                    @endforeach

                </table>

            </div>

        </div> --}}

        <!-- 會員留言的地方 -->
{{-- 
                <div class="container">

                    <form method="POST" action="{{ asset('/bulletin/store/'.$post_missing_data->id) }}">

                        @csrf

                        <li class="form-line" data-type="control_textarea" id="id_comment">

                            <label class="form-label form-label-left form-label-auto" id="label_comment" for="comment" style= "color:orange"> 請填寫留言 </label>

                            <div id="cid_comment" class="md-form">

                                <span class="form-sub-label-container " style="vertical-align:top">

                                    <textarea id="comment" class="md-textarea form-control" name="comment" cols="100" rows="10" data-component="textarea" aria-labelledby="label_comment sublabel_comment" required></textarea>

                                </span>

                            </div>

                        </li>
                    </form> --}}
                    <form method="POST" action="{{ asset('/bulletin/store/'.$post_missing_data->id) }}">
                        @csrf
                        <div class="form-group row">
                          <label id="label_comment" for="comment" class="col-sm-2 col-form-label">請填寫留言</label>
                          <div class="col-sm-10">
                            <textarea id="comment" class="md-textarea form-control" name="comment" cols="100" rows="10" data-component="textarea" aria-labelledby="label_comment sublabel_comment" required></textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">確認送出</button>
                          </div>
                          
                        </div>
                    </form>

                </div>
            </div>

    @endguest
    <!-- 不能讓非會員留言(不讓他們看見留言框) -->



</section>
@endsection
@section('nav_member', 'active')