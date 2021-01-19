<form action="api/add.php" method="post" enctype="multipart/form-data">
<div>
    <p>新增工作經歷：<input type="text" name="title"></p>
    <p>開始日期：<input type="date" name="start"></p>
    <p>結束日期：<input type="date" name="end"></p>
</div>
<input type="hidden" name="table" value="exp">
<input type="submit" value="送出">  
<input type="reset" value="重設">
</form>