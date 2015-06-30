<?php include('include/head.php');?>
<script>
    $(function(){
        $('.sel-content').keyup(function(){
            $.post('clipboard.php',{'content':$('.sel-content').val()},function(){

            });
        });
    });

</script>
    <div class="sel-wrap form-group">
        <label for="name">请输入剪切板内容(自动保存)</label>
        <textarea class="sel-content form-control" rows="6"></textarea>
    </div>
<?php include('include/foot.php');?>

<?php
    if(isset($_POST['content'])){
        file_put_contents('content/clipboard.txt',$_POST['content']);
    }
?>
