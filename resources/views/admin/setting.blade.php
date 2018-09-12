@extends('layouts.admin') 
@section('title') 网站添加 @endsection 
@section('title','网站添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 网站添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/admin/settings" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标题名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting['title']}}">
                            <small>请填写标题文字6-20位字母数字下划线</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">关键字 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="keyword" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting['keyword']}}">
                            <small>请输入网站关键字</small>
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">网站开关 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">

                            <input type="radio" name="sopen" class="tpl-form-input" id="user-name" placeholder="" value="

                            0" 
                             @if($setting['sopen']=='0')
                             checked 
                             @endif
                            >关闭

                            <input type="radio" name="sopen" class="tpl-form-input" id="user-name" placeholder="" value="1"
                             @if($setting['sopen']=='1')
                             checked 
                             @endif
                            >开启
                            <small></small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">logo</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加图片</button>
                                <input id="doc-form-file" type="file" name="logo" value="{{$setting['logo']}}">
                                <img src="{{$setting['logo']}}" width="60px">
                            </div>
                        </div>
                    </div>
                    {{csrf_field()}}
                   
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">修改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection