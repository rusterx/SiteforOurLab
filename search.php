<?php include('include/head.php');?>

<?php
    $cat = '';
    $wdd = '';
    if(isset($_GET['cat'])&&isset($_GET['wd'])){
        $cat = $_GET['cat'];
        $wd = $_GET['wd'];
    }else{
        echo "请输入搜索关键字！";
        include('include/foot.php');
        die();
    }
?>
<?php if($cat='video'){?>
    <?php
        $videos_info=get_relate_video($wd);
    ?>
    <table id="videoSearch" class="table table-striped">
        <caption>视频搜索结果</caption>
        <thead>
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>名称</th>
            <th>类别</th>
        </tr>
        </thead>
        <tbody>
        <?php
            if(!count($videos_info)){
                echo "<tr><td>没有相关视频！</td></tr>";
            }else {
                for ($i = 0; $i < count($videos_info); $i++) {
                    $video_info = $videos_info[$i];
                    echo '<tr>';
                    $id = $video_info['id'];
                    echo "<td><a target='_blank' href='video.php?id=$id'>$id</a></td>";
                    echo '<td>' . $video_info['title'] . '</td>';
                    echo '<td>' . $video_info['filename'] . '</td>';
                    echo '<td>' . $video_info['cat'] . '</td>';
                    echo '</tr>';
                }
            }
        ?>
        </tbody>
    </table>
<?php }?>
<?php include('include/foot.php');?>