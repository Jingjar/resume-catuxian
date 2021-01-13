<form action="api/add.php" method="post" enctype="multipart/form-data">
<div>
    <p>新增學歷：<input type="text" name="edu"></p>
    <p>開始日期：<input type="date" name="start_e"></p>
    <p>結束日期：<input type="date" name="end_e"></p>
</div>
<hr>
<input type="hidden" name="table" value="<?=$do;?>">
<input type="submit" value="送出">  
<input type="reset" value="重設">
</form>