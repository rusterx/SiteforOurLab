<?php include("include/head.php");?>

<script src="js/instrument-bind.js"></script>


<div class="main-instrument">
    <div class="easyui-accordion instrument-nav" data-options="multiple:false"  id="abs">
        <div title="吸收光谱">
            <ul class="instrument-nav-menu">
                <li><a href="#absOrigin">原理介绍</a></li>
                <li><a href="#absUsages">视频观看</a></li>
                <li><a href="#">文档下载</a></li>
            </ul>
        </div>
        <div title="拉曼光谱">
            <ul class="instrument-nav-menu">
                <li><a href="#romanUsages">原理介绍</a></li>
                <li><a href="#">视频观看</a></li>
                <li><a href="#">文档下载</a></li>
            </ul>
        </div>
        <div title="荧光光谱">
            <ul class="instrument-nav-menu">
                <li><a href="#">原理介绍</a></li>
                <li><a href="#">视频观看</a></li>
                <li><a href="#">文档下载</a></li>
            </ul>
        </div>
        <div title="红外光谱">
            <ul class="instrument-nav-menu">
                <li><a href="#">原理介绍</a></li>
                <li><a href="#">视频观看</a></li>
                <li><a href="#">文档下载</a></li>
            </ul>
        </div>
    </div>

    <div class="instrument-body" id="instrumentIntro">
        <div class="easyui-panel"  title="简介">
            <p>
                <?php
                    $content = file_get_contents('content/intro.txt');
                    filter_content($content);
                ?>
            </p>
        </div>
    </div>

    <div class="instrument-body" id="absOrigin">
        <div  class="easyui-panel"  title="吸收光谱原理介绍">
            <p>
                <?php
                    $content = file_get_contents('content/absOrigin.txt');
                    filter_content($content);
                ?>
            </p>
        </div>
    </div>

    <div class="instrument-body" id="absUsages">
        <div  class="easyui-panel"  title="吸收光谱使用方法">
            <div class="video-col">
                <img  class='li-img' src="<?php get_video_image(1, 'smallimage');?>"/><br/>
                <a href="video.php?id=1">吸收光谱的维修</a><br/>
            </div>
            <div class="video-col">
                <img  class='li-img' src="<?php get_video_image(2, 'smallimage');?>"/><br/>
                <a href="video.php?id=2">吸收光谱的使用范例（一）</a><br/>
            </div>
            <div class="video-col">
                <img  class='li-img' src="<?php get_video_image(3, 'smallimage');?>"/><br/>
                <a href="video.php?id=3">吸收光谱的原理</a><br/>
            </div>
        </div>
    </div>

    <div class="instrument-body" id="romanUsages">
        <div  class="easyui-panel"  title="拉曼光谱原理介绍">
            <p>
                <?php
                    $content = file_get_contents('content/romanOrigin.txt');
                    filter_content($content);
                ?>
            </p>
        </div>
    </div>
</div>


<?php include("include/foot.php");?>