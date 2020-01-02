@extends('layouts.includes.app')
@section('content')

<section class="page-section" id="contact">
    
    <div class="container">
        <h2 class="text-center mt-0">發布懸賞</h2>
        <h6 class="text-center mt-0">會員可以在此發布懸賞</h6>
        <hr class="divider my-4">
        <form method="POST" action="{{route('userpost.store')}}">    
         @csrf
            <div class="form-group  ">
                <div class = "row" >
                    <label class="control-label" id="label_title " for="title"> 懸賞主題 : </label>
                    <span class="form-sub-label-container col-md-8 ">
                        <input type="text" id="title" name="title" placeholder="請填寫懸賞主題" data-type="input-textbox" class="form-control  " size="64"  required="required"/>
                    </span>
                </div>    
            </div>    
            <div class="form-group ">
                <div class = "row" >
                    <label class="control-label " id="label_title" for="title"> 遺失地點 : </label>
                    <span class="col-md-6">
                        <select type="text" class="form-control" placeholder="ex.106-1" name="location" required>
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
                    </span>    
            </div>   
            <br>
            <div class="form-group ">
                <div class = "row" >
                    <label class="control-label " id="id_description" for="id_description">  懸賞內容 :</label>
                    <span class="form-sub-label-container col-md-8" style="vertical-align:top">
                        <textarea id="description"  placeholder="請填寫懸賞內容" class="md-textarea form-control" name="description" cols="100" rows="10"  required></textarea>
                    </span>
                </div>    
            </div> 
            <button type="submit" class="btn btn-primary">確認送出</button>  
           
        </form>

    </div>

@endsection
@section('nav_post_lost', 'active')