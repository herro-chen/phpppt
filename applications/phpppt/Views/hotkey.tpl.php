<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>phpppt client</title>
    <link rel="stylesheet" media="all" href="/css/nodeppt.css">
    <link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="/css/phone.css">
    <link rel="stylesheet" href="/js/highlight/styles/monokai_sublime.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/theme.moon.css">
</head>
<body>
<div class="slides">
    <?php
        include NET_ROOT . '/Views/inc/hotkey.tpl.php';
    ?>
</div>
<canvas id="drawBoard" class="draw-board" width="900" height="700"></canvas>
<div class="progress"><span id="progress"></span></div>
<div id="_buttons">
    <div class="_btn-box" id="_btn-box" style="display:none;">
        <button class="fa fa-arrow-circle-left" id="_btn-prev"></button>
        <button class="fa fa-arrow-circle-right" id="_btn-next"></button>
        <button class="fa fa-paint-brush" id="_btn-brush"></button>
        <button class="fa fa-compress" id="_btn-overview" data-toggle="fa fa-expand"></button>
    </div>
    <button class="fa fa-bars" id="_btn-bar"  data-toggle="fa fa-close"></button>
</div>
<script src="/js/mixjs/lib/mix.0.3.0.min.js"></script>
<script>
var base = location.protocol + '//' + location.host;

MixJS.config({
    baseURL: [ base, 'js'].join('/')+'/'
});

</script>
<script src="/js/mixjs/lib/event/broadcast.js"></script>
<script src="/js/nodeppt.js"></script>
<script>
Slide.init({
    containerID: 'container',
    drawBoardID: 'drawBoard',
    slideClass: '.slide',
    buildClass: '.build',
    progressID: 'progress',
    transition: 'zoomin/cards/slide/...',
    width: 1100,
    dir: './',
    
    //打开下面的注释就开启postMessage方式
    //访问网址127.0.0.1:8080/ppt/demo#client
    control:{
        type: 'postMessage',
        args:{
            isControl:  false
        }
    },
    
    tipID: 'tip'
});
MixJS.loadJS('highlight/highlight.pack.js',function(){
    hljs.tabReplace = '  ';
    hljs.initHighlightingOnLoad();
});
</script>
<!--placeholder-->
</body>
</html>