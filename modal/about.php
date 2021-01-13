
<form action="api/add.php" method="post" enctype="multipart/form-data">
<div>
    輸入文字:<textarea name="about" style="width:95%;height:60px"></textarea>
</div>
<input type="hidden" name="table" value="<?=$do;?>">
<input type="submit" value="送出">  
<input type="reset" value="重設">
</form>