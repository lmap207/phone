@extends('layouts.home') @section('content') 

<style>
        *{
            margin:0px;
            padding:0px;
            list-style:none;
        }
        #slide{
            width:1520px;
            height:480px;
            border:solid 1px #ddd;
            margin:100px auto;
            position:relative;
            overflow: hidden;
        }
        #images {
            width:2250px;
            position:absolute;
        }
        #images li{
            width:1520px;
            height:480px;
            left:0px;
            top:0px;
            float:left;
        }

        #dots{
            width:200px;
            height:20px;
            position:absolute;
            left:180px;
            bottom:5px;
        }

        #dots li{
            width: 10px;
            height: 10px;
            background:#aef;
            float:left;
            margin-right:5px;
            border-radius:50%;
        }

        #dots .active{
            background:black;
        }
    </style>
    <div id="slide">
        <ul id="images">
            <li><img src="/qiantai/img/1458725501-57846.jpg" width="1560" height="480" alt=""></li>
            <li><img src="/qiantai/img/1458285012-23841.jpg" width="1560" height="480" alt=""></li>
            <li><img src="/qiantai/img/1458541851-33151.jpg" width="1560" height="480" alt=""></li>
            <li><img src="/qiantai/img/1458542539-29472.jpg" width="1560" height="480" alt=""></li>
            <li><img src="/qiantai/img/1458546669-26155.png" width="1560" height="480" alt=""></li>
        </ul>

        <ul id="dots">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
        var index = -1;
        var timer = null;

        $('#dots li').mouseover(function(){
            //清除定时器
            clearInterval(timer);
            //修改图片的显示的内容
            index  = $(this).index();
            //显示当前索引的图片和点
            show(index);
        }).mouseout(function(){
            // 启动定时器
            autoRun();
        });

        //自动变化
        function autoRun() {
            timer = setInterval(function(){
                index++;
                //显示当前索引对应 图片和点
                show(index);
                //判断
                if(index >= $('#images li').length-1) {
                    index = -1;
                }
            }, 3000);
        }
        //显示当前索引对应图片和点
        function show(index) {
            //点样式发生改变
            $('#dots li').removeClass('active');
            $('#dots li').eq(index).addClass('active');
            //切换图片
            //使其他索引的元素隐藏
            $('#images>li').fadeOut();      //siblings  
            //使当前索引的元素显示
            $('#images>li').eq(index).fadeIn();
        }
        autoRun();
    </script>

@endsection
<!--这里是广告效果-->
<div id="div1" style="position:fixed;right:10px;top:80%;margin-top:-100px;width:200px;height:200px;border:0px #cd1b1b solid; display: block">
    <button id="gg_1" style="position:absolute;right:0px" onclick="qx()">×</button>
    <a href="#"><img src="{{$adverts->adpic}}" style="width:200px;height:200px" ></a>
</div>
<script type="text/javascript">
function qx() {
    document.getElementById('div1').style.display = 'none';
}
</script>
<div id="div2" style="position:fixed;left:10px;top:80%;margin-top:-100px;width:200px;height:200px;border:0px #cd1b1b solid; display: block">
    <button id="gg_2" style="position:absolute;right:0px"></button>
    <a href="#"><img src="{{$adverts->adpic}}" style="width:200px;height:200px" ></a>
</div>
<script>
setTimeout(function() {
    document.getElementById('div2').style.display = 'none';
}, 7000);
</script>
<!--广告结束-->