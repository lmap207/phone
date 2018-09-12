<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>魅族后台</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href="/htlogin
/css/base.css" rel="stylesheet" type="text/css">
    <link href="/htlogin/css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="am-u-sm-10 login-am-center">
        @if(Session::has('success'))
        <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
            <div class="dashboard-stat green">
                <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('success')}} </div>
            </div>
        </div>
        @endif @if(Session::has('error'))
        <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
            <div class="dashboard-stat red">
                <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('error')}} </div>
            </div>
        </div>
        @endif
    </div>
    <div class="login">
        <form action="/admin/login" method="post" id="form">
            <div class="logo"></div>
            <div class="login_form">
                <div class="user">
                    <input class="text_value" value="" name="name" type="text" id="username" placeholder="请输入用户名">
                    <input class="text_value" value="" name="password" type="password" placeholder="请输入密码" id="password">
                </div>
                <button class="button" id="submit" type="submit">登录</button>
            </div>

            @endif
    </div>       
<div class="login">
	<form action="/admin/login" method="post" id="form">
		<div class="logo"></div>
	    <div class="login_form">
	    	<div class="user">

	        	<input class="text_value" value="" name="username" type="text" id="username" placeholder="请输入用户名">
	            <input class="text_value" value="" name="password" type="password" placeholder="请输入密码" id="password">
	        </div>
	        <button class="button" id="submit" type="submit">登录</button>
	    </div>
	    {{csrf_field()}}
	    <div id="tip"></div>
	    <div class="foot">
		Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="#"></a>
	    </div>
	</form>
</div>
<script>var basedir='/public/ui/';</script>
<script src="/htlogin/ui/do.js"></script>
<script src="/htlogin/ui/config.js"></script>
<script>
Do.ready('form', function() {
	$("#form").Validform({
			ajaxPost:true,
			postonce:true,
			tiptype:function(msg,o,cssctl){
				if(!o.obj.is("form")){
					var objtip=o.obj.siblings(".Validform_checktip");
					cssctl(objtip,o.type);
					objtip.text(msg);
				}else{
					var objtip=o.obj.find("#tip");
					cssctl(objtip,o.type);
					if(o.type==2){
						window.location.href='index.php?r=admin/index/index';
					}else{
						objtip.text(msg);
					}
				}
			}
	});
});

</script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
            {{csrf_field()}}
            <div id="tip"></div>
            <div class="foot">
                Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="#"></a>
            </div>
        </form>
    </div>
    <script>
    var basedir = '/public/ui/';
    </script>
    <script src="/htlogin/ui/do.js"></script>
    <script src="/htlogin/ui/config.js"></script>
    <script>
    Do.ready('form', function() {
        $("#form").Validform({
            ajaxPost: true,
            postonce: true,
            tiptype: function(msg, o, cssctl) {
                if (!o.obj.is("form")) {
                    var objtip = o.obj.siblings(".Validform_checktip");
                    cssctl(objtip, o.type);
                    objtip.text(msg);
                } else {
                    var objtip = o.obj.find("#tip");
                    cssctl(objtip, o.type);
                    if (o.type == 2) {
                        window.location.href = 'index.php?r=admin/index/index';
                    } else {
                        objtip.text(msg);
                    }
                }
            }
        });
    });
    </script>
    <div style="display:none">
        <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
    </div>

</body>

</html>