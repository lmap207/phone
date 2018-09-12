@extends('layouts.admin')
@section('title')
	广告添加
@endsection
@section('title', '广告添加')

@section('content')
<div class="tpl-portlet-components">
<div class="portlet-title">
    <div class="caption font-green bold">
        <span class="am-icon-code"></span> 广告
    </div>
</div>

<div class="tpl-block">
    
    <div class="am-g">
        <div class="tpl-form-body tpl-form-line">
            <form class="am-form tpl-form-line-form" method="post" action="/advert" enctype="multipart/form-data">
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">广告名称 <span class="tpl-form-line-small-title"></span></label>
                    <div class="am-u-sm-9">
                        <input type="text" name="adname" class="tpl-form-input" id="user-name" placeholder="请输入广告名">
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">广告图片 <span class="tpl-form-line-small-title"></span></label>
                    <div class="am-u-sm-9">
                        <input type="file" name="adpic" class="tpl-form-input">
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">广告内容 <span class="tpl-form-line-small-title"></span></label>
                    <div class="am-u-sm-9">
                        <input type="text" name="adcontent" class="tpl-form-input" id="user-name" placeholder="请输入广告内容">
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">广告时间 <span class="tpl-form-line-small-title"></span></label>
                    <div class="am-u-sm-9">
                        <input type="text" name="adtime" class="tpl-form-input" id="user-name" placeholder="请输入广告时间">
                    </div>
                </div>
				{{csrf_field()}}
              	           
                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <button class="am-btn am-btn-primartpl-btn-bg-color-success ">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection