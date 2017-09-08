<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<div id="container" data-PageSwitch>
    <div class="sections">
        <div class="section active" id="section0">
            <div class="intro">
                <h1 class="title">switchPage</h1>
                <p>Create Beautiful Fullscreen Scrolling Websites</p>
            </div>
        </div>
        <div class="section" id="section1">
            <div class="intro">
                <h1 class="title">Example</h1>
                <p>HTML markup example to define 4 sections</p>
                <img src="images/example.png"/>
            </div>
        </div>
        <div class="section" id="section2">
            <div class="intro">
                <h1 class="title">Example</h1>
                <p>The plug-in configuration parameters</p>
                <img src="images/example2.png"/>
            </div>
        </div>
        <div class="section" id="section3">
            <div class="intro">
                <h1 class="title">THE END</h1>
                <p>Everything will be okay in the end. If it's not okay, it's not the end.</p>
            </div>
        </div>
    </div>
</div>
</body>

<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="pageswitch.js"></script>
<script type="text/javascript">
    $("#container").PageSwitch({
        index: 0,    //页面开始的索引，0是第一页。
        easing: "linear",   //动画效果。  ease
        duration: 500,      //动画执行时间
        loop: true,         //是否循环切换
        pagination: true,   //是否进行分页
        keybosrd: true,     //是否出发键盘事件
        direction: "vertical",    //滑动方向：vertical（竖版）。horizontal（横板）
        callback: function () {
            $("h1").addClass("slide");
        }
    });
</script>
</html>
