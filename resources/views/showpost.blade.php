@extends('layouts.includes.app')
@section('title', $post_missing_data->title)
@section('content')
<section class="page-section bg-dark text-white">

    @guest <!-- 訪客看見的視圖 -->
    
    <div class="container text-center" style="border:1px solid purple width:755px margin:0 auto padding:5px text-align:left">

        <div style="border:2px solid green width:200px float:left margin:10px 0 10px 5px height:350px">

            <h5 class="mb-4">懸賞主題</h5>

        </div>

    
        <div class="container text-center" style="border:2px solid blue width:500px margin:10px 0 10px 235px min-height:500px height:500px">
    
    
            <h1 class="mb-4">{{$post_missing_data->title}}</h1>

            <hr class="divider my-4">

    
        </div>

    
        <div style="border:2px solid green width:200px float:left margin:10px 0 10px 5px height:350px">
    
    
            <h5 class="mb-4">懸賞內容</h5>

    
        </div>
    
    
        <div class="container text-center" style="border:2px solid blue width:500px margin:10px 0 10px 235px min-height:500px height:500px">
        
    
            <h4 class="mb-4">{!! $post_missing_data->description !!}</h4>

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
                <tr>
                    
                    <td><h5 class="mb-4" style= "color:orange">{{$comment->user_name}}</h5></td>
                    
                    <td><h5 class="mb-4" style= "color:orange">{{$comment->created_at}}</h5></td>
                    
                    <td><h5 class="mb-4" style= "color:orange; overflow:auto">{{$comment->comment}}</h5></td> <!-- 不確定抓進來的留言屬於這個公告 -->
    
                </tr>
                
                @endforeach
            
            </table>
        
        </div>

    </div>
        
        @else <!-- 會員看到的視圖 -->

        <div class="container text-center" style="border:1px solid purple width:755px margin:0 auto padding:5px text-align:left">

            <div style="border:2px solid green width:200px float:left margin:10px 0 10px 5px height:350px">
    
                <h5 class="mb-4">懸賞主題</h5>
    
            </div>
    
        
            <div class="container text-center" style="border:2px solid blue width:500px margin:10px 0 10px 235px min-height:500px height:500px">
        
        
                <h1 class="mb-4">{{$post_missing_data->title}}</h1>
    
                <hr class="divider my-4">
    
        
            </div>
    
        
            <div style="border:2px solid green width:200px float:left margin:10px 0 10px 5px height:350px">
        
        
                <h5 class="mb-4">懸賞內容</h5>
    
        
            </div>
        
        
            <div class="container text-center" style="border:2px solid blue width:500px margin:10px 0 10px 235px min-height:500px height:500px">
            
        
                <h4 class="mb-4">{!! $post_missing_data->description !!}</h4>
    
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
                    <tr>
                        
                        <td><h5 class="mb-4" style= "color:orange">{{$comment->user_name}}</h5></td>
                        
                        <td><h5 class="mb-4" style= "color:orange">{{$comment->created_at}}</h5></td>
                        
                        <td><h5 class="mb-4" style= "color:orange; overflow:auto">{{$comment->comment}}</h5></td> <!-- 不確定抓進來的留言屬於這個公告 -->
        
                    </tr>
                    
                    @endforeach
                
                </table>
            
            </div>        
        
        </div>

        <!-- 會員留言的地方 -->
        
            <div class="container text-center">

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

                    <li class="form-line" data-type="control_button" id="id_8">
    
                        <div id="cid_8" class="form-input-wide">
            
                            <div style="margin-left:156px" class="form-buttons-wrapper ">
            
                                <button type="submit" class="form-submit-button">
            
                                    確認送出
            
                                </button>
            
                            </div>
            
                        </div>

                    </li>
                
                    </form>
        
            </div>

    </div>

    @endguest
    <!-- 不能讓非會員留言(不讓他們看見留言框) -->

</section>
@endsection