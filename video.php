<?php include('include/head.php');?>

<?php

$url = '';
$description = '';
$pngurl = '';
$cat = '';

if(isset($_GET['id'])){
    $videoinfo = get_video_info($_GET['id']);
    $url = $videoinfo['url'];
    $description = $videoinfo['description'];
    $bigimage = $videoinfo['bigimage'];
}else{
    die('没有指定播放的视频！');
}

?>

<div class="video-center">

    <div id="videoRight" class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">相关视频</h4>
        </div>
        <div class="panel-body">
                <?php
                $cat = get_cat_info($_GET['id']);
                for($i=0;$i<count($cat);$i++){
                    echo '<a title="'.$cat[$i]['title'].
                        '" href="'.$cat[$i]['url'].
                        '"><img class="relate-video" src="'.
                        $cat[$i]['smallimage'].'"/></a>';
                }
                ?>
        </div>
    </div>

    <div id="videoCenter" class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><?php echo $description;?></h4>
        </div>
        <div class="panel-body">
            <link href="http://js.mplant.pw/lib/player/skins/overlay/player-min.css" rel="stylesheet" type="text/css" />
            <script src="http://js.mplant.pw/lib/player/scripts/jquery-1.7.1.min.js" ></script>
            <script src="http://js.mplant.pw/lib/player/scripts/jquery-ui-1.8.15.custom.min.js" ></script>
            <script src="http://js.mplant.pw/lib/player/scripts/swfobject.js"></script>
            <script src="http://js.mplant.pw/lib/player/scripts/modernizr.js"></script>
            <script src="http://js.mplant.pw/lib/player/scripts/handlebars.js"></script>
            <script src="http://js.mplant.pw/lib/player/scripts/config_xml.js"></script>
            <script src="http://js.mplant.pw/lib/player/scripts/player-min.js" charset="utf-8"></script>
            <div class="video-player">
                <div id="tscVideoContent"></div>
                <script>
                    TSC.playerConfiguration.setFlashPlayerSwf("http://js.mplant.pw/lib/player/player.swf");
                    TSC.playerConfiguration.setMediaSrc("<?php echo $url; ?>");
                    //TSC.playerConfiguration.setXMPSrc("Untitled_config.xml");
                    TSC.playerConfiguration.setAutoHideControls(true);
                    TSC.playerConfiguration.setBackgroundColor("#000000");
                    TSC.playerConfiguration.setCaptionsEnabled(false);
                    TSC.playerConfiguration.setSidebarEnabled(false);
                    TSC.playerConfiguration.setAutoPlayMedia(false);
                    TSC.playerConfiguration.setPosterImageSrc("<?php echo $bigimage;?>");
                    TSC.playerConfiguration.setIsSearchable(true);
                    TSC.playerConfiguration.setEndActionType("stop");
                    TSC.playerConfiguration.setEndActionParam("true");
                    TSC.playerConfiguration.setAllowRewind(-1);
                    TSC.localizationStrings.setLanguage(TSC.languageCodes.ENGLISH);
                    $(document).ready(function (e) {
                        TSC.mediaPlayer.init("#tscVideoContent");
                    });
                </script>
            </div>
        </div>
    </div>
</div>

<?php include('include/foot.php');?>