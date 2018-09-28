@extends('layouts.admin')
@section('title')
    订单回复 
@endsection
@section('title', '订单回复')

@section('content')
<div class="tpl-portlet-components">
<div class="portlet-title">
    <div class="caption font-green bold">
        <span>订单回复</span> 
    </div>
</div>

<div class="tpl-block">
    
    <div class="am-g">
        <div class="tpl-form-body tpl-form-line">
            <form class="am-form tpl-form-line-form" method="post" action="/indent/{{$id}}">
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">回复 <span class="tpl-form-line-small-title"></span></label>
                    <div class="am-u-sm-9">
                        <input type="text" name="dizhi" class="tpl-form-input" id="user-name">
                    </div>
                </div>
                {{csrf_field()}}
                {{method_field('PUT')}}
                           
                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <button class="am-btn am-btn-primartpl-btn-bg-color-success ">回复</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection