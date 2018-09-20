<Doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>意见反馈</title>
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        .yjfk {
            margin-top: 50px;
        }
        </style>
    </head>

    <body>
        <div class="col-md-4 col-md-offset-4 yjfk">
            <p style="font-size:30px;margin-left:200px;">意见反馈</p>
            <form class="form-horizontal" action="/ycreate" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-10">
                        <input type="text" name="uemail" class="form-control" id="inputPassword3" placeholder="请输入你的用户名">
                    </div>
                </div>
                <textarea class="form-control" name="yijian" rows="3" name="意见" placeholder="请留下你的宝贵意见"></textarea>
                <div class="form-group" style="margin-top:30px;margin-left:-100px">
                    <div class="col-sm-offset-2 col-sm-10">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit">提交</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit"><a href="/" style="color: black;">返回</button>
                    </div>
                </div>
            
                {{csrf_field()}}
            </form>
	   </div>
	</body>	
</html>