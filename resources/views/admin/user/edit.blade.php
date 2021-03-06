@extends('layouts.admin') 
@section('title') 用户修改 @endsection 
@section('title','用户修改') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>用户修改</span>
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/user/{{$users['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" value="{{$users['name']}}" class="tpl-form-input" id="user-name" placeholder="">
                            <small>请填写标题文字6-20位字母数字下划线</small>
                        </div>

                        <!-- 权限  -->
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">权限</label>
                            <div class="am-u-sm-9">
                                <select data-am-selected="{searchBox: 1}" name="qx" style="display: none;"> 
                                    <option value="1" {{$users['qx'] == 1 ? 'selected' : '' }}>普通用户</option>
                                    <option value="2" {{$users['qx'] == 2 ? 'selected' : '' }}>管理员</option>
                                </select>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">主图 </label>
                            <div class="am-u-sm-9">
                                <img src="{{$users['pic']}}" alt="" width="100">
                                <div class="am-form-group am-form-file">
                                    <div class="tpl-form-file-img">
                                    </div>
                                    <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                        <i class="am-icon-cloud-upload"></i>头像</button>
                                    <input id="doc-form-file" type="file" name="pic">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{method_field('PUT')}}
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