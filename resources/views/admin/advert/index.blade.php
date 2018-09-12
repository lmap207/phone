@extends('layouts.admin')
@section('title','广告列表')
@section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 广告
        </div>
    </div>

    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="/advert/create" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                        <a href="" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</a>
                    </div>
                </div>
            </div>

            <div class="am-u-sm-12 am-u-md-3">
            	<form action="/advert" method="get">
                	<div class="am-input-group am-input-group-sm">
                    	<input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}">
                    	<span class="am-input-group-btn">
						<button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search">
						</button>
						</span>
                	</div>
            	</form>
            </div>

        </div>

        <div class="am-g">
            <div class="am-u-sm-12">    
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                        <tr>
                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                            <th class="table-title"">ID</th>
                            <th class="table-title"">广告名称</th>
                            <th class="table-title"">广告图片</th>
                            <th class="table-title">广告内容</th>
                            <th class="table-title">广告时间</th>
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach ($adverts as $v)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$v['id']}}</td>
                            <td><a href="#">{{$v['adname']}}</a></td>     
                            <td><a href="#"><img src="{{$v['adpic']}}" style="width:70px; height: 70px;"></a></td>     
                            <td><a href="#">{{$v['adcontent']}}</a></td>     
                            <td><a href="#">{{$v['adtime']}}</a></td>     
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/advert/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        
                                        <form action="/advert/{{$v['id']}}" method="post" style="float: left;">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>						       
                <hr>                
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection


