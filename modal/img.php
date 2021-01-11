
<form action="api/add.php" method="post" enctype="multipart/form-data">
<div>
    上傳圖片:<input type="file" name="img">
</div>
<div>
    替代文字:<input type="text" name="text">
</div>
<input type="hidden" name="table" value="<?=$do;?>">
<input type="submit" value="送出">
<input type="reset" value="重設">
</form>