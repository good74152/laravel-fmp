@extends('layouts.includes.app')
@section('content')

<section class="page-section" id="contact">
    
    <div class="container">
    
        <ul class="form-section page-section">
    
            <li id="cid_9" class="form-input-wide" data-type="control_head">
    
                <div class="form-header-group ">
    
                    <div class="header-text httal htvam">
    
                        <h1 id="header_9" class="form-header text-center" data-component="header">
    
                            發布懸賞
    
                        </h1>
    
                        <div id="subHeader_9" class="form-subHeader text-center">
    
                            會員可以在此發布懸賞
    
                        </div>
    
                    </div>
    
                </div>
    
            </li>
    
        <form method="POST" action="{{route('userpost.store')}}">    
        @csrf
                <li class="form-line" data-type="control_textbox" id="id_title">
    
                <label class="form-label form-label-left form-label-auto" id="label_title" for="title"> 懸賞主題 </label>
    
                <div id="cid_title" class="form-input">
    
                    <span class="form-sub-label-container " style="vertical-align:top">
    
                        <input type="text" id="title" name="title" data-type="input-textbox" class="form-textbox rounded-0" size="64" value="" data-component="textbox" aria-labelledby="label_title sublabel_title" required="required"/>
    
                        <label class="form-sub-label" for="title" id="sublabel_title" style="min-height:13px"> 請填寫懸賞主題 </label>
    
                    </span>
    
                </div>
    
            </li>
    
            <li class="form-line" data-type="control_textarea" id="id_description">
    
                <label class="form-label form-label-left form-label-auto" id="label_description" for="description"> 懸賞內容 </label>
    
                <div id="cid_description" class="md-form">
    
                    <span class="form-sub-label-container " style="vertical-align:top">
    
                        <textarea id="description" class="md-textarea form-control" name="description" cols="100" rows="10" data-component="textarea" aria-labelledby="label_description sublabel_description" required></textarea>
    
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