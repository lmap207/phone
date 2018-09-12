@extends('layouts.admin') @section('title','链接列表') @section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 列表
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="/link/create" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>
            
            <div class="am-u-sm-12 am-u-md-3">
                <form action="/link" method="get">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}">
                    <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
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
                            <th class="table-check">
                                <input type="checkbox" class="tpl-table-fz-check">
                            </th>
                            <th class="table-id">ID</th>
                            <th class="table-title">用户名</th>
                            <th class="table-title">邮箱</th>
                            <th class="table-title">留言内容</th>
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                 
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td></td>
                            <td class="am-hide-sm-only"></td>
                            <td class="am-hide-sm-only"></td>
                            <td class="am-hide-sm-only"></td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                       
                                        <form style="float:left" action="/" method="post">
                                            
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    
                       
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection