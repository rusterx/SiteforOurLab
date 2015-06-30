<?php include("include/head.php");?>

<script src="js/instrument-bind.js"></script>

<div class="main-instrument">
    <div class="panel-group instrument-nav" id="accord">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#absMenu" data-parent="accord" data-toggle="collapse">吸收光谱</a>
                </h4>
            </div>
            <div id="absMenu" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul class="instrument-nav-menu">
                        <li><a href="#absOrigin">原理介绍</a></li>
                        <li><a href="#absUsages">视频观看</a></li>
                        <li><a href="#blank">文档下载</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#romanMenu" data-parent="accord" data-toggle="collapse">拉曼光谱</a>
                </h4>
            </div>

            <div id="romanMenu" class="panel-collaspse  collapse">
                <div class="panel-body">
                    <ul class="instrument-nav-menu">
                        <li><a href="#romanOrigin">原理介绍</a></li>
                        <li><a href="#blank">视频观看</a></li>
                        <li><a href="#blank">文档下载</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#yingMenu" data-parent="accord" data-toggle="collapse">荧光光谱</a>
                </h4>
            </div>
            <div id="yingMenu" class="panel-collaspse  collapse">
                <div class="panel-body">
                    <ul class="instrument-nav-menu">
                        <li><a href="#blank">原理介绍</a></li>
                        <li><a href="#blank">视频观看</a></li>
                        <li><a href="#blank">文档下载</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#hongMenu" data-parent="accord" data-toggle="collapse">红外光谱</a>
                </h4>
            </div>
            <div id="hongMenu" class="panel-collaspse  collapse">
                <div class="panel-body">
                    <ul class="instrument-nav-menu">
                        <li><a href="#blank">原理介绍</a></li>
                        <li><a href="#blank">视频观看</a></li>
                        <li><a href="#blank">文档下载</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>





    <div id="instrumentIntro" class="panel panel-default instrument-body">
        <div class="panel-heading">
            <h4 class="panel-title">简介</h4>
        </div>
        <div class="panel-body">
            <p>
                <?php
                $content = file_get_contents('content/intro.txt');
                filter_content($content);
                ?>
            </p>
        </div>
    </div>

    <div id="absOrigin" class="panel panel-default instrument-body">
        <div class="panel-heading">
            <h4 class="panel-title">吸收光谱原理介绍</h4>
        </div>
        <div class="panel-body">
            <p>
                <?php
                $content = file_get_contents('content/absOrigin.txt');
                filter_content($content);
                ?>
            </p>
        </div>
    </div>

    <div id="absUsages" class="panel panel-default instrument-body">
        <div class="panel-heading">
            <h4 class="panel-title">吸收光谱使用方法</h4>
        </div>
        <div class="panel-body">
            <ul>
                <li><a href="video.php?id=1"
                        class="tooltip-options"
                        title="<img class='img-circle' src='<?php get_video_image(1, 'smallimage');?>'/>"
                        data-placement="bottom">吸收光谱的维修</a>
                </li>
                <li><a href="video.php?id=2"
                        class="tooltip-options"
                        title="<img class='img-circle' src='<?php get_video_image(2, 'smallimage');?>'/>"
                        data-placement="bottom">吸收光谱的使用范例（一）</a>
                </li>
                <li><a href="video.php?id=3"
                        class="tooltip-options"
                        title="<img class='img-circle' src='<?php get_video_image(3, 'smallimage');?>'/>"
                        data-placement="bottom">吸收光谱的原理</a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        $(function(){
           $('.tooltip-options').tooltip({html:true});
        });
    </script>
    <div id="romanOrigin" class="panel panel-default instrument-body">
        <div class="panel-heading">
            <h4 class="panel-title">拉曼光谱原理介绍</h4>
        </div>
        <div class="panel-body">
            <p>
                <?php
                $content = file_get_contents('content/romanOrigin.txt');
                filter_content($content);
                ?>
            </p>
        </div>
    </div>

    <div id="blank" class="panel panel-default instrument-body">
        <div class="panel-heading">
            <h4 class="panel-title">提示</h4>
        </div>
        <div class="panel-body">
            <p>
                该栏目还没有相关内容。
            </p>
        </div>
    </div>
</div>


<?php include("include/foot.php");?>