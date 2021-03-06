@extends('layouts.admin') 
@section('title') 友情链接添加 @endsection 
@section('title','友情链接添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>友情链接添加</span> 
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/link">
                <!-- 链接名称 -->
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">链接名称<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="" >
                        </div>
                    </div>
                    <!-- 链接地址 -->
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">链接地址<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="url" class="tpl-form-input" id="user-name" placeholder="" >
                        </div>
                    </div>
                    <!-- 排序 -->
                      <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">排序<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="order" class="tpl-form-input" id="user-name" placeholder="" >
                        </div>
                    </div>

             
					{{csrf_field()}}
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