<form action="api/add.php" method="post" enctype="multipart/form-data">
<div>
    <p>新增圖片：<input type="file" name="img"></p>
    <p>標題：<input type="text" name="title"></p>
    <p>技能介紹：<input type="text" name="text"></p>
</div>
<hr>
<input type="hidden" name="table" value="<?=$do;?>">
<input type="submit" value="送出">  
<input type="reset" value="重設">
</form>