<?php include("include/function.php");?>
<!doctype html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title><?php get_title();?></title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link href="http://js.mplant.pw/lib/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://js.mplant.pw/lib/bootstrap-3.3.5-dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="/awesome/css/font-awesome.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="<?php get_import();?>"/>
    <link type="text/css" rel="stylesheet" href="/style/head.css"/>
    <link type="text/css" rel="stylesheet" href="/style/foot.css"/>
    <script src="http://js.mplant.pw/lib/jquery/jquery.min.js"></script>
    <script src="http://js.mplant.pw/lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
        extensions: ["tex2jax.js"],
        jax: ["input/TeX", "output/HTML-CSS"],
        tex2jax: {
            inlineMath: [ ['$','$'], ["\\(","\\)"] ],
            displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
            processEscapes: true
        },
        "HTML-CSS": { availableFonts: ["TeX"] },
        });
    </script>
    <script type="text/javascript" src="http://js.mplant.pw/lib/MathJax/MathJax.js"></script>
    <script>
        $(function(){
            $('#wd').keydown(function(e){
                if(e.keyCode==13){
                    window.location = 'search.php?cat=video&wd='+$('#wd').val();
                }
            });
        });
    </script>

</head>
<body>
<div id="wrap">

<nav class="navbar navbar-default" role="navigation">
<!--  navbar-container is added myself-->
    <div class="navbar-container">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/index.php"><i class="fa fa-home"></i>首页</a></li>
            <li><a href="/instrument.php">仪器培训</a></li>
            <li><a href="/clipboard.php">剪切板</a></li>
        </ul>
        <div class="search-wrap">
            <div class="search-text input-append">
                <input type="text" placeholder="请输入需要搜索的视频" id="wd">
                <span class="add-on"><i class="fa fa-search"></i></span>
            </div>
        </div>
    </div>
</nav>


