<?php include("include/function.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php get_title();?></title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="<?php get_import();?>"/>
    <link type="text/css" rel="stylesheet" href="style/head.css"/>
    <link type="text/css" rel="stylesheet" href="style/foot.css"/>
    <link type="text/css" rel="stylesheet" href="http://js.mplant.pw/lib/easyui/themes/icon.css"/>
    <link type="text/css" rel="stylesheet" href="http://js.mplant.pw/lib/easyui/themes/metro/easyui.css"/>
    <script src="http://js.mplant.pw/lib/easyui/jquery.min.js"></script>
    <script src="http://js.mplant.pw/lib/easyui/jquery.easyui.min.js"></script>
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
</head>
<body>
<div class="head-part">
    <nav class="head-nav">
        <a class="nav-menu" href="index.php" id="firstmenu">首页</a>
        <a class="nav-menu" href="instrument.php">仪器培训</a>
    </nav>

</div>
