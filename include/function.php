<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xing
 * Date: 2015/6/15
 * Time: 20:14
 */


function get_file(){
    $full_path = $_SERVER['PHP_SELF'];
    $file = basename($full_path);
    return $file;
}


function get_title(){
    $file = get_file();
    $title = Array(
        'index.php'=>'实验室主页',
        'instrument.php'=>'仪器培训',
        'video.php'=>'视频观看',
        'clipboard.php'=>'剪切板',
        'search.php'=>'搜索',
    );
    echo $title[$file];
}


function get_import(){
    $file = get_file();
    echo 'style/'.substr($file,0,-4).'.css';
}


function get_video_site(){
    $element = array(
        'http://',
        $_SERVER['HTTP_HOST'],
        dirname($_SERVER['REQUEST_URI']),
        '/video/',
    );
    return implode('', $element);
}


function get_video_info($id){
    $xml=simplexml_load_file('video/video.xml');
    $video = $xml->xpath('video[@id="'.$id.'"]');
    $filename = (string)($video[0]->filename);
    $url = get_video_site().$filename.'.mp4';
    $description = (string)($video[0]->description);
    $bigimage = get_video_site().'big/'.$filename.'.jpg';
    $smallimage = get_video_site().'small/'.$filename.'.jpg';
    $ret = array(
        'url'=>$url,
        'description'=>$description,
        'bigimage'=>$bigimage,
        'smallimage'=>$smallimage,
    );
    return $ret;
}

function get_cat_info($id){
    $xml=simplexml_load_file('video/video.xml');
    //根据id获得属性
    $cats = $xml->xpath('video[@id="'.$id.'"]/@cat');
    //一般来说根据xpath获得的都是数组类型
    $cat = (string)$cats[0];
    //根据获得的类别，查询该类别的节点个数
    $videos = $xml->xpath('video[@cat="'.$cat.'"]');
    //获得视频的路径
    $video_site = get_video_site();
    $ret = array();
    for($i=0;$i<count($videos);$i++){
        $tmpfn = (string)($videos[$i]->filename);
        $tmpdescription = (string)($videos[$i]->description);
        //根据节点获得id
        $ids = $videos[$i]->xpath('./@id');
        $id = (string)$ids[0];
        //组装成smallimage的地址
        $smallimage = $video_site.'small/'.$tmpfn.'.jpg';
        $ret[$i] = array('url'=>'video.php?id='.$id, 'smallimage'=>$smallimage, 'title'=>$tmpdescription,);
    }
    return $ret;
}


function get_video_image($id, $flag){
    //根据id,flag获得视频的大截图或者小截图
    $videoinfo = get_video_info($id);
    echo $videoinfo[$flag];
}

function get_relate_video($wd){
    $xml=simplexml_load_file('video/video.xml');
    $videos = $xml->xpath('video[contains(description,"'.$wd.'")]');
    $ret = array();
    for($i=0;$i<count($videos);$i++){
        $tmpfn = (string)($videos[$i]->filename);
        $ids = $videos[$i]->xpath('./@id');
        $id = (string)$ids[0];
        $cats =$videos[$i]->xpath('./@cat');
        $cat = (string)$cats[0];
        $title = (string)($videos[$i]->description);
        $ret[$i] = array(
            'filename'=>$tmpfn,
            'id'=>$id,
            'cat'=>$cat,
            'title'=>$title,
        );
    }
    return $ret;
}


function get_repeat_str(){
    echo str_repeat('&nbsp;', 6);
}


function filter_content($content){
    echo str_repeat('&nbsp;',6).$content;
}
