@extends('layouts.includes.app')
@section('content')

<section class="page-section" id="contact">
    
    <div class="container">
    
        <ul class="form-section page-section">
    
            <li id="cid_9" class="form-input-wide" data-type="control_head">
    
                <div class="form-header-group ">
    
                    <div class="header-text httal htvam">
    
                        <h1 id="header_9" class="form-header text-center" data-component="header">
    
                            正在修改懸賞編號:{{$post_missing_data->id}}的內容
    
                        </h1>
    
                        <div id="subHeader_9" class="form-subHeader text-center">
    
                            可以在此修改懸賞
    
                        </div>
    
                    </div>
    
                </div>
    
            </li>
    
        <form method="post" action='{{ asset('/userpostedit/update/'.$post_missing_data->id) }}'>    
            {{ csrf_field() }}

                <li class="form-line" data-type="control_textbox" id="id_title">
    
                <label class="form-label form-label-left form-label-auto" id="label_title" for="title" > 懸賞主題 </label>
    
                <div id="cid_title" class="form-input">
    
                    <span class="form-sub-label-container " style="vertical-align:top">
    
                        <input type="text" id="title" value="{{$post_missing_data->title}}" name="title" data-type="input-textbox" class="form-textbox rounded-0" size="64" value="" data-component="textbox" aria-labelledby="label_title sublabel_title" required="required"/>
    
                        <label class="form-sub-label" for="title" id="sublabel_title" style="min-height:13px"> 請填寫懸賞主題 </label>
    
                    </span>
    
                </div>
    
            </li>

            <li class="form-line" data-type="control_textbox" id="id_title">

            <label class="form-label form-label-left form-label-auto" id="label_title" for="title"> 物品地點 </label>

            

            <div class="form-group col-md-5">
                
                <span class="form-sub-label-container " style="vertical-align:top">
                
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
            
    
            <li class="form-line" data-type="control_textarea" id="id_description">
    
                <label class="form-label form-label-left form-label-auto" id="label_description" for="description"> 懸賞內容 </label>

                
    
                <div id="cid_description" class="md-form">
    
                    <span class="form-sub-label-container " style="vertical-align:top">
    
                        <textarea  id="description" class="md-textarea form-control" name="description" cols="100" rows="10" data-component="textarea" aria-labelledby="label_description sublabel_description" required>{{$post_missing_data->description}}</textarea>
    
                        <label class="form-sub-label" for="description" id="sublabel_description" style="min-height:13px"> 請填寫懸賞內容 </label>
    
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
    
        </ul>

    </div>

@endsection
@section('nav_post_lost', 'active')