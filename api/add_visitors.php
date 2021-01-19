<?php
/*訪客訊息*/
include_once "../base.php";
$_POST['reply']=0;
$Visitors->save($_POST);
to("../index.php");
?>