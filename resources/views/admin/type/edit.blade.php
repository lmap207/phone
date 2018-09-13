@extends('layouts.admin') 
@section('title') 网络类型修改 @endsection 
@section('title','网络类型修改') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>网络类型修改</span> 
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/type/{{$types['id']}}">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">网络类型名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$types['tname']}}" name="tname" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    {{csrf_field()}}
					{{method_field('PUT')}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection