<?php
    include_once "../base.php";

    $acc=$_POST['acc'];
    $pw=$_POST['pw'];

    if(($Login->count(['acc'=>$acc,'pw'=>$pw]))>0){
        $row=$Login->all(['acc'=>$acc,'pw'=>$pw]);
        $_SESSION['login']=$row['name'];
        to("../backend.php");
    }else{
        to("../login.html");
    }


?>