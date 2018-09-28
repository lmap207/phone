
@extends('layouts.home') @section('daohang')

	<div class="right-content f-fr">
                @if (Session::Has('success'))
                <div class="alert alert-info " role="alert" style="text-align: center;">{{Session::get('success')}}</div>
                @endif
                
                @if (Session::Has('error'))
                <div class="alert alert-danger" role="alert" style="text-align: center;">{{Session::get('error')}}</div>
                @endif
      <div class="qlogin" id="qlogin" style="display: block; ">
            <div class="web_login" style="text-align:center">          
	<form action="/email/send"  class="form-horizontal" method="post">  <div class="form-group">
	 <label for="inputPassword3" class="col-sm-2 control-label"> </label>
	 <div class="col-sm-7">  
		{{csrf_field()}}
		邮箱名：<input type="email" name="email">
	</div></div>
	<div class="form-group">
	 <label for="inputPassword3" class="col-sm-2 control-label"> </label>
	 <div class="col-sm-7">  
		
		密码名：<input type="password" name="password">
	</div></div>
	<div style="heigth:30px"></div>
	<div class="form-group">
	 <label for="inputPassword3" class="col-sm-2 control-label"> </label>
	 <div class="col-sm-7">  
		
		留言内容：<textarea name="as"></textarea>
	</div></div>
		<div class="form-group">
	 <label for="inputPassword3" class="col-sm-2 control-label"></label>
	 <div class="col-sm-7">  
		
		<input type="submit" value="提交" onclick="alert('回复成功')">
        
	</div></div>
		
	</form>
</div>
</div>
@endsection