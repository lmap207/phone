@extends('layouts.home')
@section('content')
    <!-- 轮播图开始 -->
       <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>js无缝轮播图-jq22.com</title>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<style>
* {
	margin:0;
	padding:0;
}
img {
	width:200px;
	height:310px;
	float:left;
}
#outer {
	margin:50px auto;
	width:1200px;
	height:310px;
	/*border:1px solid crimson;*/
	overflow:hidden;
	/*把多余的部分隐藏掉*/
}
#inner {
	width:2000px;
	height:310px;
}
#inner div {
	float:left;
}
</style>
</head>
<body>
<div id="outer">
    
    <div id="inner">
        <div id="demo1">
    
              
            <img src="/uploads/lbt/01.jpg" >
            <img src="/uploads/lbt/02.jpg">
            <img src="/uploads/lbt/03.jpg">
            <img src="/uploads/lbt/04.jpg">
     
        </div>
        <div id="demo2">
        </div>
    </div>
</div>


<script>
//定义变量初值
var dOuter = null;
var demo1 = null;
var demo2 = null;
var timer = null;
//绑定事件
window.onload = function() {
    dOuter = document.getElementById('outer');
    demo1 = document.getElementById('demo1');
    demo2 = document.getElementById('demo2');
    demo2.innerHTML = demo1.innerHTML;
    //			timer=setInterval(moveLeft,10);
    clock();
    //绑定鼠标
    dOuter.onmouseover = function() {
        clearInterval(timer);
    }
    dOuter.onmouseout = function() {
        //				timer=setInterval(moveLeft,10);
        clock()
    }
}

//重新定义一个函数
function clock() {
    clearInterval(timer);
    timer = setInterval(moveLeft, 10);
}

function clock2() {
    clearInterval(timer);
    timer = setInterval(moveRight, 10);
}

//计时器函数
function moveLeft() {
    //容器向左滚动的距离
    dOuter.scrollLeft += 2;
    //判断临界值
    if (dOuter.scrollLeft >= demo1.offsetWidth) {
        dOuter.scrollLeft = 0;
    }

    //每一幅图停顿一次
    if (dOuter.scrollLeft % 200 == 0) {
        clearInterval(timer);
        timer = setTimeout(clock, 1500);
    }
}
//向右
function moveRight() {
    //容器向右滚动的距离
    dOuter.scrollLeft -= 2;
    //判断临界值
    if (dOuter.scrollLeft <= 0) {
        dOuter.scrollLeft = demo1.offsetWidth;
    }

}
</script>

</body>
</html>
 
 
   <!-- 轮播图结束 -->
@endsection

